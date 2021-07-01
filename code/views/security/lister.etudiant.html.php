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
        <form action="" method="post" class="container">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <button type="reset" name="btn" value="donneesFormulaire" class="btn btn-info">
                        Veuillez choisir  <strong>un seul critere</strong>  pour filtrer
                    </button>
                </div>
                <div class="form-group col-md-4">
                    <select id="inputState" class="form-control" name="id_classe">
                        <option value="" selected>Choisir une Classe</option>
                        <?php foreach($classes as $classe):?>
                            <option value="<?= $classe['id_classe']?>"><?= $classe['niveau'], ' ',$classe['libelle'],'  ', $classe['annee_scolaire']?></option>
                        <?php endforeach;?>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <select id="inputState" class="form-control" name="id_annee_scolaire">
                        <option value="" selected>Veuillez choisir une année</option>
                        <?php foreach($annees as $annee):?>
                            <option value="<?= $annee['id_annee_scolaire']?>"><?= $annee['annee_scolaire']?></option>
                        <?php endforeach;?>
                    </select>
                </div>

                <div class="form-group col-md-1">
                    <button type="submit" name="btn" value="donneesFormulaire" class="btn btn-primary">Filter</button>
                </div>
            </div>
        </form>
    </div>
    <?php if ( $message != '' ):?>
        <div class="alert alert-dismissible alert-info text-align-center ">
            <h5 class="text text-info text-center">
                <?=$message?>
            </h5>
        </div>
    <?php endif;?>

    <?php if($message != '' && $etudiants != []): ?>

    <!--MDB Tables-->
    <div class="container mt-4">
        <div class="card mb-4">
            <div class="card-body">
                <?php if (isset($array_error['id'])):?>
                    <a  >
                        <button class="btn btn-warning"  type="submit">
                            <h6 class="text text-danger"  >
                                <?= $array_error['id'] ?>
                            </h6> </button>
                    </a>
                <?php endif;?>
                <!--Table-->
                <table class="table table-hover">
                    <!--Table head-->
                    <thead class="mdb bg-dark">
                    <tr class="text-white">
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Login</th>
                        <th>Sexe</th>
                        <th>Naissance</th>
                        <th>Voir Absence</th>
                    </tr>
                    </thead>
                    <!--Table head-->
                    <!--Table body-->
                    <tbody>
                    <?php foreach($etudiants as $etudiant):?>
                        <tr>
                            <th><?= strtoupper($etudiant['matricule'])?></th>
                            <td><?= strtoupper($etudiant['nom'])?></td>
                            <td><?= ucfirst($etudiant['prenom'])?></td>
                            <td><?= $etudiant['login']?></td>
                            <td><?= ucfirst($etudiant['sexe'])?></td>
                            <td><?= $etudiant['dateNaissance']?></td>
                            <td>
                                <a href="<?=path('absence/absenceByOne/'),$etudiant['id'];?>" >
                                    <button class="btn btn-outline-info"  type="submit"> Voir ses Absence </button>
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
    <?php endif ;?>