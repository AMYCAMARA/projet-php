<?php
namespace ism\lib;

 class Validator
 {

     private array $arrayError = [];


     public function estVide(string $val, string $key, $sms = "champ obligatoire"): bool
     {

         if (empty($val) || $val = '' || strlen(trim($val)) <= 2) {
             $this->arrayError[$key] = $sms;
             return true;
         }
         return false;

     }

     //Fonction PHP pour controler une adresse Mail
     public function estMail(string $val, string $key, $sms = "verifier votre saisie email"): bool
     {
         if (!filter_var($val, FILTER_VALIDATE_EMAIL)) {
             $this->arrayError[$key] = $sms;
             return false;
         }
         return true;
     }

     public function formValide(): bool
     {
         return count($this->arrayError) === 0;
     }


     /**
      * Get the value of array_error
      */
     public function getErrors(): array
     {
         return $this->arrayError;
     }

     public function setErrors(string $key, string $error): void
     {
         $this->arrayError[$key] = $error;
     }


     public function estImage(string $avatar)
     {
         $file = $_FILES[$avatar];
         $allowedExts = array("gif", "jpeg", "jpg", "png");
         $array = explode(".", $file["name"]);
         $extension = strtolower(end($array));
         define("MAX_UPLOAD_SIZE", 10 * 1024 * 102);


         if (!isset($file) || $file["error"] != 0) {
             $this->arrayError[$avatar] = "ce champ est obligatoire";
             return false;
         } elseif ($file["size"] > MAX_UPLOAD_SIZE) {
             $this->arrayError[$avatar] = "taille trop grande";
             return false;

         } elseif (!in_array($extension, $allowedExts)) {
             $this->arrayError[$avatar] = "Fichier non autorisé";
             return false;
         } elseif (file_exists("upload/" . $file["name"])) {
             $this->arrayError[$avatar] = "fichier existe déja";
             return false;
         }
         return true;

     }

     public function upload(string $avatar)
     {
         $file = $_FILES[$avatar];
         //move_uploaded_file($file["tmp_name"], "upload/" . $file["name"]);
         return "upload/" . $file["name"];
     }

     public function estNumeric(int $val, string $key, $sms = "verifier que vous avez bien saisie un chiffre"): bool
     {
         if (!filter_var($val, FILTER_VALIDATE_INT) || $val <0 ) {
             $this->arrayError[$key] = $sms;
             return false;
         }
            return true;
     }
 }
