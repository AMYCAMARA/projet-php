<?php 
use ism\lib\Session;
//verification des erreur de session
$array_error = [];
if (Session::keyExist("array_error")){
    //recupeeration des erreur de la session dans la variable local
    $array_error = Session::getSession("array_error");
    $array_post = Session::getSession("array_post");
    Session::destroyKey("array_error");    
    Session::destroyKey("array_post");
}
?>
<div class="alert alert-dismissible alert-info text-align-center">
    <h5 class="text-center">
        <?php if($update):?>
            Modification du compte : <?= $user['login']?> par  <?= $_SESSION["user_connect"]['login']?>
        <?php else:?>
            Ajout d'un utilisateur par : <?= $_SESSION['user_connect']["login"]?>
        <?php endif;?>
    </h5>
</div>
      <div class="container col-md-10">
      <form action="<?php ROOT_CONTROLLERS.'/security.php' ?>" method="post" class="container" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label  class="form-label">Nom</label>
                        <input type="text" class="form-control" name="nom" 
                            value="<?php echo htmlspecialchars(!isset($array_error['nom']) && !empty($array_post['nom']))?trim($array_post['nom']):'';?>">
                        <?php if(isset($array_error["nom"])):?>
                        <div  class="form-text text-danger ">
                            <?= $array_error["nom"]; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label  class="form-label">Prénom</label>
                        <input type="text" class="form-control" name="prenom"  
                        value="<?php echo htmlspecialchars(!isset($array_error['prenom']) && !empty($array_post['prenom']))?trim($array_post['prenom']):'';?>" >
                        <?php if(isset($array_error["prenom"])):?>
                            <div  class="form-text text-danger ">
                            <?= $array_error["prenom"]; ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            
            </div>

            <div class="row">
                <div class="col-md-6">
                <div class="mb-3">
                <label  class="form-label">Password</label>
                <input type="password" class="form-control"name="password" >
                <?php if(isset($array_error["password"])):?>
                    <div  class="form-text text-danger ">
                    <?= $array_error["password"]; ?></div>
                <?php endif; ?>
                </div>
                </div>

                <div class="col-md-6">
                <div class="mb-3">
                <label  class="form-label">Confirm password</label>
                <input type="password" class="form-control"name="confirm_password" >
                <?php if(isset($array_error["confirm_password"])):?>
                    <div  class="form-text text-danger ">
                    <?= $array_error["confirm_password"]; ?></div>
                <?php endif; ?>
                </div>
                </div>
            
            </div>

            <div class="mb-6">
                <label  class="form-label">Login</label>
                <input type="text" class="form-control" name="login">
                <?php if(isset($array_error["login"])):?>
                    <div id="emailHelp" class="form-text text-danger ">
                    <?= $array_error["login"]; ?></div>
                <?php endif; ?>
            </div>
            <br>

            <div >
                <div class="custom-file">
                <br>
                <input type="file" class=""  en="fr" name="avatar">
                <?php if(isset($array_error["avatar"])):?>
                    <div  class="form-text text-danger ">
                    <?= $array_error["avatar"]; ?></div>
                <?php endif; ?>
                </div>
            </div>
          <br>
          <?php if(!$update):?>
              <div class="form-group">
                  <label for="">Role</label>
                  <select class="form-control" name="role" id="">
                      <option value="ROLE_ATTACHE">Attaché De Classe</option>
                      <option value="ROLE_RESPONSABLE">Responsable Pédagogique</option>
                  </select>
              </div>
          <?php endif;?>

            <div class="row float-right">
             <button type="submit" class="btn btn-primary">
                 <?php if($update):?>
                     VALIDER LES MODIFICATIONS
                 <?php else:?>
                     AJOUTER L'UTILISATEUR
                 <?php endif;?>
             </button>
            </div>  
        </form>

      </div>
