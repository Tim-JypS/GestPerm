<?php
/**
 * backend/config.php
 *
 * Author: pixelcave
 *
 * Backend pages configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$one->inc_side_overlay           = 'inc/backend/views/inc_side_overlay.php';
$one->inc_sidebar                = 'inc/backend/views/inc_sidebar.php';
$one->inc_header                 = 'inc/backend/views/inc_header.php';
$one->inc_footer                 = 'inc/backend/views/inc_footer.php';


// **************************************************************************************************
// MAIN CONTENT
// **************************************************************************************************

$one->l_m_content                = 'narrow';
require("../inc/config.php");


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************
if($TypeUser==1)
{
    $one->main_nav                   = array(
        array(
            'name'  => 'Historique validation',
            'icon'  => 'si si-note',
            'url'   => 'historique.php'
        ),
        array(
            'name'  => 'Profil',
            'icon'  => 'si si-note',
            'url'   => 'profile.php'
        )
    );
}elseif($TypeUser==2 || $TypeUser==3)
{
    $one->main_nav                   = array(
        array(
            'name'  => 'Validation permutation',
            'icon'  => 'si si-note',
            'url'   => 'validation.php'
        ),
        array(
            'name'  => 'Historique validation',
            'icon'  => 'si si-note',
            'url'   => 'historique.php'
        ),
        array(
            'name'  => 'Profil',
            'icon'  => 'si si-note',
            'url'   => 'profile.php'
        )
    );
}
else
{
$one->main_nav                   = array(
    array(
        'name'  => 'Accueil',
        'icon'  => 'si si-note',
        'url'   => 'dashboard.php'
    ),
    array(
        'name'  => 'Direction régionale',
        'icon'  => 'si si-note',
        'url'   => 'dr.php'
    ),
    array(
        'name'  => 'Inspection',
        'icon'  => 'si si-note',
        'url'   => 'inspection.php'
    ),
    array(
        'name'  => 'Etablissement',
        'icon'  => 'si si-note',
        'url'   => 'etablissement.php'
    ),
    array(
        'name'  => 'Zone géographique',
        'icon'  => 'si si-note',
        'url'   => 'zone.php'
    ),
    array(
        'name'  => 'Fonction',
        'icon'  => 'si si-note',
        'url'   => 'fonction.php'
    ),
    array(
        'name'  => 'Emploi',
        'icon'  => 'si si-note',
        'url'   => 'emploi.php'
    ),
    array(
        'name'  => 'Validation permutation',
        'icon'  => 'si si-note',
        'url'   => 'validation.php'
    ),
    array(
        'name'  => 'Historique validation',
        'icon'  => 'si si-note',
        'url'   => 'historique.php'
    ),
    array(
        'name'  => 'Profil',
        'icon'  => 'si si-note',
        'url'   => 'profile.php'
    ),
    array(
        'name'  => 'Paramètre',
        'icon'  => 'si si-note',
        'url'   => 'setting.php'
    )
);
}