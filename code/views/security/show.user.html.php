<?php
use ism\lib\Role;
$array_error ;
if(isset($_SESSION['array_error']))
{
    $array_error = $_SESSION['array_error'];
    unset($_SESSION['array_error']);
}

?>

<div class="alert alert-dismissible alert-info text-align-center">
    <h4 class="text-center">Lister des

    <?php if(Role::estAdmin()):?>
        Responsables Pédagogique et des Attachés De Classes
    <?php elseif(Role::estResponsable() || Role::estAttache()):?>
        Professeurs et De Leurs Cours
    <?php endif;?>

    </h4>
</div>

<!--MDB Tables-->
<div class="container mt-4">
    <div class="card mb-4">
        <div class="card-body">

            <?php if(Role::estAdmin()):?>
                <a href="<?=path('ressource/register')?>" >
                    <button class="btn btn-primary"  type="submit"> Ajouter Un Compte </button>
                </a>
            <?php elseif(Role::estResponsable()):?>
                <a href="<?=path('security/registerProfesseur')?>" >
                    <button class="btn btn-primary"  type="submit"> Ajouter Un Professeur </button>
                </a>
            <?php endif;?>

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
                    <th colspan="3">Action</th>

                </tr>
                </thead>
                <!--Table head-->
                <!--Table body-->
                <tbody>
                <?php foreach($users as $user):?>
                    <tr>
                        <th><?= strtoupper($user['matricule'])?></th>
                        <td><?= strtoupper($user['nom'])?></td>
                        <td><?= ucfirst($user['prenom'])?></td>
                        <td><?= $user['login']?></td>
                        <td><?= ucfirst($user['sexe'])?></td>
                        <td><?= $user['dateNaissance']?></td>
                        <?php if (Role::estResponsable() || Role::estAttache()):?>
                            <td>
                                <a href="<?=path('ressource/coursByProf/'),$user['id'];?>" >
                                    <button class="btn btn-outline-info"  type="submit"> Voir ses Cours </button>
                                </a>
                            </td>
                        <?php endif;?>
                        <?php if (Role::estAdmin()):?>
                            <td>
                                <a href="<?=path('security/register/'),$user['id'] ;?>" >
                                    <button class="btn btn-outline-warning"  type="submit"> Modifier </button>
                                </a>
                                <a href="<?=path('security/delete/'),$user["id"]?>">
                                    <button class="btn btn-outline-info"  type="submit"> Supprimer </button>
                                </a>
                            </td>
                        <?php endif;?>
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