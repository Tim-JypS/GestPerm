<?php 
    session_start();
    if (!isset($_SESSION['auth']["user"]->IdAgent)) 
    header('location:index.php');
?>
<?php require 'inc/_global/config.php'; ?>
<?php require '../inc/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $one->get_css('js/plugins/datatables/dataTables.bootstrap4.css'); ?>
<?php $one->get_css('js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css'); ?>
<?php $one->get_css('js/plugins/select2/css/select2.min.css'); ?>
<!-- Page JS Plugins CSS -->
<?php $one->get_css('js/plugins/sweetalert2/sweetalert2.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <!-- <h1 class="flex-sm-fill h3 my-2">
                Fonction <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted"></small>
            </h1> -->
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">Profile</li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a class="link-fx" href="">Modification du mot de passe</a>
                    </li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Dynamic Table Full -->
    <div class="block block-rounded">
        <div class="block-header">
            <h3 class="block-title">Modification du mot de passe<small</small></h3>
            
        </div>
        <div class="block-content block-content-full">
            <div class="alert alert-danger alert-dismissible hide" style="display:none;" id="rapport_error">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <i class="icon fa fa-ban"></i> Erreur! 
                <span id="msg_error">Nom utilisateur ou mot de passe incorrect.</span>
            </div>
            <form>
                    <div class="form-group">
                    <input style="display: none;" id="idagent" type="text" class="form-control"  name="idagent" value="<?php echo $_SESSION['auth']['user']->IdAgent; ?>">

                            <label for="oldPassword">Ancien mot de passe</label>
                            <input type="password" class="form-control" id="oldPassword" name="oldPassword" >
                        </div>
                        <div class="form-group">
                            <label for="newPassword">Nouveau mot de passe</label>
                            <input type="password" class="form-control" id="newPassword" name="newPassword" >
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Confirmer le nouveau mot de passe</label>
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" >
                        </div>
            </form>

            <div class="form-group">
                <button id="modifPassword" class="btn btn-alt-primary">
                    Modifier le mot de passe
                </button>
            </div>

        </div>
    </div>
    <!-- END Dynamic Table Full -->
    
    <!-- END Dynamic Table with Export Buttons -->
</div>

    <!--Confirm Remove Modal-->
        <!-- Modal HTML -->
        <div class="modal" id="ConfirmDelete-modal" tabindex="-1" role="dialog" aria-labelledby="Delete-newdr-modal" aria-hidden="true">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">

                <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-icon-success swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;"><div class="swal2-header"><ul class="swal2-progress-steps" style="display: none;"></ul><div class="swal2-icon swal2-error" style="display: none;"></div><div class="swal2-icon swal2-question" style="display: none;"></div><div class="swal2-icon swal2-warning" style="display: none;"></div><div class="swal2-icon swal2-info" style="display: none;"></div><div class="swal2-icon swal2-success swal2-icon-show" style="display: flex;"><div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                    <span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span>
                    <div class="swal2-success-ring"></div> <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                    <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                    </div>
                    <img class="swal2-image" style="display: none;"><h2 class="swal2-title" id="swal2-title" style="display: flex;">Supprimé!</h2>
                    <button type="button" class="swal2-close" aria-label="Close this dialog" style="display: none;">×</button></div><div class="swal2-content"><div id="swal2-content" class="swal2-html-container" style="display: block;">Votre enregistrement à été supprimé.</div><input class="swal2-input" style="display: none;"><input type="file" class="swal2-file" style="display: none;"><div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select class="swal2-select" style="display: none;"></select><div class="swal2-radio" style="display: none;"></div><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" style="display: none;"></textarea><div class="swal2-validation-message" id="swal2-validation-message"></div></div><div class="swal2-actions"><div class="swal2-loader"></div><button type="button" class="swal2-confirm btn btn-success m-1 deleted" aria-label="" style="display: inline-block;" data-dismiss="modal">OK</button><button type="button" class="swal2-deny" aria-label="" style="display: none;">Non</button><button type="button" class="swal2-cancel btn btn-danger m-1" aria-label="" style="display: none;">Annuler</button></div><div class="swal2-footer" style="display: none;"></div><div class="swal2-timer-progress-bar-container"><div class="swal2-timer-progress-bar" style="display: none;"></div></div></div>
                </div>
            </div>
        </div>  
    <!--End Remove modal-->

    <!--Edit Modal-->

    <!-- Large Block Modal -->
        
    </div>
    <!-- END Large Block Modal -->
    <!--Fin Edit modal-->
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $one->get_js('js/plugins/datatables/jquery.dataTables.min.js'); ?>
<?php $one->get_js('js/plugins/datatables/dataTables.bootstrap4.min.js'); ?>
<?php $one->get_js('js/plugins/datatables/buttons/dataTables.buttons.min.js'); ?>
<?php $one->get_js('js/plugins/datatables/buttons/buttons.print.min.js'); ?>
<?php $one->get_js('js/plugins/datatables/buttons/buttons.html5.min.js'); ?>
<?php $one->get_js('js/plugins/datatables/buttons/buttons.flash.min.js'); ?>
<?php $one->get_js('js/plugins/datatables/buttons/buttons.colVis.min.js'); ?>
<?php $one->get_js('js/plugins/select2/js/select2.full.min.js'); ?>
<?php $one->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>
<?php $one->get_js('js/plugins/jquery-validation/additional-methods.js'); ?>

<!-- Page JS Helpers (Select2 plugin) -->
<script>jQuery(function(){ One.helpers('select2'); });</script>

<!-- Page JS Code -->
<?php $one->get_js('js/pages/be_tables_datatables.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>


<!--Insert Ajax-->
<script>
    $(function() {
				
		//MODIFICATION DU MOT DE PASSE
		$("body").on("click", "#modifPassword", function(e) {
			var password_old = $.trim($('#oldPassword').val());
			var password_news = $.trim($('#newPassword').val());
			var password_news_confirmation = $.trim($('#confirmPassword').val());
			//VERIFICATION DE LA LONGUEUR DU MOT DE PASSE
			if(password_news_confirmation.length > 5){
				// VERIFICATION DE LA CONFORMITE DE LA SAISIE DU NOUVEAU MOT DE PASSE
				if(password_news == password_news_confirmation){					

                    let idagent=$.trim($('#idagent').val());
                    let MotDePasse=$.trim($('#confirmPassword').val());
                    $.get('inc/logical/Crud/crudagent/modifpassword.php',{AncienPassword:password_old,MotDePasse:MotDePasse,idagent:idagent},function()
                    {
                        window.location.reload();
                    })
				}else{
					//alert('pass différent');
					$("#rapport_error").removeClass("hide");
					$("#msg_error").text("Les nouveaux mots de passes saisis sont différents...");
				}
			}else if(password_news_confirmation == ''){
				$("#rapport_error").removeClass("hide");
				$("#msg_error").text("Vous devez confirmer le nouveau mot de passe saisi...");
			}else if(password_old == ''){
				$("#rapport_error").removeClass("hide");
				$("#msg_error").text("Vous devez saisir votre mot de passe acuel...");
			}else{
				//alert('trop court');
				$("#rapport_error").removeClass("hide");
				$("#msg_error").text("Le nouveau doit contenir au moins 8 carcatères...");
			}
		});
		
		
		
		
		
	});
</script> 