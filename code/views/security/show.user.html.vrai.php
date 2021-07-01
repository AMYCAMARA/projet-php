<?php
use ism\lib\Role;
extract($users);
?>

<div class="alert alert-dismissible alert-info text-align-center">
    <h4 class="text-center">Lister des

    <?php if(Role::estAdmin()):?>
        Responsables Pédagogique et des Attachés De Classes
    <?php elseif(Role::estResponsable()):?>
        Professeurs
    <?php else:?>
        Des Etudiants
    <?php endif;?>

    </h4>
</div>

<table class="table mt-5 container table-bordered">
    <thead>
        <tr>
            <th id="id">Id</th>
            <th id="nom">Nom </th>
            <th id="prenom">Prenom</th>
            <th id="Email">Email</th>
            <?php if(Role::estAttache()):?>
                <td>Matricule</td>
            <?php endif;?>
            <?php if(Role::estAdmin()):?>
            <th id="Modifier">Modifier</th>
            <th id="Supprimer">Supprier</th>
            <?php endif;?>
            <?php if(Role::estAttache()):?>
            <th id="Classe">Id Classe</th>
            <?php endif;?>

        </tr>
    </thead>
    <tbody>
        <?php if($users):?>
        <?php foreach ($users as  $user):?>
        <tr>

            <th><?= $user["id"] ?></th>
            <td><?= $user["nom"] ?></td>
            <td><?= $user["prenom"] ?></td>
            <td><?= $user["login"] ?></td>
            <?php if(Role::estAttache()):?>
            <td><?= $user["matricule"] ?></td>
            <?php endif;?>
            <?php if(Role::estAdmin()):?>


                <td> <a href="<?=path('security/register/'),$user['id'] ;?>" class="alert-link">
                    <button type="button" class="btn btn-info">Modifier</button>
                    </a>
                </td>
            <td>
                <!-- Modal -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                    <a href="<?=path('security/delete/'),$user["id"]?>" class="alert-link">

                        <button type="button" class="btn btn-primary">Supprimer</button>
                    </a
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Confimer votre choix</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5>
                                Etes-vous sûr de vouloir supprimer <strong class="text text-primary"> <?=$user["login"]?> </strong>
                                </h5>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                <a href="<?=path('security/delete/'),$user["id"]?>" class="alert-link">

                                    <button type="button" class="btn btn-primary">Supprimer</button>

                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <!---->
            </td>
            <?php endif;?>

            <td>

                <?php if(Role::estAttache()):?>
                    <?= $user["classe"] ?>
                <?php endif;?>
            </td>

        </tr>
        <?php  endforeach;?>
        <?php  else:?>
        pas de users
        <?php  endif;?>

    </tbody>
</table>
-->