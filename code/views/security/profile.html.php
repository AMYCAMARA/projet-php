<?php
use ism\lib\Role;
?>
<div class="profile">
    <div class="container">
        <div class="main-body">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">

                                <img   src="
            https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="200">

                                <!--<img src="<?php echo ("../../public/upload/avatar.png") ?>" class="rounded-circle" width="200">-->
                                <div class="mt-3">
                                    <h4> <?= ucfirst($nom), '  ', ucfirst($prenom);?></h4>
                                    <p class="text-secondary mb-1"> <?= $login;?></p>
                                    <p class="text-muted font-size-sm"> <?= $role;?></p>
                                    <?php if(Role::estEtudiant()):?>
                                    <button class="btn btn-primary">Absences</button>
                                    <button class="btn btn-outline-primary">Mes Cours</button>
                                    <?php endif?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-3">

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Nom Complet </h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?= $nom, '  ' , $prenom ;?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?= $login;?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Role</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php 
                            if (Role::estAdmin())
                            {
                                echo 'Administrateur Systeme';
                            }
                            elseif(Role::estResponsable())
                            {
                                echo 'Responsable Pédagogique';
                            }
                            elseif (Role::estAttache())
                            {
                                echo 'Attache De Classe';
                            }
                            elseif (Role::estProfesseur())
                            {
                                echo 'Professeur';
                            }
                            elseif (Role::estEtudiant())
                            {
                                echo 'Etudiant';
                            }

                      ?>
                                </div>
                            </div>
                            <hr>

                            <?php if(Role::estEtudiant() || Role::estProfesseur()): ?>

                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Matricule</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?= $matricule;?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Sexe</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?= $sexe;?>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Date de Naissance</h6>
                                </div>
                                <div class='col-sm-9 text-secondary'>
                                    <?= $dateNaissance;?>
                                </div>
                            </div>
                            <hr>
                            <!-- Debut des infos de l'etudiant -->
                            <?php if(Role::estEtudiant()): ?>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Classe</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?= $niveau,' ' ,$libelleClasse;?>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Competence</h6>
                                </div>
                                <div class='col-sm-9 text-secondary'>
                                    <?=  $competences;?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Parcours</h6>
                                </div>
                                <div class='col-sm-9 text-secondary'>
                                    <?php if(!empty($parcours)):;?>
                                    <?= $parcours;?>
                                </div>
                                <?php endif;?>
                            </div>
                            <hr>
                            <?php endif ?>
                            <!-- Fin des infos de l'etudiant -->
                            <!-- Debut des infos du professeur -->

                            <?php if(Role::estProfesseur()): ?>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Grade</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?= $grade;?>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Classes</h6>
                                </div>
                                <div class='col-sm-9 text-secondary'>
                                    <?=  $classes;?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Modules</h6>
                                </div>
                                <div class='col-sm-9 text-secondary'>
                                    <?=  $modules;?>
                                </div>
                            </div>
                            <hr>
                            <?php endif ?>
                            <!-- Fin des infos du professeur -->

                            <?php endif; ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a class="btn btn-info " target="__blank" href="<?=path("security/register/"),$id?>">Modifier Mes Imformations</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

<style type="text/css">
.profile {
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;
}

.main-body {
    padding: 15px;
}

.card {
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0, 0, 0, .125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col,
.gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}

.mb-3,
.my-3 {
    margin-bottom: 1rem !important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}

.h-100 {
    height: 100% !important;
}

.shadow-none {
    box-shadow: none !important;
}
</style>