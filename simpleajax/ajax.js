$( document ).ready(function() {
    $("#selection" ).change(function() {
    var data = $(".list").val();
        $.ajax({
            type: "POST",
            url: "select.php",
            data: { id: data }
            })
            .done(function( msg ) {
             $( "#result" ).html(msg);
        }); 
    });  
});