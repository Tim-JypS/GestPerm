/*$('#saveModif').click(function()
{
    let id=$('#IdInspection').val();
    let nominsp=$('#modifNomInspection').val();
    let telinspec=$('#modifTelInspection').val();
    let locinsp=$('#modifCommuneInspection').val();
    $.get('inc/logical/Crud/crudinspection/modifinspection.php',{idinspec:id,nominsp:nominsp,telinspec:telinspec,locinsp:locinsp},function()
    {
        window.location.reload();
    })
})*/

$("#validation").change(function() {
    console.log();
    let value=$(this.checked).length;
    $.get('inc/logical/Crud/crudsetting/modifsetting.php',{value:value},function()
    {
        //window.location.reload();
    })
});