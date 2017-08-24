$(document).ready(function(){
    $('#article_durable_subFamily option[value!=""]').remove();
    $('#article_durable_subFamily').attr('disabled', true);
    
    $('#article_durable_family').on('change', function() {
        if (this.value == ""){
             $('#article_durable_subFamily').attr('disabled', true);
             $('#article_durable_subFamily option[value!=""]').remove();
        }else{
            $.ajax({
                url: Routing.generate('Sub_family_index', { id: this.value }),
                type: 'POST',
                dataType: 'json',
                success: function(json){
                    $('#article_durable_subFamily').attr('disabled', false);
                    $('#article_durable_subFamily option[value!=""]').remove();
                    $.each(json, function(index, value) {
                        $('#article_durable_subFamily').append('<option value="'+ value.id +'">'+ value.designation +'</option>');
                    });
                }
            });
        
        }
    });

    $('#article_durable_subFamily option[value!=""]').remove();
    $('#article_durable_subFamily').attr('disabled', true);
    
    $('#article_durable_typelocal').on('change', function() {
        if (this.value == ""){
             $('#article_durable_local').attr('disabled', true);
             $('#article_durable_local option[value!=""]').remove();
        }else{
            $.ajax({
                url: Routing.generate('json_local_index', { id: this.value }),
                type: 'POST',
                dataType: 'json',
                success: function(json){
                    $('#article_durable_local').attr('disabled', false);
                    $('#article_durable_local option[value!=""]').remove();
                    $.each(json, function(index, value) {
                        $('#article_durable_local').append('<option value="'+ value.id +'">'+ value.designation +'</option>');
                    });
                }
            });
        
        }
    });


});