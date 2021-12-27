<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="hero-static d-flex align-items-center">
    <div class="w-100">
        <!-- Reminder Section -->
        <div class="bg-white">
            <div class="content content-full">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4 py-4">
                        <!-- Header -->
                        <div class="text-center">
                            <p class="mb-2">
                                <i class="fa fa-2x fa-circle-notch text-primary"></i>
                            </p>
                            <h1 class="h4 mb-1">
                                
                            </h1>
                            <h2 class="h6 font-w400 text-muted mb-3">
                            Veuillez fournir l'e-mail de votre compte et nous vous enverrons votre mot de passe.
                            </h2>
                        </div>
                        <!-- END Header -->

                        <!-- Reminder Form -->
                        <!-- jQuery Validation (.js-validation-reminder class is initialized in js/pages/op_auth_reminder.min.js which was auto compiled from _js/pages/op_auth_reminder.js) -->
                        <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                        <form action="inc/connexion_admin/script_passwordforg.php" method="POST">
                            <div class="form-group py-3">
                                <input type="text" class="form-control form-control-lg form-control-alt" id="reminder-credential" name="reminder-credential" placeholder="Adresse e-mail">
                            </div>
                            <div class="form-group row justify-content-center">
                                <div class="col-md-6 col-xl-5">
                                    <button type="submit" name="submit"class="btn btn-block btn-primary">
                                        <i class="fa fa-fw fa-envelope mr-1"></i> Envoyer mail
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- END Reminder Form -->

                        <div class="text-center">
                            <a class="font-size-sm font-w500" href="index.php">Login?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Reminder Section -->

        <!-- Footer -->
        <div class="font-size-sm text-center text-muted py-3">
            <strong><?php echo $one->name . ' ' . $one->version; ?></strong> &copy; <span data-toggle="year-copy"></span>
        </div>
        <!-- END Footer -->
    </div>
</div>
<!-- END Page Content -->
<?php
if($submit){
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $submit = $_POST['submit'];

    $email_check = mysqli_query($conn ,"SELECT * FROM users WHERE email='" . $email. "'");
    $count = mysqli_num_rows($email_check);

    if($count != 0 ){
        // generate a new password
        $random = rand(72891, 92729);
        $new_password = $random;

        $email_password = $new_password;

        $new_password = password_hash($new_password, PASSWORD_BCRYPT, array('cost' => 14));         

        $new_password = password_hash($new_password);

        mysqli_query("update users set pw='" . $new_password. "' WHERE email='" . $email. "'");

        $subject = "Information";
        $message = "Votre mot de passe a été changé $email_password";
        $from = "From: example.me";

        mail($email, $subject, $message, $from);
        echo "votre noveau mot de passe a été envoyé";
    } else {
        echo"Cet email n'existe pas";
    }
}?>


<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $one->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>

<!-- Page JS Code -->
<?php $one->get_js('js/pages/op_auth_reminder.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
