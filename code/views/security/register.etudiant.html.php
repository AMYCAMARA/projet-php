<?php

use ism\lib\Session;
use ism\models\ClasseModel;

$model = new \ism\models\AnneeScolaireModel();
//verification des erreur de session
$array_error = [];
if (Session::keyExist("array_error")) {
    //recupeeration des erreur de la session dans la variable local
    $array_error = Session::getSession("array_error");
    $array_post = Session::getSession("array_post");
    Session::destroyKey("array_error");
    Session::destroyKey("array_post");
}
?>
    <div class="alert alert-dismissible alert-info text-align-center">
        <h4 class="text-center">
           Inscription d'un nouveau etudiant
        </h4>
    </div>
<div class="container mb-5">

    <form action="<?php ROOT_CONTROLLERS .'/security.php'?>" method="post" class="container row-7"
          enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputEmail4">Nom</label>
                <input type="text" class="form-control" id="inputEmail4" name="nom"
                       value="<?php echo htmlspecialchars(!isset($array_error['nom']) && !empty($array_post['nom']))?trim($array_post['nom']):'';?>">
                <?php if(isset($array_error["nom"])):?>
                    <div class="form-text text-danger ">
                        <?= $array_error["nom"]; ?>
                    </div>
                <?php endif; ?>

            </div>
            <div class="form-group col-md-3">
                <label for="inputPassword4">Prenom</label>
                <input type="text" class="form-control" id="inputPassword4" name="prenom"
                       value="<?php echo htmlspecialchars(!isset($array_error['prenom']) && !empty($array_post['prenom']))?trim($array_post['prenom']):'';?>" >
                <?php if(isset($array_error["prenom"])):?>
                    <div  class="form-text text-danger ">
                        <?= $array_error["prenom"]; ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group col-md-5">
                <label for="inputPassword4">Login</label>
                <input type="text" class="form-control" id="inputPassword4" name="login"
                       value="<?php echo htmlspecialchars(!isset($array_error['login']) && !empty($array_post['login']))?trim($array_post['login']):'';?>" >
                <?php if(isset($array_error["login"])):?>
                    <div  class="form-text text-danger ">
                        <?= $array_error["login"]; ?></div>
                <?php endif; ?>

            </div>
        </div>

        <div class="form-row">

            <div class="form-group col-md-4">
                <label for="password">password</label>
                <input type="password" name="password" class="form-control" id="inputAddress" placeholder=".****">
                <?php if(isset($array_error["password"])):?>
                    <div  class="form-text text-danger ">
                        <?= $array_error["password"]; ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group col-md-4">
                <label for="inputAddress2">Confirm password</label>
                <input type="password" name="confirm_password" class="form-control" id="inputAddress2"
                       placeholder="****">
                <?php if(isset($array_error["confirm_password"])):?>
                    <div  class="form-text text-danger ">
                        <?= $array_error["confirm_password"]; ?></div>
                <?php endif; ?>
            </div>

            <div class="form-group col-md-4">
                <label for="exampleFormControlFile1">Choissez votre avatar</label>
                <input type="file" name="avatar" class="form-control-file" id="exampleFormControlFile1">
                <?php if(isset($array_error["avatar"])):?>
                    <div  class="form-text text-danger ">
                        <?= $array_error["avatar"]; ?></div>
                <?php endif; ?>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputState">Sexe</label>
                <select id="inputState" class="form-control" name="sexe">
                    <option value="Masculien">Masculien</option>
                    <option value="Feminin">Feminin</option>
                </select>
            </div>

            <div class="form-group col-md-4">
                <label for="inputState">Classe</label>
                <select id="inputState" class="form-control" name="classe">
                    <?php foreach($classes as $classe):?>
                        <option value="<?= $classe['id_classe']?>"> <?= $classe['niveau'], ' ',$classe['libelle'],' ',$classe['annee_scolaire']?></option>
                    <?php endforeach;?>
                </select>
            </div>

            <div class="form-group col-md-4">
                <label for="inputZip">Data de naissance</label>
                <input type="date" name="dateNaissance" en="en" class="form-control" id="inputZip"
                       value="<?php echo htmlspecialchars(!isset($array_error['dateNaissance']) && !empty($array_post['dateNaissance']))?trim($array_post['dateNaissance']):'';?>">
                <?php if(isset($array_error["dateNaissance"])):?>
                    <div class="form-text text-danger ">
                        <?= $array_error["dateNaissance"]; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Parcours</label>
            <textarea name="parcours" class="form-control" id="exampleFormControlTextarea1" 
            rows="3" ><?php echo htmlspecialchars(!empty($array_post['parcours']))?trim($array_post['parcours']):'';?></textarea>
        </div>
        <fieldset class="form-group row">
            <legend class="col-form-label col-sm-2 float-sm-left pt-0">Competences</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="competences[]" id="gridCheck1"
                           value="Maquettage et Prototypage">
                    <label class="form-check-label" for="gridRadios1">
                        Maquettage et Prototypage
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="competences[]" id="gridCheck2" value="Intégration Web">
                    <label class="form-check-label" for="gridRadios2">
                        Intégration Web
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck3" name="competences[]"
                           value="Réaliser des Composants Dynamiques avec PHP">
                    <label class="form-check-label" for="gridCheck">
                        Réaliser des Composants Dynamiques avec PHP
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck4" name="competences[]"
                           value="Réaliser des Composants d'accès Base de Données">
                    <label class="form-check-label" for="gridCheck">
                        Réaliser des Composants d'accès Base de Données
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck5" name="competences[]"
                           value="Déployer une Application">
                    <label class="form-check-label" for="gridCheck">
                        Déployer une Application
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck6" name="competences[]"
                           value="Gestion de Projet Agiles">
                    <label class="form-check-label" for="gridCheck">
                        Gestion de Projet Agiles
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck7" name="competences[]" value="Versionning">
                    <label class="form-check-label" for="gridCheck">
                        Versionning
                    </label>
                </div>
            </div>

        </fieldset>
        <button type="submit" name="btn" value="donneesFormulaire" class="btn btn-primary">Ajouter</button>
    </form>
</div>
