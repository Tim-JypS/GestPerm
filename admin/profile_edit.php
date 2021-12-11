<?php session_start(); ?>
<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $one->get_css('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'); ?>
<?php $one->get_css('js/plugins/select2/css/select2.min.css'); ?>
<?php $one->get_css('js/plugins/flatpickr/flatpickr.min.css'); ?>

<?php if(!class_exists("Database"))
	require '../class/database.php';
?>
<?php 
    $IdAgent = $_SESSION['auth']['user']->IdAgent;
    $agent1=DataBase::SelectQuery("SELECT * FROM agent WHERE IdAgent='$IdAgent'");
?>
<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/media/photos/photo8@2x.jpg');">
    <div class="bg-black-75">
        <div class="content content-full text-center">
            <div class="my-3">
                <?php $one->get_avatar(13, '', false, true); ?>
            </div>
            <h1 class="h2 text-white mb-0">Modification du compte</h1>
            <h2 class="h4 font-w400 text-white-75">
                <?php echo $agent1["0"]->NomAgent.' '.$agent1["0"]->PrenomsAgent; ?>
            </h2>
            <a class="btn btn-light" href="profile.php">
                <i class="fa fa-fw fa-arrow-left text-danger"></i> Retour au profil
            </a>
       </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content content-boxed">
    <div class="row">
        <div class="col-md-7 col-xl-8">
            <!-- Updates -->
            
            <!-- Ratings -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        <i class="fa fa-pencil-alt text-muted mr-1"></i> Modification du profil
                    </h3>
                </div>
                <div class="block-content">
                <form >
                <div class="row push">
                    <div class="col-lg-12 col-xl-12">
                        <div class="form-group">
                            <label for="matriculeAgent">Matricule</label>
                            <input style="display: none;" id="idAgent" type="text" class="form-control"  name="idagent" value="<?php echo $agent1["0"]->IdAgent; ?>">
                            <input type="text" class="form-control" id="matriculeAgent" readonly name="matricule" value="<?php echo $agent1["0"]->MatriculeAgent; ?>">
                        </div>
                        <div class="form-group">
                            <label for="civiliteAgent">Civilité</label>
                            <select class="form-control" id="civiliteAgent" name="civilite">
                            <?php 
                                if($agent1["0"]->CiviliteAgent === "Monsieur"){
                                    echo '<option value="Monsieur" selected="selected">Monsieur</option>
                                        <option value="Madame">Madame</option>
                                        <option value="Mademoiselle">Madémoiselle</option>';
                                }elseif($agent1["0"]->CiviliteAgent === "Madame"){
                                    echo '<option value="Monsieur">Monsieur</option>
                                        <option value="Madame" selected="selected">Madame</option>
                                        <option value="Mademoiselle">Madémoiselle</option>';
                                }elseif($agent1["0"]->CiviliteAgent === "Mademoiselle"){
                                    echo '<option value="Monsieur">Monsieur</option>
                                        <option value="Madame">Madame</option>
                                        <option value="Mademoiselle" selected="selected">Madémoiselle</option>';
                                }else{
                                    echo '<option value="Monsieur">Monsieur</option>
                                        <option value="Madame">Madame</option>
                                        <option value="Mademoiselle">Madémoiselle</option>';
                                }
                            ?> 
                            </select>                        
                        </div>
                        <div class="form-group">
                            <label for="nomJeuneFilleAgent">Nom de jeune fille</label>
                            <input type="text" class="form-control" id="nomJeuneFilleAgent" name="nomJeuneFille" value="<?php echo $agent1["0"]->NomJeuneFilleAgent; ?>">
                        </div>
                        <div class="form-group">
                            <label for="nomAgent">Nom</label>
                            <input type="text" class="form-control" id="nomAgent" name="nom" value="<?php echo $agent1["0"]->NomAgent; ?>">
                        </div>
                        <div class="form-group">
                            <label for="prenomsAgent">Prénom(s)</label>
                            <input type="text" class="form-control" id="prenomsAgent" name="prenoms" value="<?php echo $agent1["0"]->PrenomsAgent; ?>">
                        </div>
                        <div class="form-group">
                            <label for="sexeAgent">Sexe</label>
                            <select class="form-control" id="sexeAgent" name="sexe">
                            <?php 
                                if($agent1["0"]->SexeAgent === "F"){
                                    echo '<option value="F" selected="selected">Féminin</option>';
                                    echo '<option value="M">Masculin</option>';
                                }else{
                                    echo '<option value="M" selected="selected">Masculin</option>';
                                    echo '<option value="F">Féminin</option>';
                                }
                            ?>    
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dateNaissanceAgent">Date de naissance</label>
                            <?php 
                                if($agent1["0"]->DateNaissanceAgent){
                                    $date = date_create($agent1["0"]->DateNaissanceAgent);
                                    echo '<input type="text" class="js-flatpickr form-control bg-white" id="dateNaissanceAgent" name="dateNaissance" value="'.date_format($date, 'Y/m/d').'"  placeholder="jj/mm/aaaa" data-date-format="Y/m/d">';
                                }else{
                                    echo '<input type="text" class="js-flatpickr form-control bg-white" id="dateNaissanceAgent" name="dateNaissance" placeholder="jj/mm/aaaa" data-date-format="d/m/Y">';
                                }
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="situationMatrimonialeAgent">Situation matrimoniale</label>
                            <select class="form-control" id="situationMatrimonialeAgent" name="situationMatrimoniale">
                                <?php 
                                    if($agent1["0"]->SituationMatrimonialeAgent === "Celibat"){
                                        echo '<option value="Celibat" selected="selected">Célibataire</option>
                                            <option value="Marie">Marié(e)</option>
                                            <option value="Veuve">Veuf(ve)</option>';
                                    }elseif($agent1["0"]->SituationMatrimonialeAgent === "Marie"){
                                        echo '<option value="Celibat">Célibataire</option>
                                            <option value="Marie" selected="selected">Marié(e)</option>
                                            <option value="Veuve">Veuf(ve)</option>';
                                    }elseif($agent1["0"]->SituationMatrimonialeAgent === "Veuve"){
                                        echo '<option value="Celibat">Célibataire</option>
                                            <option value="Marie">Marié(e)</option>
                                            <option value="Veuve" selected="selected">Veuf(ve)</option>';
                                    }else{
                                        echo '<option value="Celibat">Célibataire</option>
                                            <option value="Marie">Marié(e)</option>
                                            <option value="Veuve">Veuf(ve)</option>';
                                    }
                                ?> 
                            </select>                         
                        </div>
                        <div class="form-group">
                            <label for="telephoneAgent">Téléphone</label>
                            <input type="text" class="form-control" id="telephoneAgent" name="telephone" value="<?php echo $agent1["0"]->TelAgent; ?>">
                        </div>
                        <div class="form-group">
                            <label for="emailAgent">Email</label>
                            <input type="email" class="form-control" id="emailAgent" name="email" value="<?php echo $agent1["0"]->EmailAgent; ?>">
                        </div>
                        <div class="form-group">
                            <label for="datePriseServiceAgent">Date de prise de service</label>
                            <?php 
                                if($agent1["0"]->DatePriseServiceAgent){
                                    $date = date_create($agent1["0"]->DatePriseServiceAgent);
                                    echo '<input type="text" class="js-flatpickr form-control bg-white" id="datePriseServiceAgent" name="datePriseService" value="'.date_format($date, 'Y/m/d').'"  placeholder="jj/mm/aaaa" data-date-format="Y/m/d">';
                                }else{
                                    echo '<input type="text" class="js-flatpickr form-control bg-white" id="datePriseServiceAgent" name="datePriseService" placeholder="jj/mm/aaaa" data-date-format="Y/m/d">';
                                }
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="fonctionAgent">Fonction</label>
                            <select class="js-select2 form-control" id="fonctionAgent" name="fonction" style="width: 100%;"  data-placeholder="Choisir une..">
                                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                <?php 
                                    $fonctions=Database::SelectQuery("SELECT * FROM fonction ORDER BY NomFonction ASC");
                                    foreach($fonctions as $fonction):
                                ?>
                                <option value="<?=$fonction->IdFonction?>" <?php if($fonction->IdFonction === $agent1["0"]->IdFonction){ echo "selected =\"selected\""; } ?> > <?=$fonction->NomFonction?></option>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="ecoleAgent">Ecole</label>
                            <select class="js-select2 form-control" id="ecoleAgent" name="ecoleAgent" style="width: 100%;"  data-placeholder="Choisir une..">
                                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                <?php 
                                    $ecoles=Database::SelectQuery("SELECT * FROM ecole ORDER BY NomEcole ASC");
                                    foreach($ecoles as $ecole):
                                ?>
                                <option value="<?=$ecole->IdEcole?>" <?php if($ecole->IdEcole === $agent1["0"]->IdEcole){ echo "selected =\"selected\""; } ?> > <?=$ecole->NomEcole?></option>
                                <?php endforeach ?>
                            </select>
                        </div>

                    </div>
                </div>
            </form>
            <div class="form-group">
                <button id="modifAgent" class="btn btn-alt-primary">
                    Modifier
                </button>
            </div>

                </div>
            </div>
            <!-- END Ratings -->


            <!-- END Updates -->
        </div>
        <div class="col-md-5 col-xl-4">
            <!-- Profil Image -->
            
            <!-- END Profil Image -->
            <!-- Signature Image -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        <i class="fa fa-briefcase text-muted mr-1"></i> Photo de profil
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="media d-flex align-items-center push">
                        <div class="form-group">
                                <label>Votre Photo</label>
                                <div class="push">
                                    <?php $one->get_avatar(13); ?>
                                </div>
                                <div class="custom-file">
                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                    <input type="file" class="custom-file-input" data-toggle="custom-file-input" id="one-profile-edit-avatar" name="one-profile-edit-avatar">
                                    <label class="custom-file-label" for="one-profile-edit-avatar">Choisir une photo</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="text-center push">
                        <button type="button" class="btn btn-sm btn-light">Modifier</button>
                    </div>
                    
                </div>
            <!-- END Signature Image -->
            <!-- Products -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        <i class="fa fa-briefcase text-muted mr-1"></i> Signature
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="media d-flex align-items-center push">
                        <div class="form-group">
                                <label>Votre signature</label>
                                <div class="push">
                                    <?php $one->get_avatar(13); ?>
                                </div>
                                <div class="custom-file">
                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                    <input type="file" class="custom-file-input" data-toggle="custom-file-input" id="one-profile-edit-avatar" name="one-profile-edit-avatar">
                                    <label class="custom-file-label" for="one-profile-edit-avatar">Choisir une photo</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="text-center push">
                        <button type="button" class="btn btn-sm btn-light">Modifier</button>
                    </div>
                    
                </div>
            </div>
            <!-- END Products -->
            
            
        </div>
    </div>
</div>
<!-- END Page Content -->
<!-- Page JS Plugins -->
<?php $one->get_js('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'); ?>
<?php $one->get_js('js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js'); ?>
<?php $one->get_js('js/plugins/select2/js/select2.full.min.js'); ?>
<?php $one->get_js('js/plugins/jquery.maskedinput/jquery.maskedinput.min.js'); ?>
<?php $one->get_js('js/plugins/flatpickr/flatpickr.min.js'); ?>


<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<script>jQuery(function(){ One.helpers(['flatpickr', 'datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider']); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>

<script type="text/javascript">
    
    
    $('#modifAgent').click(function()
    {
        //alert($('#fonctionAgent').val());
        let id=$('#idAgent').val();
        let nom=$('#nomAgent').val();
        let prenoms=$('#prenomsAgent').val();
        let civilite=$('#civiliteAgent').val();
        let nomJeuneFille=$('#nomJeuneFilleAgent').val();
        let sexe=$('#sexeAgent').val();
        let dateNaissance=$('#datePriseServiceAgent').val();
        let telephone=$('#telephoneAgent').val();
        let email=$('#emailAgent').val();
        let datePriseService=$('#datePriseServiceAgent').val();
        let situationMatrimoniale=$('#situationMatrimonialeAgent').val();
        let fonction=$('#fonctionAgent').val();
        let ecole=$('#ecoleAgent').val();
        $.get('scripts/modifagent.php',{idagent:id,nom:nom,prenoms:prenoms,civilite:civilite,nomJeuneFille:nomJeuneFille,sexe:sexe,dateNaissance:dateNaissance,telephone:telephone,email:email,datePriseService:datePriseService,situationMatrimoniale:situationMatrimoniale,fonction:fonction,ecole:ecole},function()
        {
            window.location.reload();
        })
    })
    
</script>
