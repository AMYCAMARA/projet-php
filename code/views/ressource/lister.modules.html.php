<?php
$array_error ;
if(isset($_SESSION['array_error']))
{
    $array_error = $_SESSION['array_error'];
    unset($_SESSION['array_error']);
}
?>
<div class="alert alert-dismissible alert-info text-align-center ">
    <h5 class="text text-info text-center text-capitalize ">
        Listes Des Modules DU Systeme
    </h5>
</div>
    <!--MDB Tables-->
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-body">
                <a href="<?=path('ressource/addModule')?>" >
                    <button class="btn btn-primary"  type="submit"> Ajouter Un Module </button>
                </a>
                <?php if (isset($array_error['id_module'])):?>
                <a  >
                    <button class="btn btn-warning"  type="submit">
                        <h6 class="text text-danger"  >
                            <?= $array_error['id_module'] ?>
                        </h6> </button>
                </a>
                <?php endif;?>
                <!--Table-->
                <table class="table table-hover">
                    <!--Table head-->
                    <thead class="mdb bg-dark">
                    <tr class="text-white">
                        <th>Libelle</th>
                        <th>Nombre D'Heure</th>
                        <th colspan="1">Action</th>
                    </tr>
                    </thead>
                    <!--Table head-->
                    <!--Table body-->
                    <tbody>
                    <?php foreach($modules as $module):?>
                        <tr>
                            <td><?= strtoupper($module['libelle'])?></td>
                            <td><?= strtoupper($module['nombre_heures'])?></td>
                            <td>

                                    <a href="<?=path('ressource/editModule/'),$module["id_module"]?>" >
                                        <button class="btn btn-outline-warning"  type="submit"> Modifier </button>
                                    </a>

                                    <a href="<?=path('ressource/deleteModule/'),$module["id_module"]?>">
                                        <button class="btn btn-outline-info"  type="submit"> Supprimer </button>
                                    </a>

                                <a href="<?=path('ressource/planifierCours/'),$module["id_module"]?>" >
                                    <button class="btn btn-outline-info"  type="submit"> Planifier </button>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                    <!--Table body-->
                </table>
                <!--Table-->
            </div>
        </div>

    </div>
    <!--MDB Tables-->