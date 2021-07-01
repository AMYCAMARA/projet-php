
<?php 
use ism\lib\ROle;
use ism\lib\Session;
if(Session::keyExist('user-connect'))
$user = Session::getSession('user_connect');

?>
<?php  if(Role::estConnect()): ?>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="./">AGOEVI-33</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle">
    <em class="fas fa-bars"> </em></button>
    <!-- Navbar-->     
    <!-- Navbar Search> -->
    <!--
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Rechercher..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><em class="fas fa-search"></em></button>
        </div>
    </form>
-->
    <div class="nav-item dropdown">
        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action">
            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="avatar rounded-circle" width="25" >
            <?= $_SESSION['user_connect']['nom'],' ',$_SESSION['user_connect']['prenom']  ?>
            <b class="caret"> </b></a>
        <div class="dropdown-menu">
            <a href="<?=path("security/profile");?>" class="dropdown-item"><em class="fas fa-info-circle"></em> Profile</a></a>
            <a href="<?=path("security/register/"),$_SESSION['user_connect']['id'];?>" class="dropdown-item"><i class="fas fa-user-edit"></i> Modifier Info</a></a>
            <div class="dropdown-divider"></div>
            <a href="<?=path("security/logout");?>" class="dropdown-item"><em class="fas fa-lock-open"></em> Se Deconnecter</a></a>
        </div>
    </div>

</nav>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Mon compte</div>
                    <a class="nav-link" href="<?=path("security/profile");?>">
                        <div class="sb-nav-link-icon"><em class="fas fa-info-circle"></em></div>
                        Mon Profile
                    </a>
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <?php if(ROle::estAdmin()):?>
                    <a class="nav-link collapsed" href="<?=path("security/register");?>" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><em class="fas fa-users"></em></div>
                        Ajouter Un User
                    </a>
                    <?php endif;?>
                    <?php if(ROle::estResponsable()):?>
                        <a class="nav-link collapsed" href="<?=path("security/showUser");?>" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><em class="fas fa-users"></em></div>
                            Gerer Les profs
                        </a>

                        <a class="nav-link collapsed" href="<?=path("security/listerEtudiant");?>" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><em class="fas fa-user-graduate"></em></div>
                            Filtrer Etudiants
                        </a>
                        <a class="nav-link collapsed" href="<?=path("ressource/listerClasse");?>" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><em class="fas fa-school"></em></div>
                            Gerer Des Classes
                        </a>
                        <a class="nav-link collapsed" href="<?=path("ressource/listerModule");?>" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><em class="fas fa-book"></em></div>
                            Gerer Les Modules
                        </a>

                        <a class="nav-link collapsed" href="<?=path("absence/listerCours");?>" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><em class="fas fa-marker"></em></div>
                            Gerer Les Absences
                        </a>
                        <a class="nav-link collapsed" href="<?=path("ressource/listerAnneeScolaire");?>" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><em class="fas fa-marker"></em></div>
                            Gérer An-Scolaires
                        </a>

                        <a class="nav-link collapsed" href="<?=path("ressource/listerCours");?>" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><em class="fas fa-marker"></em></div>
                            Gérer Les Cours
                        </a>
                    <?php endif;?>
                    <?php if(ROle::estAttache()):?>

                    <a class="nav-link collapsed" href="<?=path("security/registerEtudiant");?>" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><em class="fas fa-graduation-cap"></em></div>
                        Nouveau Etudiant
                    </a>
                    <a class="nav-link collapsed" href="<?=path("security/registerOldEtudiant");?>" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><em class="fas fa-graduation-cap"></em></div>
                        Ancien Etudiant
                    </a>
                        <a class="nav-link collapsed" href="<?=path("security/showUser");?>" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><em class="fas fa-users"></em></div>
                            Cours des profs
                        </a>
                        <a class="nav-link collapsed" href="<?=path("security/listerEtudiant");?>" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><em class="fas fa-user-graduate"></em></div>
                            Lister les Etudiants
                        </a>
                        <a class="nav-link collapsed" href="<?=path("ressource/listerClasse");?>" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><em class="fas fa-school"></em></div>
                            Gerer Des Classes
                        </a>
                        <a class="nav-link collapsed" href="<?=path("absence/listerCours");?>" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><em class="fas fa-marker"></em></div>
                            Gerer Les Absences
                        </a>

                    <?php endif;?>
                    <?php if(ROle::estProfesseur()):?>
                        <a class="nav-link collapsed" href="<?=path("security/listerEtudiant");?>" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><em class="fas fa-user-graduate"></em></div>
                            Lister les Etudiants
                        </a>
                        <a class="nav-link collapsed" href="<?=path("absence/listerCours");?>" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><em class="fas fa-marker"></em></div>
                            Gerer Les Absences
                        </a>
                        <a class="nav-link collapsed" href="<?=path("ressource/coursByProf/"),$_SESSION['user_connect']['id'];?>" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><em class="fas fa-marker"></em></div>
                            Lister Mes Cours
                        </a>
                    <?php endif;?>

                    <?php if(ROle::estAdmin()):?>

                        <a class="nav-link collapsed" href="<?=path("security/showUser");?>" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><em class="fas fa-users"></em></div>
                            Lister Attachés & Profs
                        </a>
                    <?php endif;?>

                    <?php if(ROle::estEtudiant()):?>

                        <a class="nav-link collapsed" href="<?=path("absence/absenceByOne/"),$_SESSION['user_connect']['id'];?>" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><em class="fas fa-users"></em></div>
                            Lister Mes Cours
                        </a>
                        <a class="nav-link collapsed" href="<?=path("absence/absenceByOne/"),$_SESSION['user_connect']['id'];?>" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><em class="fas fa-users"></em></div>
                            Lister Mes Absence
                        </a>
                    <?php endif;?>

                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Connecté en tant que:</div>
                <?= strtoupper(Session::getSession('user_connect')["nom"]);?>
            </div>
        </nav>
    </div>

    <div id="layoutSidenav_content">
    <main>
<?php endif?>