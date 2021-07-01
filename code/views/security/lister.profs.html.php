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
        Professeurs
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
                    <?php if (Role::estResponsable()):?>
                        <th>Matricule</th>

                    <?php endif;?>

                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Login</th>
                    <?php if (Role::estResponsable()):?>
                    <th>Sexe</th>
                    <th>Naissance</th>
                    <?php endif;?>
                    <?php if (Role::estAdmin()):?>
                    <th colspan="3">Action</th>
                    <?php endif;?>

                </tr>
                </thead>
                <!--Table head-->
                <!--Table body-->
                <tbody>
                <?php foreach($users as $user):?>
                    <tr>
                        <?php if (Role::estResponsable()):?>
                        <th><?= strtoupper($user['matricule'])?></th>
                        <?php endif;?>
                        <td><?= strtoupper($user['nom'])?></td>
                        <td><?= ucfirst($user['prenom'])?></td>
                        <td><?= $user['login']?></td>

                        <?php if (Role::estResponsable()):?>
                        <td><?= ucfirst($user['sexe'])?></td>
                        <td><?= $user['dateNaissance']?></td>
                        <?php endif;?>

                        <?php if (Role::estAdmin()):?>
                            <td>
                                <a href="<?=path('security/register/'),$user['id'] ;?>" >
                                    <button class="btn btn-outline-warning"  type="submit"> Modifier </button>
                                </a>
                                <a href="<?=path('security/delete/'),$user["id"]?>">
                                    <button class="btn btn-outline-info"  type="submit"> Supprimer </button>
                                </a>
                                <a href="#" >
                                    <button class="btn btn-outline-info"  type="submit"> Cours </button>
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