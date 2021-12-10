$('#save').click(function()
{
    let NomFonction=$('#NomFonction').val();
    /*let lib=$('#lib').val();
    let loc=$('#val-select2').val();
    let inspection=$('#val-select2Inspec').val();*/
    $.get('inc/logical/Crud/crudfonction/addfonction.php',{NomFonction:NomFonction},function()
    /*$.get('inc/logical/Crud/crudfonction/addfonction.php',{type:type,libelle:lib,localite:loc,inspect:inspection},function()*/
    {
        window.location.reload();
    })
})


$('.editfonction').click(function()
{
    let id=($(this).data('idfonction'));
    let nomfonc=($(this).data('nomfonction'));
    /*let inspect=($(this).data('inspection'));
    let libelle=($(this).data('lib'));
    let localite=($(this).data('loc'));*/
    $('#idfonction').val(id);
    /*$('#NomFonction').val(nomfonc).change();*/
    $('#ModifNomFonction').val(nomfonc);
    /*$('#val-select2InspecModif').val(inspect).change();
    $('#val-select2Modif').val(localite).change();*/
})

$('#saveModif').click(function()
{
    let id=$('#idfonction').val();
    let nomfonc=$('#ModifNomFonction').val();
    /*let lib=$('#libModif').val();
    let inspection=$('#val-select2InspecModif').val();
    let loc=$('#val-select2Modif').val();*/
    $.get('inc/logical/Crud/crudfonction/modiffonction.php',{idfonction:id,NomFonction:nomfonc},function()
    {
        window.location.reload();
    })
})


$('.todelete').click(function()
{
    let idfonction=($(this).data('idfonction'));
    $('#idtodelete').val(idfonction);
})

$('#confirmDelete').click(function()
{
    // let ideco=$('#id').val();
    // console.log(ideco);
    let idfonction=$('#idtodelete').val();
    $.get('inc/logical/Crud/crudfonction/delfonction.php',{id:idfonction},function()
    {
        // window.location.reload();
    })
})
$('.deleted').click(function()
{
    window.location.reload();
})