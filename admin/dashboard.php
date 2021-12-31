<?php 
    session_start();
    if (!isset($_SESSION['auth']["user"]->IdAgent)) 
    header('location:index.php');
?>
<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2 text-center text-sm-left">
            <div class="flex-sm-fill">
                <h1 class="h3 font-w700 mb-2">
                    Tableau de bord
                </h1>
                <h2 class="h6 font-w500 text-muted mb-0">
                    Bienvenue <a class="font-w600" href="javascript:void(0)"><?=trim($NomUser).' '.trim($PreUser)?></a>!
                </h2>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Overview -->
    <div class="row row-deck">
        <div class="col-sm-6 col-xl-3">
            <!-- Pending Orders -->
            <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h2 font-w700">
                        <?php 
                            $nombreAgent=DataBase::SelectQuery("SELECT COUNT(IdAgent) as nombreAgent FROM agent ");
                            echo $nombreAgent[0]->nombreAgent;
                        ?>
                        </dt>
                        <dd class="text-muted mb-0">Agents</dd>
                    </dl>
                    <div class="item item-rounded bg-body">
                        <i class="fa fa-users font-size-h3 text-primary"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                    <a class="font-w500 d-flex align-items-center" href="javascript:void(0)">
                        Liste des agents
                        <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                    </a>
                </div>
            </div>
            <!-- END Pending Orders -->
        </div>

        <div class="col-sm-6 col-xl-3">
            <!-- Conversion Rate -->
            <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h2 font-w700">
                        <?php 
                            $nombreEcole=DataBase::SelectQuery("SELECT COUNT(IdEcole) as nombreEcole FROM ecole ");
                            echo $nombreEcole[0]->nombreEcole;
                        ?>
                        </dt>
                        <dd class="text-muted mb-0">Ecoles</dd>
                    </dl>
                    <div class="item item-rounded bg-body">
                        <i class="fa fa-building font-size-h3 text-primary"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                    <a class="font-w500 d-flex align-items-center" href="etablissemebt.php">
                        Liste des écoles
                        <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                    </a>
                </div>
            </div>
            <!-- END Conversion Rate-->
        </div>

        <div class="col-sm-6 col-xl-3">
            <!-- New Customers -->
            <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h2 font-w700">
                        <?php 
                            $nombreInspection=DataBase::SelectQuery("SELECT COUNT(IdInspection) as nombreInspection FROM inspection ");
                            echo $nombreInspection[0]->nombreInspection;
                        ?>
                        </dt>
                        <dd class="text-muted mb-0">Inspections</dd>
                    </dl>
                    <div class="item item-rounded bg-body">
                        <i class="fa fa-building font-size-h3 text-primary"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                    <a class="font-w500 d-flex align-items-center" href="inspection.php">
                        Liste des inspections
                        <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                    </a>
                </div>
            </div>
            <!-- END New Customers -->
        </div>
        
        

        <div class="col-sm-6 col-xl-3">
            <!-- Messages -->
            <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h2 font-w700">
                        <?php 
                            $nombreDirection=DataBase::SelectQuery("SELECT COUNT(IdDirectionRegionale) as nombreDirection FROM directionregionale ");
                            echo $nombreDirection[0]->nombreDirection;
                        ?>
                        </dt>
                        <dd class="text-muted mb-0">Directions régionales</dd>
                    </dl>
                    <div class="item item-rounded bg-body">
                        <i class="fa fa-building font-size-h3 text-primary"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                    <a class="font-w500 d-flex align-items-center" href="dr.php">
                        Liste des directions
                        <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                    </a>
                </div>
            </div>
            <!-- END Messages -->
        </div>
    </div>
    <!-- END Overview -->

    <!-- Statistics -->
    <div class="row">
        <div class="col-xl-8 d-flex flex-column">
            <!-- Earnings Summary -->
            <div class="block block-rounded flex-grow-1 d-flex flex-column">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Rapport</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option">
                            <i class="si si-settings"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full flex-grow-1 d-flex align-items-center">
                    <!-- Earnings Chart Container -->
                    <!-- Chart.js Chart is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
                    <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                    <canvas id="myChart" width="400" height="400"></canvas>
                </div>
            </div>
            <!-- END Earnings Summary -->
        </div>
        <div class="col-xl-4 d-flex flex-column">
            <!-- Last 2 Weeks -->
            <!-- Sparkline Charts (.js-sparkline class is initialized in Helpers.sparkline() -->
            <!-- For more info and examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
            <div class="row row-deck flex-grow-1">
                <div class="col-md-6 col-xl-12">
                    <div class="block block-rounded d-flex flex-column">
                        <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between">
                            <dl class="mb-0">
                                <dt class="font-size-h2 font-w700">
                                <?php 
                                    $nombrePermutationRefusees=DataBase::SelectQuery("SELECT COUNT(IdAnnonce) as nombrePermutation FROM annonce WHERE StatutAnnonce ='AN' ");
                                    echo $nombrePermutationRefusees[0]->nombrePermutation;
                                ?>
                                </dt>
                                <dd class="text-muted mb-0">Total Permuations Refusées</dd>
                            </dl>
                            <div>
                                <!--<div class="d-inline-block px-2 py-1 rounded-lg font-size-sm font-w600 text-danger bg-danger-light">
                                    <i class="fa fa-caret-down mr-1"></i>
                                    2.2%
                                </div>-->
                            </div>
                        </div>
                        <div class="block-content p-1 text-center overflow-hidden">
                            <!-- Sparkline Line: Orders 
                            <span class="js-sparkline" data-type="line"
                                                data-points="[33,29,32,37,38,30,100,28,43,45,26,45,49,39]"
                                                data-width="100%"
                                                data-height="70px"
                                                data-chart-range-min="20"
                                                data-line-color="rgba(210, 108, 122, .4)"
                                                data-fill-color="rgba(210, 108, 122, .15)"
                                                data-spot-color="transparent"
                                                data-min-spot-color="transparent"
                                                data-max-spot-color="transparent"
                                                data-highlight-spot-color="#D26C7A"
                                                data-highlight-line-color="#D26C7A"
                                                data-tooltip-suffix="Orders"></span>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-12">
                    <div class="block block-rounded d-flex flex-column">
                        <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between">
                            <dl class="mb-0">
                                <dt class="font-size-h2 font-w700">
                                <?php 
                                    $nombrePermutationValidees=DataBase::SelectQuery("SELECT COUNT(IdAnnonce) as nombrePermutation FROM annonce WHERE StatutAnnonce ='VA1' ");
                                    echo $nombrePermutationValidees[0]->nombrePermutation;
                                ?>
                                </dt>
                                <dd class="text-muted mb-0">Total Permuations validées</dd>
                            </dl>
                            <div>
                                <!--<div class="d-inline-block px-2 py-1 rounded-lg font-size-sm font-w600 text-success bg-success-light">
                                    <i class="fa fa-caret-up mr-1"></i>
                                    4.2%
                                </div>-->
                            </div>
                        </div>
                        <div class="block-content p-1 text-center oveflow-hidden">
                            <!-- Sparkline Line: Earnings -->
                            <!--<span class="js-sparkline" data-type="line"
                                                data-points="[716,1185,750,1365,956,890,1200,968,1158,1025,920,1190,720,1352]"
                                                data-width="100%"
                                                data-height="70px"
                                                data-chart-range-min="300"
                                                data-line-color="rgba(70,195,123, .4)"
                                                data-fill-color="rgba(70,195,123, .15)"
                                                data-spot-color="transparent"
                                                data-min-spot-color="transparent"
                                                data-max-spot-color="transparent"
                                                data-highlight-spot-color="#46C37B"
                                                data-highlight-line-color="#46C37B"
                                                data-tooltip-prefix="$"></span>-->
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="block block-rounded d-flex flex-column">
                        <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between">
                            <dl class="mb-0">
                                <dt class="font-size-h2 font-w700">
                                <?php 
                                    $nombrePermutationEnCours=DataBase::SelectQuery("SELECT COUNT(IdAnnonce) as nombrePermutation FROM annonce WHERE StatutAnnonce ='VA0' ");
                                    echo $nombrePermutationEnCours[0]->nombrePermutation;
                                ?>
                                </dt>
                                <dd class="text-muted mb-0">Total Permuations En cours</dd>
                            </dl>
                            <div>
                                <!--<div class="d-inline-block px-2 py-1 rounded-lg font-size-sm font-w600 text-success bg-success-light">
                                    <i class="fa fa-caret-up mr-1"></i>
                                    9.3%
                                </div>-->
                            </div>
                        </div>
                        <div class="block-content p-1 text-center oveflow-hidden">
                            <!-- Sparkline Line: New Customers -->
                            <!--<span class="js-sparkline" data-type="line"
                                                data-points="[25,15,36,14,29,19,36,41,28,26,29,33,23,41]"
                                                data-width="100%"
                                                data-height="70px"
                                                data-chart-range-min="0"
                                                data-line-color="rgba(70,195,123, .4)"
                                                data-fill-color="rgba(70,195,123, .15)"
                                                data-spot-color="transparent"
                                                data-min-spot-color="transparent"
                                                data-max-spot-color="transparent"
                                                data-highlight-spot-color="#46C37B"
                                                data-highlight-line-color="#46C37B"
                                                data-tooltip-prefix="$"></span>-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Last 2 Weeks -->
        </div>
    </div>
    <!-- END Statistics -->

   
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $one->get_js('js/plugins/jquery-sparkline/jquery.sparkline.min.js'); ?>
<?php $one->get_js('js/plugins/chart.js/Chart.bundle.min.js'); ?>

<!-- Page JS Code -->
<?php $one->get_js('js/pages/be_pages_dashboard.min.js'); ?>

<!-- Page JS Helpers (jQuery Sparkline Plugins) -->
<script>jQuery(function(){ One.helpers([ 'sparkline']); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
<?php
    $nombrePermutation=DataBase::SelectQuery("SELECT COUNT(IdAnnonce) as nombrePermutation FROM annonce ");
    $Permutations = $nombrePermutation[0]->nombrePermutation;
    $PermutationsRefusees = (($nombrePermutationRefusees[0]->nombrePermutation*10)/$Permutations);
    $PermutationsValidees = (($nombrePermutationValidees[0]->nombrePermutation*10)/$Permutations);
    $PermutationsEnCours = (($nombrePermutationEnCours[0]->nombrePermutation*10)/$Permutations);
?>
<script>
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Permutations', 'En cours de validation', 'Validées', 'Refusées'],
        datasets: [{
            label: '# Demandes de permutation',
            data: [<?php echo $Permutations ?>, <?php echo $PermutationsEnCours ?>, <?php echo $PermutationsValidees ?>, <?php echo $PermutationsRefusees ?>],
            backgroundColor: [
                'rgba(60, 250, 86, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(255, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(60, 250, 86, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>