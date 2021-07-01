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
        Ajouter une  Classe
    </h4>
</div>

<div class="container col-md-5">

    <form action="<?php ROOT_CONTROLLERS .'/security.php'?>" method="post" class="container row-7"
          enctype="multipart/form-data">
            <div class="form-group ">
                <label for="inputEmail4">Libellé</label>
                <input type="text" class="form-control" id="inputEmail4" name="libelle"
                       value="<?php echo htmlspecialchars(!isset($array_error['libelle']) && !empty($array_post['libelle']))?trim($array_post['libelle']):'';?>">
                <?php if(isset($array_error["libelle"])):?>
                    <div class="form-text text-danger ">
                        <?= $array_error["libelle"]; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="form-group ">
                <label for="inputPassword4">Filiere</label>
                <input type="text" class="form-control" id="inputPassword4" name="filiere"
                       value="<?php echo htmlspecialchars(!isset($array_error['filiere']) && !empty($array_post['filiere']))?trim($array_post['filiere']):'';?>" >
                <?php if(isset($array_error["filiere"])):?>
                    <div  class="form-text text-danger ">
                        <?= $array_error["filiere"]; ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group ">
                <label for="inputState">Niveau</label>
                <select id="inputState" class="form-control" name="niveau">
                        <option value="L1"> L1</option>
                        <option value="L2"> L2</option>
                        <option value="L2"> L3</option>
                </select>
            </div>

            <div class="form-group ">
                <label for="inputState">Annee Scolaire</label>
                <select id="inputState" class="form-control" name="annee_scolaire_id">
                    <?php foreach($annees as $annee):?>
                        <option value="<?= $annee['id_annee_scolaire']?>"> <?= $annee['annee_scolaire']?></option>
                    <?php endforeach;?>
                </select>
        </div>
            <button type="submit" name="btn" value="donneesFormulaire" class="btn btn-primary form-control">Ajouter</button>

    </form>
</div>
