<?php
namespace ism\models;
use ism\lib\AbstractModel;
use ism\lib\DataBase;

class UserModel extends AbstractModel{

    public function __construct() {
        parent::__construct();
        $this->tableName = "user" ;
        $this->primaryKey = "id";

    }

        public function selectAllByRole(string $role1, string $role2=null)
    {
        $sql= 'SELECT * FROM user WHERE role=? ';
        $sql1= "SELECT * FROM user WHERE role=? or role=?";
        if($role2==null)
        $result=$this->selectBy($sql,[$role1]);
        else
        $result=$this->selectBy($sql1,[$role1, $role2]);
        return $result["count"]==0?[]:$result["data"]; 
    }

    public function selectUserByLoginPassword(string $login):array{
        $sql= "SELECT * FROM user WHERE login=?";
        $result=$this->selectBy($sql,[$login],true);
        return $result["count"]==0?[]:$result["data"];
       }
    
    public function loginExiste(string $login, int $type=1):bool{
        $sql= "SELECT * FROM user WHERE login=:login";
        $sql2= "SELECT * FROM user WHERE login=:login AND role=:role";
        if($type == 1)
        {
            $result=$this->selectBy($sql,[':login'=>$login],true);
        }
        else
        {
            $result=$this->selectBy($sql2,[':login'=>$login, ':role'=>'ROLE_ETUDIANT'],true);
        }
        return $result["count"]==0?false:true;   }

        public function userById(string $id):array{
        $sql= "SELECT * FROM user WHERE id=:id";
        $result=$this->selectBy($sql,[':id'=>$id],true);
        return $result["count"]==0?[]:$result["data"];
    }
    public function insertUser(array $user):int{
        extract($user);
        $sql= "INSERT INTO user (nom, prenom, login,password,role, avatar) VALUES (?,?,?,?,?,?)";
        return $this->persit($sql,[$nom,$prenom,$login,$password,$role, $avatar]);
        
    }

    public function lastId()
    {
        echo $this->persit("SELECT * FROM user ",[]);

    }
    public function insertProfesseur(array $user):int{
        extract($user);
        $sql= "INSERT INTO user 
        (nom, prenom, login,password,role, avatar, matricule, dateNaissance, sexe, grade, classes, modules)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        return $this->persit($sql,
            [$nom,$prenom,$login,$password,$role,
                $avatar, $matricule, $dateNaissance,
                $sexe, $grade, json_encode($classes), json_encode($modules)]);
    }

    public function insertEtudiant(array $user):int{
        extract($user);
        $sql= "INSERT INTO user (nom, prenom, login,password,
        role, avatar, matricule, dateNaissance, 
        sexe, classe, competences, parcours) 
        VALUES  (?,?,?,? ,?,?,?,?, ?,?,?,?)";
        return $this->persit($sql,
            [$nom,$prenom,$login,$password,
            $role, $avatar, $matricule, $dateNaissance,
            $sexe, $classe, $competences, $parcours]);
    }
    public function updateOldEtudiant(array $user):bool{
        extract($user);
        $sql= "UPDATE  user SET classe=? WHERE login= ?";
        $result=$this->persit($sql,[$classe, $login]);
        return $result["count"]==0?false:true;
    }
    
    public function update($user) : int
    {
        extract($user);
        $sql= "UPDATE  user SET nom=?, prenom=?, login=?,password=?, avatar=? WHERE id= ?";
        $result=$this->persit($sql,[$nom,$prenom,$login,$password, $avatar, intval($id)]);
        return $result["count"]==0?false:true;
    }


    public function genereteMatricule()
    {
        $nombre =$this->selectAll()["count"];
        $nombre = (string)$nombre;
        $len = strlen($nombre);
        switch($len)
        {
            case 1 :
            return "000-000-0".$nombre;
            break;
            case 2 :
            return "000-000-".$nombre;
            break;
            case 3 :
            return "000-00".substr($nombre, 0,1)."-".substr($nombre, -2);
            break;
            case 4 :
            return "000-0".substr($nombre, 0,2)."-".substr($nombre, -2);
            break;
            case 5 :
            return "000-".substr($nombre, 0,3)."-".substr($nombre, -2);
            break;
            case 6 :
            return "00".substr($nombre, 0,1)."-".substr($nombre, 1,3)."-".substr($nombre, -2);
            break;
            case 7 :
            return "0".substr($nombre, 0,2)."-".substr($nombre, 2,3)."-".substr($nombre, -2);
            break;
            case 8  :
            return substr($nombre, 0,3)."-".substr($nombre, 3,3)."-".substr($nombre, -2);
            break;
            default:
                return 0;
        }

    }

    public function selectByClasseId($data)
    {
        $id_classes= join("','", $data);
        $sql= "SELECT * FROM user WHERE classe IN('$id_classes')";
        $result=$this->selectBy($sql,[],false);
        return $result["count"]==0?[]:$result["data"];
    }
}
