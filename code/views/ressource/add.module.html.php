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
        Ajouter un  Module
    </h4>
</div>
<div class="container mb-5">

    <form action="<?php ROOT_CONTROLLERS .'/security.php'?>" method="post" class="container row-7"
          enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Libellé</label>
                <input type="text" class="form-control" id="inputEmail4" name="libelle"
                       value="<?php echo htmlspecialchars(!isset($array_error['libelle']) && !empty($array_post['libelle']))?trim($array_post['libelle']):'';?>">
                <?php if(isset($array_error["libelle"])):?>
                    <div class="form-text text-danger ">
                        <?= $array_error["libelle"]; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="form-group col-md-6">
                <label for="inputPassword4">Nombre D'Heures</label>
                <input type="number" class="form-control" id="inputPassword4" name="nombre_heures"
                       value="<?php echo htmlspecialchars(!isset($array_error['nombre_heures']) && !empty($array_post['nombre_heures']))?trim($array_post['nombre_heures']):'';?>" >
                <?php if(isset($array_error["nombre_heures"])):?>
                    <div  class="form-text text-danger ">
                        <?= $array_error["nombre_heures"]; ?></div>
                <?php endif; ?>
            </div>

        </div>
            <button type="submit" name="btn" value="donneesFormulaire" class="btn btn-primary form-control">Ajouter</button>

    </form>
</div>
