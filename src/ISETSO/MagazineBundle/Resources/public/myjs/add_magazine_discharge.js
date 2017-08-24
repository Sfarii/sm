//
var max = 1000;
var min = 1;
var id = 0;
// initialisation
$("#edit").hide();
$("#step2").hide();
$("#prev").hide();
$('#submit').hide();

new PNotify({
    title: 'Oh!',
    text: Translator.trans('detail.flash.info', {}, 'messages'),
    hide: false,
    type: 'info',
    icon: 'ti ti-info-alt',
    styling: 'fontawesome'
});

$("#detail_discharge_article_article").removeClass("form-control");
$("#magazine_discharge_toUser").removeClass("form-control");

var opts=$("#source").html(), opts2="<option></option>"+opts;
$("select.populate").each(function() { var e=$(this); e.html(e.hasClass("placeholder")?opts2:opts); });

$("#detail_discharge_article_article").select2({width: '100%'});

listDetail();

// detail form validation
$('#detail_discharge_article_article').select2().on("change", function() {
    if ($(this).val() == ""){
        $("#article_error").text(Translator.trans('formError.notNull', {}, 'messages'));
    }else{
        getAllStock ($(this).val());
        $("#article_error").text("");
    }      
});

$("#detail_discharge_article_quantity").bind('keyup mouseup input', function () {
    if (($(this).val() < max )  && ($(this).val() > min)){
        var sum = getStock () - parseInt($(this).val(), 0);
        $('#stock').val( sum );
        $("#quantity_error").text("");
    }else{
        $("#quantity_error").text(Translator.trans('formError.quantity', {}, 'messages'));
    }
    if ($('#stock').val() < min){
       $('#stock').val(0);
       $(this).val(getStock ());
    }
});

// error field form validation
$("#form .form-group:eq( 1 )").append("<div id='error-1' class='text-danger col-sm-7'></div>");
$("#form .form-group:eq( 2 )").append("<div id='error-2' class='text-danger col-sm-7'></div>");
$("#form .form-group:eq( 3 )").append("<div id='error-3' class='text-danger col-sm-offset-3 col-sm-7'></div>");
// article management form validation

$('#magazine_discharge_date').on('change', function() {
    if ($(this).val() == ""){
        $("#form .form-group:eq( 1 )").addClass("has-error");
        $('#error-1').text(Translator.trans('formError.notNull', {}, 'messages'));
        }else{
        $("#form .form-group:eq( 1 )").removeClass("has-error");
        $('#error-1').text("");
    }     
});

$('#magazine_discharge_toUser').select2({width: '100%'}).on("change", function() {
    if ($(this).val() == ""){
        $("#form .form-group:eq( 2 )").addClass("has-error");
        $('#error-2').text(Translator.trans('formError.notNull', {}, 'messages'));
    }else{
        $("#form .form-group:eq( 2 )").removeClass("has-error");
        $('#error-2').text("");
    }       
});

$('#magazine_discharge_observation').on("input", function() {
    if ($(this).val() == ""){
        $("#form .form-group:eq( 3 )").addClass("has-error");
        $('#error-3').text(Translator.trans('formError.notNull', {}, 'messages'));
    }else{
        $("#form .form-group:eq( 3 )").removeClass("has-error");
        $('#error-3').text("");
    }      
});

// jquery event 
$( "#new" ).click(function() {
    if (valide ())
        addDetail();
        clearForm ();
        
});
$( "#edit" ).click(function() {
    if (valide ())
        updateDetail(id);
        clearForm ();
        
});
$("#annuler").click(function () {
    $("#edit").hide();
    clearForm ();
});

$( "#next" ).click(function() {
    $("#step2").css("visibility", "");
    $(this).hide();
    $("#prev").show();
    $("#basicwizard-head-0").removeClass("stepy-active");
    $("#basicwizard-head-1").addClass("stepy-active");
    $("#step2").show();
    $("#step1").hide();
    if(oTable.fnSettings().fnRecordsTotal() > 0){
        $("#submit").show();
    }
    
});

$( "#prev" ).click(function() {
    $(this).hide();
    $("#next").show();
    $("#basicwizard-head-1").removeClass("stepy-active");
    $("#basicwizard-head-0").addClass("stepy-active");
    $("#step1").show();
    $("#step2").hide();
    $("#submit").hide();
});

$( "#submit" ).click(function() {
    if ( ($("#magazine_discharge_date").val() != "") && ($("#magazine_discharge_observation").val() != "") && ($("#magazine_discharge_toUser").val() != "") ){
        $("#form").submit();
    }else{
        $('#magazine_discharge_date').trigger("change");
        $('#magazine_discharge_observation').trigger("input");
        $('#magazine_discharge_toUser').trigger("change");
    }   
    
});

// function
function updateDetail(val) {
        $.ajax({
        type: 'POST',
        contentType: 'application/json',
        url: Routing.generate('detailDischargeSubMagazine_new', { id:  val }),
        dataType: "json",
        data: formToJSON (),
        success: function(data, textStatus, jqXHR){
            listDetail();
            new PNotify({
                title: 'Oh!',
                text: data.msg,
                type: data.type,
                icon: 'ti ti-info-alt',
                styling: 'fontawesome'
            });
        },
        error: function(jqXHR, textStatus, errorThrown){
            new PNotify({
                title: 'Uh Oh!',
                text: errorThrown,
                type: 'error',
                hide: true,
                icon: 'ti ti-info-alt',
                styling: 'fontawesome'
            });
        }
    });
    
    
}

function deleteDetail(val) {
    $.ajax({
        type: 'DELETE',
        url: Routing.generate('detailDischargeSubMagazine_session_delete', { id:  val }),
        success: function(data, textStatus, jqXHR){
            listDetail();
            new PNotify({
                title: 'Oh!',
                text: data.msg,
                type: data.type,
                icon: 'ti ti-info-alt',
                styling: 'fontawesome'
            });
        },
        error: function(jqXHR, textStatus, errorThrown){
            new PNotify({
                title: 'Uh Oh!',
                text: errorThrown,
                type: 'error',
                hide: true,
                icon: 'ti ti-info-alt',
                styling: 'fontawesome'
            });
        }
    });
}

function addDetail() {
    
        $.ajax({
            type: 'POST',
            contentType: 'application/json',
            url: Routing.generate('detailDischargeSubMagazine_new'),
            dataType: "json",
            data: formToJSON (),
            success: function(data, textStatus, jqXHR){
                listDetail();
                new PNotify({
                    title: 'Oh!',
                    text: data.msg,
                    type: data.type,
                    icon: 'ti ti-info-alt',
                    styling: 'fontawesome'
                });
            },
            error: function(jqXHR, textStatus, errorThrown){
                new PNotify({
                    title: 'Uh Oh!',
                    text: errorThrown,
                    type: 'error',
                    hide: true,
                    icon: 'ti ti-info-alt',
                    styling: 'fontawesome'
                });
            }
        });
    
}


function formToJSON (){
    return JSON.stringify({
                "article"           : $('#detail_discharge_article_article').val(),
                "quantity"          : $('#detail_discharge_article_quantity').val()
        });
}

function listDetail () {
     animation();
    var animationEnd = 0;
        var id = setInterval(frame, 20);
          function frame() {
            if (animationEnd == 100) {
                clearInterval(id);
                getlistDetail();
            } else {
              animationEnd++;
            }
          }
        if (animationEnd == 100){
            
        }
}

function getlistDetail() {
        
        $.ajax({
        url: Routing.generate('detailDischargeSubMagazine_index'),
        type: 'GET',
        dataType: 'json',
        success: function(data){
            $('.cssload-loading').animateCss('bounceOut');
            $('#list').empty();
            $('#dialog').empty();
            $('#list').animateCss('flipInX');
            oTable.fnClearTable();
            oTable.fnDraw();
            $.each(data, function(index, detail) {
                oTable.fnAddData( [
                            detail.article_designation,
                            detail.quantity,
                            '<div class="btn-group">'+
                                '<button value="'+detail.id+'" class="btn btn-info-alt edit"><i class="ti ti-pencil-alt"></i></button>'+
                                '<button data-box="#'+ detail.id +'" class="btn btn-danger-alt mb-control"><i class="ti ti-trash"></i></button>'+
                            '</div>'
                        ] );
                
                $('#dialog').append('<!-- MESSAGE BOX-->'+
                                    '<div class="message-box " data-sound="alert" id="'+ detail.id +'">'+
                                        '<div class="mb-container">'+
                                            '<div class="mb-middle">'+
                                                '<div class="mb-title"><span class="ti ti-trash"></span>'+Translator.trans('detail.delete.name', {}, 'messages')+' ?</div>'+
                                                '<div class="mb-content">'+
                                                    '<p>'+Translator.trans('detail.delete.message', {}, 'messages')+'</p>'+                    
                                                    
                                                '</div>'+
                                                '<div class="mb-footer">'+
                                                    '<div class="pull-right">'+ 
                                                        '<div class="btn-group">'+
                                                            '<button value="'+detail.id+'" class="btn btn-danger btn-lg mb-control-close delete"><i class="icon-trash"></i>'+Translator.trans('messageBox.yes', {}, 'messages')+
                                                            '</button>'+
                                                            '<button class="btn btn-default btn-lg mb-control-close">'+
                                                                Translator.trans('messageBox.no', {}, 'messages')+'</button>'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '<!-- END MESSAGE BOX-->');
                                
                
            });
            messageBox ();

            $(".delete").click(function() {
                deleteDetail($(this).val());
                listDetail();
            });
            $(".edit").click(function() {
                id = $(this).val();
                $.each(data, function(index, detail) {
                    if ( id == detail.id){
                        $('#detail_discharge_article_article').val(detail.id).change();
                        $('#detail_discharge_article_quantity').val(detail.quantity);
                        $('#new').hide();
                        $('#edit').show();
                        return false;
                    }
                });
            });

        }
    });
}

function messageBox () {
    $(".mb-control").on("click",function(){
        var box = $($(this).data("box"));
        if(box.length > 0){
            box.toggleClass("open");
            
            var sound = box.data("sound");
            
            if(sound === 'alert')
                playAudio('alert');
            
            if(sound === 'fail')
                playAudio('fail');
            
        }        
        return false;
    });

    $(".mb-control-close").on("click",function(){
       $(this).parents(".message-box").removeClass("open");
        playAudio('fail');
       return false;
    }); 
    function playAudio(file){
        if(file === 'alert')
            document.getElementById('audio-alert').play();

        if(file === 'fail')
            document.getElementById('audio-fail').play();    
    }
}

function clearForm () {
    $("#detail_discharge_article_article").select2().select2('val','');
    $('#detail_discharge_article_quantity').val("");
    $('#new').show();
    $('#edit').hide();
}

function valide () {
    
    if ( ($("#detail_discharge_article_article").val() != "") && ($('#detail_discharge_article_quantity').val() < max)  &&  ($('#detail_discharge_article_quantity').val() > min)&&  ($('#detail_discharge_article_quantity').val() != "") ){
        
        return true;

    }else{
        $('#magazine_discharge_toUser').trigger( "change" );
        $('#detail_discharge_article_quantity').trigger( "input" );
        return false;
    }
}

function animation () {
    $('#list').empty();
    $('#list').append('<tr>'+
                            '<td colspan="4">'+
                                '<div class="cssload-loading">'+
                                    '<div class="cssload-finger cssload-finger-1">'+
                                        '<div class="cssload-finger-item">'+
                                            '<span></span><i></i>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="cssload-finger cssload-finger-2">'+
                                        '<div class="cssload-finger-item">'+
                                            '<span></span><i></i>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="cssload-finger cssload-finger-3">'+
                                        '<div class="cssload-finger-item">'+
                                            '<span></span><i></i>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="cssload-finger cssload-finger-4">'+
                                        '<div class="cssload-finger-item">'+
                                            '<span></span><i></i>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="cssload-last-finger">'+
                                        '<div class="cssload-last-finger-item"><i></i></div>'+
                                    '</div>'+
                                '</div>'+
                            '</td>'+
                        '</tr>');
}

function isValidDate(s) {
  var bits = s.split('-');
  var d = new Date(bits[2] + '/' + bits[1] + '/' + bits[0]);
  return !!(d && (d.getMonth() + 1) == bits[1] && d.getDate() == Number(bits[0]));
}