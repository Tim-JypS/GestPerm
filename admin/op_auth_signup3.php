<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-primary-dark">
    <div class="row no-gutters bg-primary-dark-op">
        <!-- Meta Info Section -->
        <div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
            <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
                <div class="w-100">
                    <a class="link-fx font-w600 font-size-h2 text-white" href="index.php">
                        One<span class="font-w400">UI</span>
                    </a>
                    <p class="text-white-75 mr-xl-8 mt-2">
                        Creating a new account is completely free. Get started with 5 projects to manage and feel free to upgrade as your business grow.
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
                            Create Account
                        </h1>
                        <h2 class="font-size-base text-muted">
                            Get your access today in one easy step
                        </h2>
                    </div>
                    <!-- END Header -->

                    <!-- Sign Up Form -->
                    <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _js/pages/op_auth_signup.js) -->
                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <div class="row no-gutters justify-content-center">
                        <div class="col-sm-8 col-xl-4">
                            <form class="js-validation-signup" action="be_pages_auth_all.php" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg form-control-alt py-4" id="signup-username" name="signup-username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg form-control-alt py-4" id="signup-email" name="signup-email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg form-control-alt py-4" id="signup-password" name="signup-password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg form-control-alt py-4" id="signup-password-confirm" name="signup-password-confirm" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <div class="d-md-flex align-items-md-center justify-content-md-between">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="signup-terms" name="signup-terms">
                                            <label class="custom-control-label font-w400" for="signup-terms">I agree to Terms &amp; Conditions</label>
                                        </div>
                                        <div class="py-2">
                                            <a class="font-size-sm font-w500" href="javascript:void(0)" data-toggle="modal" data-target="#one-signup-terms">View Terms</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-center mb-0">
                                    <button type="submit" class="btn btn-lg btn-alt-success">
                                        <i class="fa fa-fw fa-plus mr-1 opacity-50"></i> Sign Up
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Sign Up Form -->
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

<!-- Terms Modal -->
<div class="modal fade" id="one-signup-terms" tabindex="-1" role="dialog" aria-labelledby="one-signup-terms" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-popout" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $one->get_text('small', 5); ?>
                </div>
                <div class="block-content block-content-full text-right border-top">
                    <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Terms Modal -->

<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $one->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>

<!-- Page JS Code -->
<?php $one->get_js('js/pages/op_auth_signup.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>