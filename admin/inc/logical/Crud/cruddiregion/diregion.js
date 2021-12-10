$('#save').click(function()
{
    let nomdr=$('#NomDirectionRegionale').val();
    let tel=$('#TelDirectionRegionale').val();
    let email=$('#EmailDirectionRegionale').val();
    let localite=$('#CommuneDirectionRegionale').val();
    $.get('inc/logical/Crud/cruddiregion/adddiregion.php',{nomdr:nomdr,tel:tel,email:email,localite:localite},function()
    /*$.get('inc/logical/Crud/crudfonction/addfonction.php',{type:type,libelle:lib,localite:loc,inspect:inspection},function()*/
    {
        window.location.reload();
    })
})


$('.editdiregional').click(function()
{
    let id=($(this).data('iddiregional'));
    let nomdr=($(this).data('nomdregional'));
    let teldr=($(this).data('telregional'));
    let emaildr=($(this).data('emailregional'));
    let locdr=($(this).data('locregional'));
    $('#IdDirectionRegionale').val(id);
    $('#modifNomDirectionRegionale').val(nomdr);
    $('#modifTelDirectionRegionale').val(teldr);
    $('#modifEmailDirectionRegionale').val(emaildr);
    $('#modifCommuneDirectionRegionale').val(locdr).change();
    /*$('#LibelleModif').val(libelle);
    $('#val-select2InspecModif').val(inspect).change();
    $('#val-select2Modif').val(localite).change();*/
})

$('#saveModif').click(function()
{
    let id=$('#IdDirectionRegionale').val();
    let nomdr=$('#modifNomDirectionRegionale').val();
    let teldr=$('#modifTelDirectionRegionale').val();
    let emaildr=$('#modifEmailDirectionRegionale').val();
    let locdr=$('#modifCommuneDirectionRegionale').val();
    $.get('inc/logical/Crud/cruddiregion/modifdiregion.php',{idregional:id,nomdr:nomdr,teldr:teldr,emaildr:emaildr,locdr:locdr},function()
    {
        window.location.reload();
    })
})


$('.todelete').click(function()
{
    let iddiregional=($(this).data('iddiregional'));
    $('#idtodelete').val(iddiregional);
})

$('#confirmDelete').click(function()
{
    // let ideco=$('#id').val();
    // console.log(ideco);
    let iddiregional=$('#idtodelete').val();
    $.get('inc/logical/Crud/cruddiregion/deldiregion.php',{id:iddiregional},function()
    {
        // window.location.reload();
    })
})
$('.deleted').click(function()
{
    window.location.reload();
})