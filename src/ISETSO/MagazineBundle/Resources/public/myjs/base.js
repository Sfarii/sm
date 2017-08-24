
var stock = 0;
function getAllStock (val) {
    if (val == ""){
        $("#new").attr('disabled', "disabled");
        $("#edit").attr('disabled', "disabled");
    }else{
        $("#load").addClass("fa-spin");
        $.ajax({
            url: Routing.generate('stock_json_show', { id:  val}),
            type: 'POST',
            dataType: 'json',
            success: function(json){
                if (json == 0) {
                    $("#new").attr('disabled', "disabled");
                    $("#edit").attr('disabled', "disabled");
                    $('#validate-form').animateCss('shake');
                }else{
                    $("#new").attr('disabled', false);
                    $("#edit").attr('disabled', false);

                }
                stock = json;
                $('#stock').val(json);
                $("#load").removeClass("fa-spin");
                
            }
        });
    
    }
}

function getStock () {
    return stock;
}

function clearSessions () {
    $.ajax({
        url: Routing.generate('clear_session_json'),
        type: 'GET',
        dataType: 'json',
        success: function(json){
            return true;
        }
    });
}