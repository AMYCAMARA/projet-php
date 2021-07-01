<?php
$array_error ;
if(isset($_SESSION['array_error']))
{
    $array_error = $_SESSION['array_error'];
    unset($_SESSION['array_error']);
}
?>
<?php if($cours != []):?>
<div class="alert alert-dismissible alert-info text-align-center ">
    <h5 class="text text-info text-center ">
        Listes des cours du prof :<strong> <?= $cours[0]['nom'];?></strong>
    </h5>
</div>
    <!--MDB Tables-->
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-body">
                <?php if (isset($array_error['id'])):?>
                <a  >
                    <button class="btn btn-warning"  type="submit">
                        <h6 class="text text-danger">
                            <?= $array_error['id'] ?>
                        </h6>
                    </button>
                </a>
                <?php endif;?>
                <!--Table-->
                <table class="table table-hover">
                    <!--Table head-->
                    <thead class="mdb bg-dark">
                    <tr class="text-white">
                        <th>Module</th>
                        <th>Classes</th>
                        <th>Date</th>
                        <th>Debut</th>
                        <th>Fin</th>
                        <th>Semestre</th>
                    </tr>
                    </thead>
                    <!--Table head-->
                    <!--Table body-->
                    <tbody>
                    <?php foreach($cours as $cour):?>
                        <tr>
                            <td><?= strtoupper($cour['libelle'])?></td>
                            <td><?= $cour['classes_cours']?></td>
                            <td><?= strtoupper($cour['date'])?></td>
                            <td><?= strtoupper($cour['heure_debut'])?></td>
                            <td><?= strtoupper($cour['heure_fin'])?></td>
                            <td>Semestre <?= strtoupper($cour['semestre'])?></td>
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
<?php else:?>
    <div class="alert alert-dismissible alert-info text-align-center ">
        <h5 class="text text-info text-center ">
            Vous n'etes pas programmé pour aucun cours !
        </h5>
    </div>
<?php endif;?>
