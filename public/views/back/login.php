<!DOCTYPE html>
<html class="h-100" lang="fr">

<?php include 'includes/head.php'?>
<body class="h-100">

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

    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center"> <h4>Accéder à l'espace d'administration</h4></a>
                                <?php if (!empty($error)) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= $error; ?>
                                    </div>
                                <?php } ?>
                                <form class="mt-5 mb-5 login-input" method="post">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Mot de passe">
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Se connecter</button>
                                </form>
                                <p class="mt-5 login-form__footer">Vous n'avez pas de compte ? <a href="<?=PANEL.'register';?>" class="text-primary">S'inscrire</a> maintenant</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--**********************************
        Scripts
***********************************-->
    <?php include 'includes/scripts.php'?>

</body>
</html>