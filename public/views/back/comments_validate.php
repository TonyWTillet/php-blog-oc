<!DOCTYPE html>
<html class="h-100" lang="fr">

<?php include 'includes/head.php'?>
<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
        </svg>
    </div>
</div>
<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <?php include 'includes/header.php'?>

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">

        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Commentaires:</h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Auteur</th>
                                        <th>Commentaire</th>
                                        <th>Article</th>
                                        <th>Date de publication</th>
                                        <th>Publié</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($comments as $comment => $com) { ?>
                                        <tr>
                                            <td><?= $comment+1; ?></td>
                                            <td><?= $com->getUserId(); ?></td>
                                            <td><?= $com->getCommentText(); ?></td>
                                            <td><?= $com->getPostId(); ?></td>
                                            <td><?= $com->getCreated(); ?></td>
                                            <td><?= $com->getFlag() === 1 ? '<span class="label label-success">Oui</span>':'<span class="label label-danger">Non</span>'; ?></td>
                                            <th>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bd-example-modal-sm">Supprimer</button>
                                                <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Etes-vous sûr de vouloir supprimer ce commentaire ?</h5>
                                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-footer justify-content-center">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                                <a href="<?=HTTP.'comments?delete='.$com->getId();?>" class="btn btn-danger">Supprimer</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </th>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Auteur</th>
                                        <th>Commentaire</th>
                                        <th>Article</th>
                                        <th>Date de publication</th>
                                        <th>Publié</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
    <!--**********************************
        Content body end
    ***********************************-->


    <!--**********************************
        Footer start
    ***********************************-->
    <?php include 'includes/footer.php'?>
    <!--**********************************
        Footer end
    ***********************************-->
</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<?php include 'includes/scripts.php'?>
</body>

</html>
