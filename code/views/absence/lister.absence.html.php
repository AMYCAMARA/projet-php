
<div class="alert alert-dismissible alert-info text-align-center ">
    <h5 class="text text-info text-center text-capitalize ">

    </h5>
</div>
    <!--MDB Tables-->
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-body">
                <a href="javascript:history.go(-1)" >
                    <button class="btn btn-primary"  type="submit"> Retour </button>
                </a>
                <!--Table-->
                <table class="table table-hover">
                    <!--Table head-->
                    <thead class="mdb bg-dark">
                    <tr class="text-white">
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Date</th>
                        <th>Semestre</th>
                        <th>Cours</th>
                    </tr>
                    </thead>
                    <!--Table head-->
                    <!--Table body-->
                    <tbody>

                    <?php foreach($absences as $absence):?>
                        <tr>
                            <td><?= strtoupper($absence['matricule'])?></td>
                            <td><?= strtoupper($absence['nom'])?></td>
                            <td><?= $absence['prenom']?></td>
                            <td><?= strtoupper($absence['date_absence'])?></td>
                            <td><?= strtoupper($absence['semestre'])?></td>
                            <td><?= strtoupper($absence['libelle'])?></td>
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
