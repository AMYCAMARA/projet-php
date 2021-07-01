<?php
namespace ism\lib;

class Role{
    public static function estConnect():bool{
        return isset($_SESSION["user_connect"]);
    }
    public static function estAdmin():bool{
        return self::estConnect() && $_SESSION["user_connect"]["role"] == "ROLE_ADMIN";
    }
    public static function estEtudiant():bool{
        return self::estConnect() && $_SESSION["user_connect"]["role"] == "ROLE_ETUDIANT";
    }
    public static function estProfesseur():bool{
        return self::estConnect() && $_SESSION["user_connect"]["role"] == "ROLE_PROFESSEUR";
    }
    public static function estAttache():bool{
        return self::estConnect() && $_SESSION["user_connect"]["role"] == "ROLE_ATTACHE";
    }
    public static function estResponsable():bool{
        return self::estConnect() && $_SESSION["user_connect"]["role"] == "ROLE_RESPONSABLE";
    }
    public static function estClient():bool{
        return self::estConnect() && $_SESSION["user_connect"]["role"] == "ROLE_RESPONSABLE";
    }
}