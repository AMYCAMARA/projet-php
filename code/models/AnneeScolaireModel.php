<?php


namespace ism\models;
use \ism\lib\AbstractModel;

class AnneeScolaireModel extends AbstractModel
{
    public function __construct() {
        parent::__construct();
        $this->tableName = "annee_scolaire" ;
        $this->primaryKey = "id_annee_scolaire";

    }

    public function selectEtudiantByAnnee( $id) : array
    {
        $sql = "SELECT * 
            FROM user u, classe c, annee_scolaire a
            WHERE u.classe = c.id_classe 
            AND c.annee_scolaire_id=a.id_annee_scolaire 
            AND a.id_annee_scolaire = ?";
        $result=$this->selectBy($sql,[$id],false);
        return $result["count"]==0?[]:$result["data"];
    }

    public function selectByAnnee($annee_scolaire)
    {
        $sql = "SELECT * FROM $this->tableName WHERE annee_scolaire=?";
        return $this-> selectBy($sql, [$annee_scolaire], true);
    }

    public function insert($data)
    {
        extract($data);
        $sql= "INSERT INTO $this->tableName (annee_scolaire) VALUES (?)";
        return $this->persit($sql,[$annee_scolaire]);
    }

    public function selectNombreCclasse()
    {
        $sql= " SELECT id_annee_scolaire, COUNT(annee_scolaire_id) as nombre_classes FROM annee_scolaire as a, classe as c WHERE a.id_annee_scolaire = c.annee_scolaire_id OR annee_scolaire_id = NULL";
        return $this->selectBy($sql,[], false);
    }



}