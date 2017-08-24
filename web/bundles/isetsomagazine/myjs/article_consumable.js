$(document).ready(function(){
    $('#article_consumable_subFamily option[value!=""]').remove();
    $('#article_consumable_subFamily').attr('disabled', true);
    $('#article_consumable_family').on('change', function() {
        if (this.value == ""){
             $('#article_consumable_subFamily').attr('disabled', true);
             $('#article_consumable_subFamily option[value!=""]').remove();
        }else{
            $.ajax({
                url: Routing.generate('Sub_family_index', { id: this.value }),
                type: 'POST',
                dataType: 'json',
                success: function(json){
                    $('#article_consumable_subFamily').attr('disabled', false);
                    $('#article_consumable_subFamily option[value!=""]').remove();
                    $.each(json, function(index, value) {
                        $('#article_consumable_subFamily').append('<option value="'+ value.id +'">'+ value.designation +'</option>');
                    });
                }
            });
        
        }
    });

});