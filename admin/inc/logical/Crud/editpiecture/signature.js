
$("#idsignature").change(function() {
    
    var formData = new FormData();
    var file = $(this)[0].files[0];
    formData.append("file", file);
    //formData.append("type", "avatar");

    alphaProfilNoDone = true;
 
    $.ajax({
        url: 'inc/logical/Crud/editpiecture/modifsignature.php',
        type: 'post',
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
            console.log(data)
            if (data=='invalid') {
                alert("Une erreur");
                loader.hide();
                alphaProfilNoDone = false;
                
            }else{
                alert('sucess');
                window.location.reload();
            } 
        }
    });

});
