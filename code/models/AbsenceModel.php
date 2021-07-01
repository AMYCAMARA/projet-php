<?php
namespace ism\models;
use ism\lib\Request;
use ism\lib\Response;
use ism\lib\Session;

class AbsenceModel extends \ism\lib\AbstractModel
{
    public function __construct() {
        parent::__construct();
        $this->tableName = "absence" ;
        $this->primaryKey = "id_absence";
    }

    public function insert(array $data):int{
        $i=0;
        $cours_id = $data['cours_id'];
        $date_absence = $data['date_absence'];
        $absences = $data['absences'];
        foreach($absences as $etudiant_id)
        {
            $sql= /**@lang*/"INSERT INTO absence (etudiant_id, cours_id, date_absence) VALUES(?,?,?)";
            $value = [$etudiant_id, $cours_id, $date_absence];
            $this->persit($sql,$value)   ;
            $i++;
        }
        return $i;
    }

    public function selectBySemestre($id_module)
    {
        $profsByModule = [];
        $userModel= new UserModel();
    }

    public function selectByDate($id_module)
    {
        $profsByModule = [];
        $userModel= new UserModel();
        $profs= $userModel->selectAllByRole('ROLE_PROFESSEUR');
        foreach($profs as $prof)
        if(in_array($id_module, json_decode($prof['modules'])))
        {
            array_push($profsByModule, $prof);
        }
        return $profsByModule;
    }


    public function selectAbsenceByEtudiant(int $id)
    {
        $sql=/**@lang*/"SELECT matricule,semestre, nom, prenom, date_absence, libelle 
        FROM absence a, user u, cours c, module m 
        WHERE a.etudiant_id=u.id AND a.etudiant_id=? AND a.cours_id = c.id_cours 
        AND c.module= m.id_module";
        return $this->selectBy($sql, [$id], false);
    }

    public function selectAbsenceByClasse(int $id)
    {
        $sql=/**@lang*/"SELECT matricule,semestre, nom, prenom, date_absence, libelle 
        FROM absence a, user u, cours c, module m 
        WHERE a.etudiant_id=u.id  AND a.cours_id = c.id_cours 
        AND c.module= m.id_module AND u.classe = ? ";
        return $this->selectBy($sql, [$id], false);
    }
}