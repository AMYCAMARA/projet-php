
<form method="post">
    <div class="alert alert-dismissible alert-info text-align-center">
        <h5 class="">Liste Des Etudiants Du Cours  <?=$module['libelle']?>; Date : <?=$cours['date']?> </h5>
    </div>

    <div class="content">
        <div class="container">
            <div class="table-responsive">
                <table class="table custom-table">
                    <thead>
                    <tr>
                        <th scope="col">Absent</th>
                        <th scope="col">Matricule</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">DateNaissance</th>
                        <th scope="col">Login</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($etudiants as $etudiant):?>
                    <tr>
                        <th scope="row">
                            <label class="control control--checkbox">
                                <input name="absences[]" value="<?=$etudiant['id']?>" type="checkbox"/>
                                <div class="control__indicator"></div>
                            </label>
                        </th>
                        <td><?=$etudiant['matricule']?></td>
                        <td><?=strtoupper($etudiant['nom'])?></td>
                        <td><?=ucfirst($etudiant['prenom'])?></td>
                        <td><?=$etudiant['dateNaissance']?></td>
                        <td><?=$etudiant['login']?></td>
                    </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
            <div class="form-group ">
                <button type="submit" class="btn btn-primary ">Marquer Absences</button>
            </div>
        </div>

    </div>

</form>