$('#save').click(function()
{
    let LibelleEmploi=$('#LibelleEmploi').val();
    /*let lib=$('#lib').val();
    let loc=$('#val-select2').val();
    let inspection=$('#val-select2Inspec').val();*/
    $.get('inc/logical/Crud/crudemploi/addemploi.php',{LibelleEmploi:LibelleEmploi},function()
    /*$.get('inc/logical/Crud/crudfonction/addfonction.php',{type:type,libelle:lib,localite:loc,inspect:inspection},function()*/
    {
        window.location.reload();
    })
})


$('.editemploi').click(function()
{
    let id=($(this).data('idemploi'));
    let libelle=($(this).data('libelleemploi'));
    /*let inspect=($(this).data('inspection'));
    let libelle=($(this).data('lib'));
    let localite=($(this).data('loc'));*/
    $('#idemploi').val(id);
    /*$('#NomFonction').val(nomfonc).change();*/
    $('#LibelleModif').val(libelle);
    /*$('#val-select2InspecModif').val(inspect).change();
    $('#val-select2Modif').val(localite).change();*/
})

$('#saveModif').click(function()
{
    let id=$('#idemploi').val();
    let libelle=$('#LibelleModif').val();
    /*let lib=$('#libModif').val();
    let inspection=$('#val-select2InspecModif').val();
    let loc=$('#val-select2Modif').val();*/
    $.get('inc/logical/Crud/crudemploi/modifemploi.php',{idemploi:id,libelle:libelle},function()
    {
        window.location.reload();
    })
})


$('.todelete').click(function()
{
    let idemploi=($(this).data('idemploi'));
    $('#idtodelete').val(idemploi);
})

$('#confirmDelete').click(function()
{
    // let ideco=$('#id').val();
    // console.log(ideco);
    let idemploi=$('#idtodelete').val();
    $.get('inc/logical/Crud/crudemploi/delemploi.php',{id:idemploi},function()
    {
        // window.location.reload();
    })
})
$('.deleted').click(function()
{
    window.location.reload();
})