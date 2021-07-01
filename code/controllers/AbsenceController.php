<?php
namespace ism\controllers;

use ism\lib\AbstractController;
use ism\lib\Request;
use ism\lib\Response;
use ism\lib\Session;
use ism\models\AbsenceModel;
use ism\models\CoursModel;
use ism\models\ModuleModel;
use ism\models\UserModel;

/**
 * @class AbsenceController
 * Elle permet de gerer les fonctionalités liées au abscenes
 * -marquer absence d'une classe
 * -lister absence selon des criteres : semestre, cours, etudiant
 *
*/
class AbsenceController extends AbstractController {


    public function marquer(Request $request)
    {
        $coursModel = new CoursModel();
        if( $request->isGet() && isset($request->getParams()['0']) && is_numeric($request->getParams()['0']))
        {
            $id_cours = $request->getParams()['0'];
            $useModel = new UserModel();
            $modulModel = new ModuleModel();
            $cours = $coursModel->selectById($id_cours)['data'];
            $module = $modulModel->selectById($cours['module'])['data'];
            if($cours==[])
            {
                $this->validator->setErrors('id_cours', "Ce cours n'exsite pas");
                Session::SetSession("array_error", $this->validator->getErrors());
                Response::redirectUrl("absence/cours");
            }
            $etudiants = $useModel->selectByClasseId(json_decode($cours['classes_cours']));
            $this->render('absence/etudiant.cours',[ 'etudiants'=>$etudiants, 'module' =>$module, 'cours'=>$cours]);

        }
        elseif($request->isPost())
        {
            $data = $request->getBody();
            $cours = $coursModel->selectById( $request->getParams()['0'])['data'];
            $data['cours_id'] = $cours['id_cours'];
            $data['date_absence'] = $cours['date'];
            if($data != [])
            {
                $absenceModel= new AbsenceModel();
                $absenceModel->insert($data);
            }
            $coursModel = new CoursModel();
            $coursModel->updateAbsenceDone($cours['id_cours']);
            Response::redirectUrl('absence/listerCours');

        }
        Response::redirectUrl('absence/listerCours');

    }


    public function listerCours()
    {
        $coursModel = new CoursModel();
        $cours = $coursModel->selectAllBy();
        $this->render('absence/cours', ['cours'=>$cours]);
    }

    public function absenceByOne(Request $request)
    {
        if(isset($request->getParams()[0]) && is_numeric($request->getParams()[0]))
        {
            $id = intval($request->getParams()[0]);
            $absenceModel= new AbsenceModel();
            $absenceEtudiant = $absenceModel->selectAbsenceByEtudiant($id);
            if( $absenceEtudiant['data'] != [])
            {
                $this->render("absence/lister.absence", ['absences'=>$absenceEtudiant['data']]);
            }
            $this->validator->setErrors('id', "Attention ! Ce Etudiant  n'a aucunes absences");
            Session::SetSession("array_error", $this->validator->getErrors());
            Response::redirectUrl("security/listerEtudiant");
        }
        Response::redirectUrl("security/listerEtudiant");
    }

    public function absenceByClasse(Request $request)
    {
        if(isset($request->getParams()[0]) && is_numeric($request->getParams()[0]))
        {
            $id = intval($request->getParams()[0]);
            $absenceModel= new AbsenceModel();
            $absences = $absenceModel->selectAbsenceByClasse($id);
            if( $absences != [])
            {
                $this->render("absence/lister.absence", ['absences'=>$absences['data']]);
            }
            $this->validator->setErrors('id_cours', "Attention ! Ce professeur n'a aucun cours");
            Session::SetSession("array_error", $this->validator->getErrors());
            Response::redirectUrl("ressource/listerClasse");
        }
        Response::redirectUrl("ressource/listerClasse");
    }

}