$('#save').click(function()
{
    let nominspection=$('#NomInspection').val();
    let tel=$('#TelInspection').val();
    let localite=$('#CommuneInspection').val();
    $.get('inc/logical/Crud/crudinspection/addinspection.php',{nominspection:nominspection,tel:tel,localite:localite},function()
    /*$.get('inc/logical/Crud/crudfonction/addfonction.php',{type:type,libelle:lib,localite:loc,inspect:inspection},function()*/
    {
        window.location.reload();
    })
})


$('.editinspection').click(function()
{
    let id=($(this).data('idinpection'));
    let nominsp=($(this).data('nominspection'));
    let telinsp=($(this).data('telinspection'));
    let locinsp=($(this).data('locinspection'));
    $('#IdInspection').val(id);
    $('#modifNomInspection').val(nominsp);
    $('#modifTelInspection').val(telinsp);
    $('#modifCommuneInspection').val(locinsp).change();
    /*$('#LibelleModif').val(libelle);
    $('#val-select2InspecModif').val(inspect).change();
    $('#val-select2Modif').val(localite).change();*/
})

$('#saveModif').click(function()
{
    let id=$('#IdInspection').val();
    let nominsp=$('#modifNomInspection').val();
    let telinspec=$('#modifTelInspection').val();
    let locinsp=$('#modifCommuneInspection').val();
    $.get('inc/logical/Crud/crudinspection/modifinspection.php',{idinspec:id,nominsp:nominsp,telinspec:telinspec,locinsp:locinsp},function()
    {
        window.location.reload();
    })
})


$('.todelete').click(function()
{
    let idinspection=($(this).data('idinpection'));
    $('#idtodelete').val(idinspection);
})

$('#confirmDelete').click(function()
{
    // let ideco=$('#id').val();
    // console.log(ideco);
    let idinspection=$('#idtodelete').val();
    $.get('inc/logical/Crud/crudinspection/delinspection.php',{id:idinspection},function()
    {
        // window.location.reload();
    })
})
$('.deleted').click(function()
{
    window.location.reload();
})