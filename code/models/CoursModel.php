<?php


namespace ism\models;


class CoursModel extends \ism\lib\AbstractModel
{
    public function __construct()
    {
        parent::__construct();
        $this->tableName = "cours" ;
        $this->primaryKey = "id_cours";
    }

    public function insert($data)
    {
        extract($data);
        $sql= /** @lang text */"INSERT INTO $this->tableName  (module, date, professeur_id, classes_cours, 
         semestre, nombre_heures, heure_debut, heure_fin) VALUES (?,?,?,?, ?,?,?,?)";
        return $this->persit($sql, [$module, $date, $professeur_id, json_encode($classes_cours), $semestre,
                $nombre_heures, $heure_debut, $heure_fin]);
    }

    public function selectCoursByProf($id)
    {
        $coursProf = [];
        $cours = $this->selectAllBy() ;
        foreach($cours as $cour)
        {
              if($id== $cour['id'])
                  array_push($coursProf, $cour);
        }
      return $coursProf;
    }

    public function selectCoursByEtudiant($id)
    {
        $coursEtudiants=[];
        $sql ="SELECT * FROM cours WHERE 1";
        $cours = $this->selectBy($sql, [], false);
        foreach($cours['data'] as $cour)
        {
            if(in_array( $id, json_decode($cour['classes_cours'])))
            {
                array_push($coursEtudiants, $cour) ;
            }
        }
        dd($coursEtudiants);
        return $coursEtudiants;

    }

    public function selectAllBy()
    {
        $sql="SELECT id,nom, id_cours, absence_done, libelle, prenom, module, date, heure_debut, heure_fin, semestre,classes_cours FROM user u, cours c, module m WHERE u.id=c.professeur_id AND c.module= m.id_module";
        $cours =  $this->selectBy($sql, [], false)['data'];
        foreach($cours as &$cour)
        {
            $classes='';
            foreach(json_decode($cour['classes_cours'] ) as $id)
            {
                $classeModel = new ClasseModel();
                $classe= $classeModel->selectByAnnneClasseId($id);
                $classes = $classes.' '.$classe['niveau'].' '.$classe['libelle'].' '.$classe['annee_scolaire']."<br>";
            }
            $cour['classes_cours']=$classes;
        }
        return $cours;
    }

    public function updateAbsenceDone($id_cours)
    {
        $sql= "UPDATE $this->tableName SET absence_done=? WHERE id_cours=?";
        $result=$this->persit($sql,[1, $id_cours]);
        return $result["count"]==0?false:true;
    }


}