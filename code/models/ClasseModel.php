<?php


namespace ism\models;
use ism\lib\AbstractModel;
use ism\lib\DataBase;


class ClasseModel extends AbstractModel
{
    public function __construct() {
        parent::__construct();
        $this->tableName = "classe" ;
        $this->primaryKey = "id_classe";


    }
    public function selectByAnnneClasse()
    {
        $sql="SELECT * FROM annee_scolaire as a, classe as c WHERE a.id_annee_scolaire = c.annee_scolaire_id";
        return $this->selectBy($sql, [], false)['data'];
    }
    public function selectByAnnneClasseId($id_classe)
    {
        $sql="SELECT * FROM annee_scolaire as a, classe as c WHERE a.id_annee_scolaire = c.annee_scolaire_id AND c.id_classe=?";
        return $this->selectBy($sql, [$id_classe], true)['data'];
    }

    public function insert(array $data):bool{
        extract($data);
        $sql= "INSERT INTO $this->tableName (libelle, filiere, niveau,annee_scolaire_id) VALUES (?,?,?,?)";
        $result=$this->persit($sql,[$libelle, $filiere, $niveau,$annee_scolaire_id]);
        return $result["count"]==0?false:true;
    }

    public function update(array $data): int
    {
        extract($data);
        $sql= "UPDATE  $this->tableName SET classes_id=? WHERE $this->primaryKey= ?";
        $result=$this->persit($sql,[$classes_id,$id_classe]);
        return $result==0?false:true;
    }

    /**
     * Ajout les id dans etudiant dans table table classe
     * @param $idEtudiant
     * @param $id_classe
     * @return bool|int
     *
     */
    public function addIdEtudiant($idEtudiant, $id_classe)
    {

        $resultat = $this->selectBy("SELECT * FROM $this->tableName WHERE $this->primaryKey =?", [ $id_classe], true);
        $chaineIdEtudiants = $resultat['data']['classes_id'];
        /*si chaine classes_id est vide*/
        if($chaineIdEtudiants == "")
        {
            return $this->update(['classes_id'=>$idEtudiant,'id_classe'=>$id_classe]);
        }
        else
        {
            $arrayIdEtudiants = explode(',', $chaineIdEtudiants);
            if(in_array($idEtudiant, $arrayIdEtudiants))
            {
                return false;
            }
        }
        array_push( $arrayIdEtudiants, $idEtudiant);
        /*en chaine*/
        $classes_id = implode(',', $arrayIdEtudiants);
        $this->update(['classes_id'=>$classes_id,'id_classe'=>$id_classe]);
        return true;
    }

    public function selectEtudiantByClasse( $id):array
    {
        $sql="SELECT * FROM user u, classe c WHERE u.classe = c.id_classe AND c.id_classe= ?";
        $result=$this->selectBy($sql,[$id],false);
        return $result["count"]==0?[]:$result["data"];
    }
}