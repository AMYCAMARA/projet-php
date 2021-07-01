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
        Listes les Cours 
    </h5>
</div>
    <!--MDB Tables-->
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-body">
                <a href="<?=path('ressource/listerModules')?>" >
                    <button class="btn btn-primary"  type="submit"> Panifier Un Cours </button>
                </a>
                <?php if (isset($array_error['id_cours'])):?>
                <a  >
                    <button class="btn btn-warning"  type="submit">
                        <h6 class="text text-danger"  >
                            <?= $array_error['id_cours'] ?>
                        </h6> </button>
                </a>
                <?php endif;?>
                <!--Table-->
                <table class="table table-hover">
                    <!--Table head-->
                    <thead class="mdb bg-dark">
                    <tr class="text-white">
                        <th>Module</th>
                        <th>Professeur</th>
                        <th>Classes</th>
                        <th>Date</th>
                        <th>Debut</th>
                        <th>Fin</th>
                        <th>Semestre</th>
                        <th colspan="1">Action</th>
                    </tr>
                    </thead>
                    <!--Table head-->
                    <!--Table body-->
                    <tbody>
                    <?php foreach($cours as $cour):?>
                        <tr>
                            <td><?= strtoupper($cour['libelle'])?></td>
                            <td><?= strtoupper($cour['nom'])?></td>
                            <td><?= $cour['classes_cours']?></td>
                            <td><?= strtoupper($cour['date'])?></td>
                            <td><?= strtoupper($cour['heure_debut'])?></td>
                            <td><?= strtoupper($cour['heure_fin'])?></td>
                            <td>Semestre <?= strtoupper($cour['semestre'])?></td>
                            <td>
                                <a href="<?=path('ressource/editModule/'),$cour["id_cours"]?>" >
                                    <button class="btn btn-outline-warning"  type="submit"> Modifier </button>
                                </a>
                                <a href="<?=path('ressource/deleteModule/'),$cour["id_cours"]?>">
                                    <button class="btn btn-outline-info"  type="submit"> Supprimer </button>
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