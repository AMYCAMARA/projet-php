<?php

namespace ism\controllers;

use ism\lib\AbstractController;
use ism\lib\PasswordEncoder;
use ism\lib\Request;
use ism\lib\Response;
use ism\lib\Role;
use ism\lib\Session;
use ism\models\AnneeScolaireModel;
use ism\models\ClasseModel;
use ism\models\ModuleModel;
use ism\models\UserModel;

/**
 * SecurityController class
 * Controleur du package securité qui permet de gerer
 * L'inscription d'un nouveau profile
 * La supprission d'un compte
 * Modification des information d'un user
 * Affichage des utilisateur
 */
class SecurityController extends AbstractController
{
    private string $profile = "security/profile";
    private string $viewLogin = "security/login";
    private string $viewOut = "security/logout";
    private string $error = "error/404";
    private string $acces = "error/403";

    /**
     * FOnction qui permet de gerer la connexion au systeme
     * @param Request $request
     */
    public function login(Request $request)
    {
        if ($request->isPost()) {
            $data = $request->getBody();
            if (!$this->validator->estVide($data["login"], "login")) {
                $this->validator->estMail($data["login"], "login");
            }
            $this->validator->estVide($data["password"], "password");

            if ($this->validator->formValide()) {
                // login et mot de passe correct
                $model = new UserModel();
                $user = $model->selectUserByLoginPassword($data["login"]);

                if (empty($user)) {
                    $this->validator->setErrors("error_login", "login ou mot de passe incorrect");
                    Session::setSession("array_error", $this->validator->getErrors());

                    Response::redirectUrl($this->viewLogin);

                } else {
                    // login et password correct et existe
                    // set_session("user_connect",$user);
                    Session::setSession("user_connect", $user);
                    if (PasswordEncoder::decode($data["password"], $user["password"])) {

                        $this->render($this->profile, $user );

                    } else {
                        $this->validator->setErrors("error_login", "login ou mot de passe incorrect");
                        Session::setSession("array_error", $this->validator->getErrors());
                        Response::redirectUrl($this->viewLogin);
                    }
                }
            } else {
                //Erreur de validation donc redirection vers page de connexion
                //dd($this->validator->getErrors());
                Session::SetSession("array_error", $this->validator->getErrors());
                Response::redirectUrl($this->viewLogin);
            }
        }
        $this->render($this->viewLogin);
    }

    /**
     * Fonction qui permet de valider le formulaire
     * Champ nom, prenom, email, login, password
     */
    public function validate(Request $request)
    {
        $model = new UserModel();
        $data = $request->getBody();
        $this->validator->estVide($data["nom"], "nom");
        $this->validator->estVide($data["prenom"], "prenom");
        $this->validator->estImage("avatar");
        if (!$this->validator->estVide($data["login"], "login")) {
            if ($this->validator->estMail($data["login"], "login")) {
                if ($model->loginExiste($data["login"])) {
                    $this->validator->setErrors("login", "ce login existe deja dans le systeme");
                }
            }
        }
        $this->validator->estVide($data["password"], "password");
        if ($data["password"] != $data["confirm_password"]) {
            $this->validator->setErrors("confirm_password", "les mots de passe ne correspondent pas");
        }
    }

    /**
     * Permet de creer des comptes Attache et de Responsable
     * Permet a chaque user de modifier ces inforations
    */
    public function register(Request $request)
    {
        if((Role::estAdmin() == true) || ((Role::estResponsable() || Role::estAttache() || Role::estProfesseur() || Role::estEtudiant() ) && isset($request->getParams()[0])))
        {
            $data = $request->getBody();
            $model = new UserModel();
            $role = $_SESSION['user_connect']['role'];
            if($request->getParams() )
            {
                $id= $request->getParams()[0];
                if(!is_numeric(intval($id)))
                {
                    Response::redirectUrl('security/showUser');
                }
                $id=intval($id);
                $user= $model->userById($id);
                if($user){
                    $data['id'] = intval($id);
                    $data['user'] = $user;
                    if(($role == "ROLE_ATTACHE" || $role== "ROLE_RESPONSABLE") &&  $user['role']=="ROLE_ADMIN")
                    {
                        Response::redirectUrl($this->acces);
                    }
                }
                else{
                    Response::redirectUrl('security/showUser');
                }
            }
            if ($request->isPost())
            {
                $this->validate($request);
                if ($this->validator->formValide()) {
                    unset($data["confirm_password"]);
                    $data["password"] = PasswordEncoder::encode($data["password"]);
                    $data["avatar"] = $this->validator->upload("avatar");
                    if(!$request->getParams()) {
                        unset($data['user']);
                        $model->insertUser($data);
                        Response::redirectUrl("security/showUser");
                    }
                    else {
                        $roleUser = $data["user"]['role'];
                        unset($data['user']);
                        $model->update($data);
                        if($role != $roleUser)
                            Response::redirectUrl($this->profile);
                        else
                            Response::redirectUrl($this->viewOut);
                    }
                } else {
                    Session::SetSession("array_error", $this->validator->getErrors());
                    Session::SetSession("array_post", $data);
                }
            }
            $this->render("security/register",["update" => $request->getParams(), 'user'=>$data['user']] );
        }else
        {
            Response::redirectUrl($this->error);
        }
    }

    /**
     * Fonction qui permet de supprimer un utilisateur
     * @param Request
     *
      */
    public function delete(Request $request)
    {
        if(!Role::estAdmin())
        {
            Response::redirectUrl($this->acces);
        }
        $model = new UserModel();
        $id= $request->getParams()[0];
        $user = $model->selectById(intval($id));
        if(!is_numeric($id) || !$user["data"] )
        {
            Response::redirectUrl('security/showUser');
        }
        $model->remove(intval($id));
        Response::redirectUrl('security/showUser');

    }

    /**
     * @param Request $request
     * Permet d'incrire un nouveau etudiant
     */
    public function registerEtudiant(Request $request)
    {

        if(!Role::estAttache())
            Response::redirectUrl($this->acces);
        if ($request->isPost() )
        {
            $model = new UserModel();
            $data = $request->getBody();
            $this->validate($request);
            $this->validator->estVide($data["dateNaissance"], "dateNaissance");
            if ($this->validator->formValide()) {
                unset($data["confirm_password"]);
                $data["password"] = PasswordEncoder::encode($data["password"]);
                $data["role"] = "ROLE_ETUDIANT";
                $data["matricule"] = $model->genereteMatricule();
                $data["competences"] = implode(", ", $data['competences']);
                $data["avatar"] = $this->validator->upload("avatar");
                $model->insertEtudiant($data);
                $model = new UserModel();
                $user = $model->selectUserByLoginPassword($data["login"]);
                $classeModel = new ClasseModel();
                $classeModel->addIdEtudiant($user['id'],$data['classe']);
                Response::redirectUrl("security/showUser");

            } else {
                Session::SetSession("array_error", $this->validator->getErrors());
                Session::SetSession("array_post", $data);
                Response::redirectUrl("security/registerEtudiant");
            }
        }
        $classeModel = new ClasseModel();
        $classes= $classeModel->selectByAnnneClasse();
        $this->render('security/register.etudiant', ['classes'=>$classes]);
    }

    public function registerOldEtudiant(Request $request)
    {
        if(!Role::estAttache())
            Response::redirectUrl($this->acces);
        if($request->isPost())
        {
            $model = new UserModel();
            $data = $request->getBody();
            if (!$this->validator->estVide($data["login"], "login")) {
                if ($this->validator->estMail($data["login"], "login")) {
                    if (!$model->loginExiste($data["login"], 2)) {
                        $this->validator->setErrors("login", "ce login n'existe pas dans le systeme");
                    }
                }
            }
            $user = $model->selectUserByLoginPassword($data["login"]);
            if($data['classe']==$user['classe'])
            {
                $this->validator->setErrors("annee", "ce etudiant existe deja dans cette classe");
            }
            else{
                $classeMoel = new ClasseModel();
            }
            if ($this->validator->formValide()) {
                $data["competences"] = implode(", ", $data['competences']);
                $model->updateOldEtudiant($data);
                $model = new UserModel();
                $user = $model->selectUserByLoginPassword($data["login"]);
                $classeModel = new ClasseModel();
                $classeModel->addIdEtudiant($user['id'],$data['classe']);
                Response::redirectUrl("security/showUser");
            } else {
                Session::SetSession("array_error", $this->validator->getErrors());
                Session::SetSession("array_post", $data);
                Response::redirectUrl("security/registerOldEtudiant");
            }
        }
        $classeModel = new ClasseModel();
        $classes= $classeModel->selectByAnnneClasse();
        $this->render('security/register.old', ['classes'=>$classes]);
    }


    public function registerProfesseur(Request $request)
    {
        if(!Role::estResponsable())
            Response::redirectUrl($this->acces);
        if ($request->isPost()) 
        {
            $model = new UserModel();
            $data = $request->getBody();
            $this->validator->estVide($data["dateNaissance"], "dateNaissance");
            $this->validate($request);
            if ($this->validator->formValide()) {
                unset($data["confirm_password"]);
                $data["password"] = PasswordEncoder::encode($data["password"]);
                $data["avatar"] = $this->validator->upload("avatar");
                $data["role"] = "ROLE_PROFESSEUR";
                $data["matricule"] = $model->genereteMatricule();
                //$data["classes"] = implode(", ", $data['classes']);
                //$data["modules"] = implode(", ", $data['modules']);
                $model->insertProfesseur($data);
                Response::redirectUrl("security/showUser");
            } else {
                Session::SetSession("array_error", $this->validator->getErrors());
                Session::SetSession("array_post", $data);
                Response::redirectUrl("security/registerProfesseur");
            }
        }
        $moduleModel = new ModuleModel();
        $classeModule = new ClasseModel();
        $modules= $moduleModel->selectAll()['data'];
        $classes = $classeModule->selectAll()['data'];
        $this->render("security/register.professeur", ['classes'=>$classes, 'modules'=>$modules]);
    }

    public function logout()
    {
        Session::destroySession();
        Response::redirectUrl($this->viewLogin);
    }

    public function profile()
    {
        if($_SESSION["user_connect"]['classe'])
        {
            $classeModel = new classeModel();
            $classe = $classeModel->selectById(intval($_SESSION["user_connect"]['classe']))['data'];
            $_SESSION["user_connect"]['libelleClasse'] = $classe['libelle'];
            $_SESSION["user_connect"]['niveau'] = $classe['niveau'];
        }
        $this->render($this->profile, $_SESSION["user_connect"]);
    }

    public function showUser()
    {
        $model = new UserModel();
        if(Role::estAdmin())
        {
            $data =$model->selectAllByRole("ROLE_ATTACHE", "ROLE_RESPONSABLE");
        }
        elseif(Role::estResponsable() || Role::estAttache())
        {
            $data = $model->selectAllByRole("ROLE_PROFESSEUR");
        }
        else
        {
            Response::redirectUrl($this->error);
        }
        $this->render("security/show.user", ["users" => $data]);

    }

    public function listerEtudiant(Request $request)
    {
        if(Role::estAdmin() || Role::estEtudiant())
            Response::redirectUrl($this->acces);
            $classeModel = new ClasseModel();
            $anneeScolaireModel = new AnneeScolaireModel();
            $classes= $classeModel->selectByAnnneClasse();
            $annees = $anneeScolaireModel->selectAll()['data'];
            $message = '';
            $messagePasEtudiants = "<span style='color:yellowgreen'>Désole il'n y a pas d'étudiants pour votre critere de filtre</span>";

        if($request->isPost())
        {
            $post = $request->getBody();
            $etudiants = null;
            if($post["id_classe"] == '' AND $post["id_annee_scolaire"] == '')
            {
                $message="veuillez choisir un critére de choix correct";
            }
            elseif(is_numeric($post["id_classe"]))
            {
                $etudiants = $classeModel->selectEtudiantByClasse(intval($post["id_classe"]));
                if(count($etudiants) > 0)
                    $message = "Les Etudiants de Niveau :    ".$etudiants[0]['niveau']." ; Libelle : ".$etudiants[0]['libelle']." ;   Filere : " .$etudiants[0]['filiere'];
                else
                    $message = $messagePasEtudiants;
            }
            elseif(is_numeric($post["id_annee_scolaire"]))
            {
                $etudiants = $anneeScolaireModel->selectEtudiantByAnnee($post["id_annee_scolaire"]);
                if(count($etudiants) > 0)
                    $message = "Les etudiants de l'année scolaire ".$etudiants[0]['annee_scolaire'];
                else
                    $message = $messagePasEtudiants;
            }
            $this->render('security/lister.etudiant',
                ['classes'=>$classes, 'annees'=>$annees, 'etudiants'=>$etudiants, 'message'=>$message]);
        }
        $this->render('security/lister.etudiant', ['classes'=>$classes, 'annees'=>$annees, 'etudiants'=>$etudiants,'message'=>$message ]);
    }
}
