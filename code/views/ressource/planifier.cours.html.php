<?php

use ism\lib\Session;
use ism\models\ClasseModel;
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
        Programmation du module de
    </h4>
</div>
<div class="container mb-5">
    <form action="" method="post" class="container row-7"
          enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="inputState">Professeur</label>
                <select id="inputState" class="form-control" name="professeur_id">
                    <?php foreach($professeurs as $prof):?>
                        <option value="<?= $prof['id']?>"> <?= $prof['nom'], ' ',$prof['prenom'],' : ',$prof['login']?></option>
                    <?php endforeach;?>
                </select>
            </div>

            <div class="form-group col-md-4">
                <label for="inputState">Semestre</label>
                <select id="inputState" class="form-control" name="semestre">
                        <option value="1"> Semestre 1</option>
                        <option value="2"> Semestre 2</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="inputState">N'ombre H'eure</label>
                <select id="inputState" class="form-control" name="nombre_heures">
                    <?php for($i=1; $i<7 ; $i++): ?>
                        <option value="<?=$i?>"> <?=$i?> Heure(s)</option>
                    <?php endfor; ?>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputZip">Date Du Cours</label>
                <input type="date" name="date"  class="form-control" id="inputZip"
                       value="<?php echo htmlspecialchars(!isset($array_error['date']) && !empty($array_post['date']))?trim($array_post['date']):'';?>">
                <?php if(isset($array_error["date"])):?>
                    <div class="form-text text-danger ">
                        <?= $array_error["date"]; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="form-group col-md-4">
                <label for="inputZip">Heure Debut</label>
                <input type="time" name="heure_debut" en="en" class="form-control" id="inputZip"
                       value="<?php echo htmlspecialchars(!isset($array_error['heure_debut']) && !empty($array_post['heure_debut']))?trim($array_post['heure_debut']):'';?>">
                <?php if(isset($array_error["heure_debut"])):?>
                    <div class="form-text text-danger ">
                        <?= $array_error["heure_debut"]; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="form-group col-md-4">
                <label for="inputZip">Heure Fin</label>
                <input type="time" name="heure_fin" en="en" class="form-control" id="inputZip"
                       value="<?php echo htmlspecialchars(!isset($array_error['heure_fin']) && !empty($array_post['heure_fin']))?trim($array_post['heure_fin']):'';?>">
                <?php if(isset($array_error["heure_fin"])):?>
                    <div class="form-text text-danger ">
                        <?= $array_error["heure_fin"]; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-row">

        <div class="form-group">
            <fieldset class="form-group row">
                <legend class="col-form-label col-sm-2 float-sm-left pt-0">Classes</legend>
                <div class="col-sm-10">
                    <?php foreach($classes as $classe):?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="classes_cours[]" id="gridCheck1"
                                   value="<?=$classe['id_classe']?>" >
                            <label class="form-check-label" for="gridRadios1">
                                <?= $classe['niveau'], ' ' ,$classe['libelle'], ' ' ,$classe['annee_scolaire']?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>

            </fieldset>
        </div>

            </div>
        <button type="submit" name="btn" value="planifier" class="btn btn-primary">Ajouter</button>
    </form>
</div>
