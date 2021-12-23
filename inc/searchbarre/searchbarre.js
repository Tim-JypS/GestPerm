$("#srch-term").keydown(function(){
    $("#srch-term").css("color", "red");
    });
$("#srch-term").keyup(function(){
    $("#srch-term").css("color", "blue");
    let mot = $(this).val();
    if(mot!=""){
        $.ajax({
            type: 'post',
            url: 'inc/searchbarre/searchbarre.php',
            data: {
                mot:mot,
            },
            success: function (response) {
               $('#res').html(response);
            }
          });
         }

         /*else
         {
          $('#res').html("Entrez le nom de l'utilisateur");
         }*/

    
});

