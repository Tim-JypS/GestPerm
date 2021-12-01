<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/media/photos/photo28@2x.jpg');">
    <div class="row no-gutters bg-primary-dark-op">
        <!-- Meta Info Section -->
        <div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
            <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
                <div class="w-100">
                    <a class="link-fx font-w600 font-size-h2 text-white" href="index.php">
                        One<span class="font-w400">UI</span>
                    </a>
                    <p class="text-white-75 mr-xl-8 mt-2">
                        Welcome to your amazing app. Feel free to login and start managing your projects and clients.
                    </p>
                </div>
            </div>
            <div class="p-4 p-xl-5 d-xl-flex justify-content-between align-items-center font-size-sm">
                <p class="font-w500 text-white-50 mb-0">
                    <strong><?php echo $one->name . ' ' . $one->version; ?></strong> &copy; <span data-toggle="year-copy"></span>
                </p>
                <ul class="list list-inline mb-0 py-2">
                    <li class="list-inline-item">
                        <a class="text-white-75 font-w500" href="javascript:void(0)">Legal</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-white-75 font-w500" href="javascript:void(0)">Contact</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-white-75 font-w500" href="javascript:void(0)">Terms</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END Meta Info Section -->

        <!-- Main Section -->
        <div class="hero-static col-lg-8 d-flex flex-column align-items-center bg-white">
            <div class="p-3 w-100 d-lg-none text-center">
                <a class="link-fx font-w600 font-size-h3 text-dark" href="index.php">
                    One<span class="font-w400">UI</span>
                </a>
            </div>
            <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
                <div class="w-100">
                    <!-- Header -->
                    <div class="text-center mb-5">
                        <p class="mb-3">
                            <i class="fa fa-2x fa-circle-notch text-primary-light"></i>
                        </p>
                        <h1 class="font-w700 mb-2">
                            Sign In
                        </h1>
                        <h2 class="font-size-base text-muted">
                            Welcome, please login or <a href="op_auth_signup3.php">sign up</a> for a new account.
                        </h2>
                    </div>
                    <!-- END Header -->

                    <!-- Sign In Form -->
                    <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <div class="row no-gutters justify-content-center">
                        <div class="col-sm-8 col-xl-4">
                            <form class="js-validation-signin" action="be_pages_auth_all.php" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg form-control-alt py-4" id="login-username" name="login-username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg form-control-alt py-4" id="login-password" name="login-password" placeholder="Password">
                                </div>
                                <div class="form-group d-flex justify-content-between align-items-center">
                                    <div>
                                        <a class="text-muted font-size-sm font-w500 d-block d-lg-inline-block mb-1" href="op_auth_reminder3.php">
                                            Forgot Password?
                                        </a>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-lg btn-alt-primary">
                                            <i class="fa fa-fw fa-sign-in-alt mr-1 opacity-50"></i> Sign In
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Sign In Form -->
                </div>
            </div>
            <div class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-sm-row justify-content-between font-size-sm text-center text-sm-left">
                <p class="font-w500 text-black-50 py-2 mb-0">
                    <strong><?php echo $one->name . ' ' . $one->version; ?></strong> &copy; <span data-toggle="year-copy"></span>
                </p>
                <ul class="list list-inline py-2 mb-0">
                    <li class="list-inline-item">
                        <a class="text-muted font-w500" href="javascript:void(0)">Legal</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-muted font-w500" href="javascript:void(0)">Contact</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-muted font-w500" href="javascript:void(0)">Terms</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END Main Section -->
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $one->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>

<!-- Page JS Code -->
<?php $one->get_js('js/pages/op_auth_signin.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>