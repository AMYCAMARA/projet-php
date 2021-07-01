<?php

namespace ism\controllers;

use ism\lib\Response;
use ism\lib\Role;
use ism\lib\AbstractController;
use ism\lib\Request;
use ism\lib\Session;
use ism\models\AnneeScolaireModel;
use ism\models\ClasseModel;
use ism\models\CoursModel;
use ism\models\ModuleModel;

/**
 * Class Ressource :  Package ressource permet de :
 * Gerer les modules : CRUD
 * Gerer les cours   : CRUD
 * Gerer les classes
 * Gerer les Années Scolaire
*/
class RessourceController extends AbstractController
{
    /**
     * @param Request $request
     */
    public function planifierCours(Request $request)
    {
        $module =1;
        if( $request->isGet() && isset($request->getParams()['0']) && is_numeric($request->getParams()['0']))
        {
            $module = $request->getParams()['0'];
            $classeModel = new ClasseModel();
            $moduleModel = new ModuleModel();
            $classes = $classeModel->selectByAnnneClasse();
            $professeurs = $moduleModel->selectProfByModule($module);
            if($professeurs==[])
            {
                $this->validator->setErrors('id_module', "Il n'y a aucun professeur qui fait ce module");
                Session::SetSession("array_error", $this->validator->getErrors());
                Response::redirectUrl("ressource/listerModule");
            }
            $this->render('ressource/planifier.cours',
             ['classes'=>$classes, 'professeurs'=>$professeurs, 'classes'=>$classes]);

        }
        elseif($request->isPost())
        {
            $data = $request->getBody();
            $data['module']= $module;
            $this->validator->estVide($data['date'], 'date');
            $this->validator->estVide($data['heure_debut' ],'heure_debut');
            $this->validator->estVide($data['heure_fin'], "heure_fin");
            $uri="ressource/planifierCours/"."$module";
            if($this->validator->formValide())
            {
                $coursModel = new CoursModel();
                $coursModel->insert($data);
                Response::redirectUrl("ressource/listerCours");
            } else {
                Session::SetSession("array_error", $this->validator->getErrors());
                Session::SetSession("array_post", $data);
                Response::redirectUrl($uri);
            }
            dd($data);
        }
        Response::redirectUrl('ressource/listerModule');

    }

    /**
     *
     */
    public function listerModule()
    {
        $moduleModel = new ModuleModel();
        $modules = $moduleModel->selectAll()['data'];
        $this->render('ressource/lister.modules', ['modules'=>$modules]);
    }
    public function listerCours()
    {
        $coursModel = new CoursModel();
        $cours = $coursModel->selectAllBy();
        $this->render('ressource/lister.cours', ['cours'=>$cours]);
    }

    public function coursByProf(Request $request)
    {
        if(isset($request->getParams()[0]) && is_numeric($request->getParams()[0]))
        {
            $id = intval($request->getParams()[0]);
            $coursModel= new CoursModel();
            $coursDuProf = $coursModel->selectCoursByProf($id);
            if( $coursDuProf == [])
            {
                $this->validator->setErrors('id', "Attention ! Ce professeur n'a aucun cours");
                Session::SetSession("array_error", $this->validator->getErrors());
                if(Role::estProfesseur())
                {
                    $this->render("ressource/lister.cours.prof", ['cours'=>$coursDuProf]);
                }
                Response::redirectUrl("security/showUser");
            }
            $this->render("ressource/lister.cours.prof", ['cours'=>$coursDuProf]);
        }
        Response::redirectUrl("security/showUser");
    }

    public function coursByClasse(Request $request)
    {
        if(isset($request->getParams()[0]) && is_numeric($request->getParams()[0]))
        {
            $id = intval($request->getParams()[0]);
            $coursModel= new CoursModel();
            $coursDeClasse = $coursModel->selectCoursByProf($id);
            if( $coursDeClasse != [])
            {
                $this->render("ressource/lister.cours.prof", ['cours'=>$coursDeClasse]);
            }
            $this->validator->setErrors('id', "Attention ! Ce professeur n'a aucun cours");
            Session::SetSession("array_error", $this->validator->getErrors());
            Response::redirectUrl("security/showUser");
        }
        Response::redirectUrl("security/showUser");
    }

    public function listerClasse()
    {
        $classeModel = new ClasseModel();
        $classes = $classeModel->selectByAnnneClasse();
        $this->render('ressource/lister.classes', ['classes'=>$classes]);
    }
    public function listerAnneeScolaire()
    {
        $anneeScolaireModel = new AnneeScolaireModel();
        $annees = $anneeScolaireModel->selectAll();
         $classes = $anneeScolaireModel->selectNombreCclasse();
        $this->render('ressource/lister.annee.scolaire', ['annees'=>$annees['data'], 'classes'=>$classes]);
    }

    public function addModule(Request $request)
    {
        $erreurController = new ErreurController();
        /*Controle des authorisation*/
        if(!Role::estResponsable())
            $erreurController->pageForbidden();
        if($request->isPost())
        {
            $data = $request->getBody();
            $this->validator->estVide($data["libelle"], "libelle");
            $this->validator->estNumeric(intval($data["nombre_heures"]), "nombre_heures");
            if ($this->validator->formValide()) {
                $moduleModel = new ModuleModel();
                $moduleModel->insert($data);
                Response::redirectUrl("ressource/listerModule");
            } else {
                Session::SetSession("array_error", $this->validator->getErrors());
                Session::SetSession("array_post", $data);
                Response::redirectUrl("ressource/addModule");
            }
        }
        $this->render('ressource/add.module');

    }


    public function addClasse(Request $request)
    {
        $erreurController = new ErreurController();
        /*Controle des authorisation*/
        if(!Role::estResponsable())
            $erreurController->pageForbidden();
        if($request->isPost())
        {
            $data = $request->getBody();
            $this->validator->estVide($data["libelle"], "libelle");
            $this->validator->estVide($data["filiere"], "filiere");
            if ($this->validator->formValide()) {
                $classeModel = new ClasseModel();
                $classeModel->insert($data);
                Response::redirectUrl("ressource/listerClasse");
            } else {
                Session::SetSession("array_error", $this->validator->getErrors());
                Session::SetSession("array_post", $data);
                Response::redirectUrl("ressource/addClasse");
            }
        }
        $anneScolaireModel = new AnneeScolaireModel();
        $this->render('ressource/add.classe', ['annees'=>$anneScolaireModel->selectAll()['data']]);
    }

    public function addAnneeScolaire(Request $request)
    {
        $erreurController = new ErreurController();
        /*Controle des authorisation*/
        if(!Role::estResponsable())
            $erreurController->pageForbidden();
        if($request->isPost())
        {
            $data = $request->getBody();
            $anneScolaireModel = new AnneeScolaireModel();
            $annee_scolaire ='';

            if(!$this->validator->estVide($data["dateDebut"], "dateDebut") && !$this->validator->estVide($data["dateFin"], "dateFin", ))
            {
                $dateDebut  =substr($data["dateDebut"], 0,4) ;
                $dateFin = substr($data["dateFin"], 0,4);
                if(intval($dateFin)-intval($dateDebut) != 1){
                    $this->validator->setErrors('annee_scolaire', "Annéé Scolaire invalide");
                }
                else
                {
                    $annee_scolaire = $dateDebut.'-'.$dateFin;
                    if($anneScolaireModel->selectByAnnee($annee_scolaire) == [])
                    $this->validator->setErrors('annee_scolaire', "L'année scoalire existe deja");
                }
            }
            if ($this->validator->formValide()) {
                $anneScolaireModel->insert(['annee_scolaire'=>$annee_scolaire]);
                Response::redirectUrl("ressource/listerAnneeScolaire");
            } else {
                Session::SetSession("array_error", $this->validator->getErrors());
                Session::SetSession("array_post", $data);
                Response::redirectUrl("ressource/addAnneeScolaire");
            }
        }
        $anneScolaireModel = new AnneeScolaireModel();
        $this->render('ressource/add.annee.scolaire', ['annees'=>$anneScolaireModel->selectAll()['data']]);
    }


    public function deleteClasse(Request $request)
    {
        if(isset($request->getParams()[0]) && is_numeric($request->getParams()[0]))
        {
            $id = intval($request->getParams()[0]);
            $classeModel = new ClasseModel();
            if($classeModel->selectById($id)['count']>0)
            {
                $classeModel->remove($id);
                Response::redirectUrl("ressource/listerClasse");
            }
            $this->validator->setErrors('id_classe', "Attention ! Vous essayez de supprimer une Classe qui n'existe pas");
            Session::SetSession("array_error", $this->validator->getErrors());
            Response::redirectUrl("ressource/listerClasse");
        }
        Response::redirectUrl("ressource/listerClasse");
    }

    public function deleteModule(Request $request)
    {
        if(isset($request->getParams()[0]) && is_numeric($request->getParams()[0]))
        {
            $id = intval($request->getParams()[0]);
            $moduleModel= new ModuleModel();
            if($moduleModel->selectById($id)['count']>0)
            {
                $moduleModel->remove($id);
                Response::redirectUrl("ressource/listerModule");
            }
            $this->validator->setErrors('id_module', "Attention ! Vous essayez de supprimer un module qui n'existe pas");
            Session::SetSession("array_error", $this->validator->getErrors());
            Response::redirectUrl("ressource/listerModule");
        }
        Response::redirectUrl("ressource/listerModule");
    }

    public function deleteAnneeScolaire(Request $request)
    {
        if(isset($request->getParams()[0]) && is_numeric($request->getParams()[0]))
        {
            $id = intval($request->getParams()[0]);
            $anneScolaireModel= new AnneeScolaireModel();
            if($anneScolaireModel->selectById($id)['count']>0)
            {
                $anneScolaireModel->remove(intval($id));
                Response::redirectUrl("ressource/listerAnneeScolaire");
            }
            $this->validator->setErrors('id_annee_scolaire', "Attention ! Vous essayez de supprimer une année scolaire  qui n'existe pas");
            Session::SetSession("array_error", $this->validator->getErrors());
            Response::redirectUrl("ressource/listerAnneeScolaire");
        }
        Response::redirectUrl("ressource/listerAnneeScolaire");
    }

}
