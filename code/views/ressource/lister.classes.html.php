<?php

use ism\lib\Role;

$array_error ;
if(isset($_SESSION['array_error']))
{
    $array_error = $_SESSION['array_error'];
    unset($_SESSION['array_error']);
}
?>
<div class="alert alert-dismissible alert-info text-align-center ">
    <h5 class="text text-info text-center text-capitalize ">
        Listes les Classes
    </h5>
</div>
    <!--MDB Tables-->
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-body">
                <?php if(Role::estResponsable()):?>
                <a href="<?=path('ressource/addClasse')?>" >
                    <button class="btn btn-primary"  type="submit"> Ajouter Une Classe </button>
                </a>
                <?php endif;?>
                <?php if (isset($array_error['id_classe'])):?>
                <a  >
                    <button class="btn btn-warning"  type="submit">
                        <h6 class="text text-danger"  >
                            <?= $array_error['id_classe'] ?>
                        </h6> </button>
                </a>
                <?php endif;?>
                <!--Table-->
                <table class="table table-hover">
                    <!--Table head-->
                    <thead class="mdb bg-dark">
                    <tr class="text-white">
                        <th>Libelle</th>
                        <th>Niveau</th>
                        <th>Filiére</th>
                        <th>Année Scolaire</th>
                        <th colspan="1">Action</th>
                    </tr>
                    </thead>
                    <!--Table head-->
                    <!--Table body-->
                    <tbody>
                    <?php foreach($classes as $classe):?>
                        <tr>
                            <td><?= strtoupper($classe['libelle'])?></td>
                            <td><?= strtoupper($classe['niveau'])?></td>
                            <td><?= strtoupper($classe['filiere'])?></td>
                            <td><?= strtoupper($classe['annee_scolaire'])?></td>
                            <td>
                                <?php if(Role::estResponsable()):?>
                                    <a href="<?=path('ressource/editClasse/'),$classe["id_classe"]?>" >
                                        <button class="btn btn-outline-warning"  type="submit"> Modifier </button>
                                    </a>

                                    <a href="<?=path('ressource/deleteClasse/'),$classe["id_classe"]?>">
                                        <button class="btn btn-outline-info"  type="submit"> Supprimer </button>
                                    </a>
                                    <a href="<?=path('ressource/coursByClasse/'),$classe["id_classe"]?>">
                                        <button class="btn btn-outline-info"  type="submit"> Voir Ses Cours </button>
                                    </a>
                                <?php endif;?>

                                <?php if(Role::estAttache()):?>
                                    <a href="<?=path('absence/absenceByClasse/'),$classe["id_classe"]?>">
                                        <button class="btn btn-outline-info"  type="submit"> Voir Absences </button>
                                    </a>
                                <?php endif;?>
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