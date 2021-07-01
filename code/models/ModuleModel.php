<?php
namespace ism\models;
class ModuleModel extends \ism\lib\AbstractModel
{
    public function __construct() {
        parent::__construct();
        $this->tableName = "module" ;
        $this->primaryKey = "id_module";
    }

    public function insert(array $data):int{
        extract($data);
        $sql= "INSERT INTO $this->tableName (libelle, nombre_heures) VALUES (?,?)";
        return $this->persit($sql,[$libelle, $nombre_heures]);
    }

    public function update($data) : int
    {
        extract($data);
        $sql= "UPDATE  $this->tableName  SET libelle=?, nombre_heures=? WHERE $this->primaryKey= ?";
        $result=$this->persit($sql,[$libelle,$nombre_heures, intval($id_module)]);
        return $result["count"]==0?false:true;
    }

    public function selectProfByModule($id_module)
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
}