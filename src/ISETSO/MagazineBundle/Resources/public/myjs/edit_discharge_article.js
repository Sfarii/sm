 $("#new").show();
$("#edit").hide();
var url = '{{ app.request.uri }}';
if (url.substring(url.lastIndexOf('/') + 1) != 'edit'){
    $("#new").hide();
    $("#edit").show();
}
$('.date').datepicker({
    todayHighlight: true,
    startDate: "-3d",
    endDate: "+3d",
    format: "yyyy-mm-dd",
    showMeridian: true
});
var stock = 0;
getAllStock ($('#detail_discharge_article_article').val());
$("#detail_discharge_article_quantity").val(0);
$('#detail_discharge_article_article').on('change', function() {
    getAllStock (this.value);
});
$("#detail_discharge_article_quantity").bind('keyup mouseup', function () {
    $('#stock').val( stock - this.value );
    if ($('#stock').val() < 0){
       $('#stock').val(0);
       $(this).val(stock);
    }
});

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
                $('#stock').val(stock);
                $("#load").removeClass("fa-spin");
                
            }
        });
    
    }
    
}