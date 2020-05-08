$( document ).ready(function() {
    console.log( "ready!" );

    $.ajax({
        url: "api.php",
        success: function (data) {

            var target = $("#names");
            for (var key in data) {
                var name = data[key];
                target.append(name + "<br>");
                
            }
            console.log(data);
            
            
        },
        error: function(err){
            console.error(err);
            
        }

    });
});