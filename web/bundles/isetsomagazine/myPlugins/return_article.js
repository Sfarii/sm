/*

Copyright 2016 Rami Sfari

Version: 1.0 Timestamp: jeu.  10 mai 2016 14:01:29

*/

(function ($) {
    $.fn.returnArticle = function (options) {

        // get id de retour article
        if (jQuery.isNumeric($(location).attr('href').substring($(location).attr('href').lastIndexOf('/') + 1))){
            var return_id_edit = $(location).attr('href').substring($(location).attr('href').lastIndexOf('/') + 1);
        }

        // get les option
        var opts = $.extend( {}, $.fn.returnArticle.defaults, options );
        // int var
        var max = 1000;
        var min = 0;
        var id = 0;
        var trigger = true;


        // initialisation
        $("#edit").hide();
        $('#new').hide();
        $('#detailForm').hide();
        $('#newDurable').hide();
        $('#edit').hide();
        $("#step2").hide();
        $("#prev").hide();
        $('#submit').hide();

        

        oTable.api().column( 0 ).visible( false );
        oTable.api().column( 3 ).visible( false );
        oTable.api().column( 4 ).visible( false );

        $("select").removeClass("form-control");

        var opts1=$("#source").html(), opts2="<option></option>"+opts1;
        $("select.populate").each(function() { var e=$(this); e.html(e.hasClass("placeholder")?opts2:opts1); });


        $("#article").select2();

        new PNotify({
            title: 'Oh!',
            text: Translator.trans('detail.flash.info', {}, 'messages'),
            hide: false,
            type: 'info',
            icon: 'ti ti-info-alt',
            styling: 'fontawesome'
        });


        $('.return').click(function () {
            
            setForm (this);
            $("#article").attr('multiple' , "multiple");
            $("#article").select2({
              placeholder: Translator.trans('magazine.field.inventoryNumber', {}, 'messages')
            });
            $("#article").attr('disabled',false);

            $("#return_quantity").attr('disabled',true);
            $("#return_quantity").val(0);
            $("#return_quantity").parent().addClass("has-error");

            $("#annimation").hide();
            $('#detailForm').animateCss('bounceIn');
            $('#detailForm').show();
            $('#new').hide();
            $('#newDurable').show();
            $('#edit').hide();
        });

        $('.returnAndEdit').click(function () {
            setForm (this);
            $("#article").attr('multiple' , false);
            $("#article").select2({
              placeholder: Translator.trans('magazine.field.inventoryNumber', {}, 'messages')
            });
            $("#article").attr('disabled',true);
            $("#annimation").hide();
            $('#detailForm').animateCss('bounceIn');
            $('#detailForm').show();
            $("#return_quantity").attr('disabled',false);
            $("#new").attr('disabled',false);
            $('#new').show();
            $('#newDurable').hide();
            $('#edit').hide();
        });


        var tableau = $('.DataTable').DataTable({
                "language": {
                "sProcessing":     "<i class='fa fa-refresh fa-spin fa-stack-2x' style='margin-top: 30px;margin-bottom: 30px;'></i>",
                        "sLengthMenu":     "Afficher _MENU_ &eacute;l&eacute;ments",
                        "sInfo":           "Affichage de _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                        "sInfoEmpty":      "Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment",
                        "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                        "sInfoPostFix":    "",
                        "sLoadingRecords": "Chargement en cours...",
                        "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
                        "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
                        "oPaginate": {
                            "sFirst":      "Premier",
                            "sPrevious":   "<i class='fa fa-angle-lef'></i>",
                            "sNext":       "<i class='fa fa-angle-rigth'></i>",
                            "sLast":       "Dernier"
                        },
                        "oAria": {
                            "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                            "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
                        }
                },'iDisplayLength': 3,
                "bDestroy": true,
            });

        $('.dataTables_length').hide();
        

        listDetail(); 

        $("#article").parent().append("<div id='error' class='text-danger col-sm-10'></div>");
        $('#article').select2().on("change", function() {
            
            if (jQuery.isEmptyObject($(this).val())){
                $("#error").text(Translator.trans('formError.notNull', {}, 'messages'));
                $("#return_quantity").val(0);
                $("#return_quantity").parent().removeClass("has-success");
                $("#return_quantity").parent().addClass("has-error");
            }else{
                $("#error").text("");
                $("#return_quantity").parent().removeClass("has-error");
                $("#return_quantity").parent().addClass("has-success");
                $("#return_quantity").val($(this).val().length);
            }      
        }); 


        $("#return_quantity").bind('keyup mouseup input', function () {

            if (( parseInt(this.value) < parseInt($("#quantity").val())+1)  &&  ( parseInt(this.value) > min)){
                 $('#new').attr('disabled',false);
            }else{
                $('form').animateCss('shake');
                $('#new').attr('disabled',true);
                $(this).val(min);
            }
            
        });

        // error field form validation
        $('#return_article_'+opts.type+'_date').parent().append("<div id='error-1' class='text-danger col-sm-7'></div>");
        $('#return_article_'+opts.type+'_observation').parent().append("<div id='error-2' class='text-danger col-sm-7'></div>");
        // article management form validation

        $('#return_article_'+opts.type+'_date').on('change', function() {
            if ($(this).val() == ""){
                $(this).parent().addClass("has-error");
                $('#error-1').text(Translator.trans('formError.notNull', {}, 'messages'));
                }else{
                $(this).parent().removeClass("has-error");
                $('#error-1').text("");
            }     
        });
        $('#return_article_'+opts.type+'_observation').on("input", function() {
            if ($(this).val() == ""){
                $(this).parent().addClass("has-error");
                $('#error-2').text(Translator.trans('formError.notNull', {}, 'messages'));
            }else{
                $(this).parent().removeClass("has-error");
                $('#error-2').text("");
            }      
        });

        if (opts.type == "to_sub_store"){
            $('#return_article_to_sub_store_toSubStore').parent().append("<div id='error-3' class='text-danger col-sm-7'></div>");
        
            $('#return_article_to_sub_store_toSubStore').select2().on("change", function() {
                if ($(this).val() == ""){
                    $(this).parent().addClass("has-error");
                    $('#error-3').text(Translator.trans('formError.notNull', {}, 'messages'));
                }else{
                    $(this).parent().removeClass("has-error");
                    $('#error-3').text("");
                }      
            });
        }

        // jquery event 
        $( "#new" ).click(function() {
            if (valide ()){
                if (opts.action == "new")
                    addDetail(JSON.stringify({
                        "supportingDocument": $("#article").val(),
                        "quantity"          : $("#return_quantity").val(),
                    })
                );
                else
                    addEditedDetail(JSON.stringify({
                        "supportingDocument": $("#article").val(),
                        "quantity"          : $("#return_quantity").val(),
                    })
                );
                clearForm (); 
            }   
        });

        $("#newDurable").click(function() {
            if (valideDurable ()){
                if (opts.action == "new")
                addDetail(JSON.stringify({
                            "supportingDocument": $("#article").val(),
                        })
                );

                else
                addEditedDetail(JSON.stringify({
                            "supportingDocument": $("#article").val(),
                        })
                );

                clearForm (); 
            }
        });
        $( "#edit" ).click(function() {
            
            if (valide ()){
                if (opts.action == "new")
                    updateDetail(id);
                else
                    updateEditedDetail(id);

                clearForm ();
            }
                
                
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
            
            
        });

        $( "#prev" ).click(function() {
            $(this).hide();
            $("#next").show();
            $("#basicwizard-head-1").removeClass("stepy-active");
            $("#basicwizard-head-0").addClass("stepy-active");
            $("#step1").show();
            $("#step2").hide();
            if(oTable.fnSettings().fnRecordsTotal() > 0){
                $("#submit").show();
            }
            
        });

        $( "#submit" ).click(function() {
            trigger = false;
            $( "#prev" ).trigger('click');
            if ( ($('#return_article_'+opts.type+'_date').val() != "") && ($('#return_article_'+opts.type+'_observation').val() != "") ){
                if (opts.type == "to_sub_store"){
                    if ($('#return_article_to_sub_store_toSubStore').val() != "")
                        $("#form").submit();
                    else
                        $('#return_article_to_sub_store_toSubStore').trigger( "change" );
                }else{
                    $("#form").submit();
                }
            }else{
                $('#return_article_'+opts.type+'_date').trigger( "change" );
                $('#return_article_'+opts.type+'_observation').trigger( "input" );
            }   
            
        });

        // function
        function setForm (val) {
            var idSuppDoc = $(val).val().split(',');
            var inventoryNumber = $(val).attr( "data-supportingDocument" ).split(',');
            var data = [];
            $.each(idSuppDoc, function(index, id) {
                item = {}
                item ["id"] = id;
                item ["text"] = inventoryNumber[index];

                data.push(item);
            });

            $('#article option[value!=""]').remove();
            
            $("#article").select2({
              placeholder: Translator.trans('magazine.field.inventoryNumber', {}, 'messages')
            });
            $.each(data, function(index, value) {
                $('#article').append('<option value="'+ value.id +'">'+ value.text +'</option>');
            });

            $("#articleDesignation").val($(val).attr( "data-article" ));
            $("#quantity").val($(val).attr( "data-qte" ));
        }
        function updateDetail(val) {
                $.ajax({
                type: 'POST',
                contentType: 'application/json',
                url: Routing.generate(opts.addEditUrl, { id:  val }),
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

        function addDetail(data) {

                $.ajax({
                    type: 'POST',
                    contentType: 'application/json',
                    url: Routing.generate( opts.addEditUrl),
                    dataType: "json",
                    data: data,
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

        // function
        function updateEditedDetail(val) {
                $.ajax({
                type: 'POST',
                contentType: 'application/json',
                url: Routing.generate(opts.addEditUrl, { id:  return_id_edit , idDetail: val}),
                dataType: "json",
                data: edit_formToJSON (),
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

        function addEditedDetail(data) {

                $.ajax({
                    type: 'POST',
                    contentType: 'application/json',
                    url: Routing.generate( opts.addEditUrl, { id:  return_id_edit }),
                    dataType: "json",
                    data: data,
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
                url: Routing.generate(opts.deleteUrl, { id:  val }),
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

        $('.toggle-vis').on( 'click', function (e) {
            e.preventDefault();
            // Get the column API object
            var column = oTable.api().column( $(this).attr('data-column') );
            // Toggle the visibility
            
            if (column.visible())
                $(this).addClass("active");
            else
                $(this).removeClass("active");

            column.visible( ! column.visible() );
        } );

        function formToJSON (){
            return JSON.stringify({
                        "supportingDocument": $('#article').val(),
                        "quantity"          : $('#return_quantity').val()
                    });
        }

        function edit_formToJSON (){
            return JSON.stringify({
                        "id"                :id,
                        "supportingDocument": $('#article').val(),
                        "quantity"          : $('#return_quantity').val()
                    });
        }

        function listDetail () {
            animation();
            var animationEnd = 0;
            var id = setInterval(frame, 20);
            function frame() {
                if (animationEnd == 100) {
                    clearInterval(id);
                    if (opts.action == "new")
                    getlistDetail();
                    else
                    getlistEditedDetail();
                } else {
                  animationEnd++;
                }
            }
        }

        function getlistDetail() {
                
                $.ajax({
                url: Routing.generate(opts.indexUrl),
                type: 'GET',
                dataType: 'json',
                success: function(data){
                    $('.cssload-loading').animateCss('bounceOut');
                    $('#list').empty();
                    $('#dialog').empty();
                    $('#list').animateCss('flipInX');
                    oTable.fnClearTable();
                    oTable.fnLengthChange( 100000 );
                    oTable.fnDraw();
                    $.each(data, function(index, detail) {
                        if (detail.classType == "ArticleDurable"){
                            oTable.fnAddData( [
                                detail.inventoryNumber,
                                detail.article_designation,
                                detail.quantity,
                                detail.family,
                                detail.subFamily,
                                '<div class="btn-group">'+
                                    '<button data-box="'+ detail.supportingDocument_id +'" class="btn btn-danger-alt mb-parent"><i class="ti ti-trash"></i></button>'+
                                '</div>'
                            ] );

                        }else{
                            oTable.fnAddData( [
                                detail.inventoryNumber,
                                detail.article_designation,
                                detail.quantity,
                                detail.family,
                                detail.subFamily,
                                '<div class="btn-group">'+
                                    '<button value="'+detail.supportingDocument_id+'" class="btn btn-info-alt edit"><i class="ti ti-pencil-alt"></i></button>'+
                                    '<button data-box="'+ detail.supportingDocument_id +'" class="btn btn-danger-alt mb-parent"><i class="ti ti-trash"></i></button>'+
                                '</div>'
                            ] );
                        }             
                        
                    });
                    $(".mb-parent").on("click",function(){

                        $('#dialog').empty().append('<!-- MESSAGE BOX-->'+
                                            '<div class="message-box open" data-sound="alert">'+
                                                '<div class="mb-container">'+
                                                    '<div class="mb-middle">'+
                                                        '<div class="mb-title"><span class="ti ti-trash"></span>'+Translator.trans('detail.delete.name', {}, 'messages')+' ?</div>'+
                                                        '<div class="mb-content">'+
                                                            '<p>'+Translator.trans('detail.delete.message', {}, 'messages')+'</p>'+                    
                                                            
                                                        '</div>'+
                                                        '<div class="mb-footer">'+
                                                            '<div class="pull-right">'+ 
                                                                '<div class="btn-group">'+
                                                                    '<button value="'+$(this).data("box")+'" class="btn btn-danger btn-lg delete"><i class="icon-trash"></i>'+Translator.trans('messageBox.yes', {}, 'messages')+
                                                                    '</button>'+
                                                                    '<button class="btn btn-default btn-lg mb-parent-close">'+
                                                                        Translator.trans('messageBox.no', {}, 'messages')+'</button>'+
                                                                '</div>'+
                                                            '</div>'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                        '<!-- END MESSAGE BOX-->');
                        
                                playAudio('alert');

                        $(".mb-parent-close").on("click",function(){
                           $(this).parents(".message-box").removeClass("open");
                            playAudio('fail');
                           return false;
                        }); 

                        $(".delete").click(function() {
                            $(this).parents(".message-box").removeClass("open");
                            deleteDetail($(this).val());
                            listDetail();
                        });
                    });

                    
                    $(".edit").click(function() {
                        id = $(this).val();
                        var detail = $.grep(data, function (element) {
                            return element.supportingDocument_id == id;
                        });
                        detail = detail[0];
                        
                        $('#article').append('<option value="'+ detail.supportingDocument_id +'">'+ detail.inventoryNumber +'</option>');
                        $("#article").attr('multiple' , false);
                        $("#article").select2({
                          placeholder: Translator.trans('magazine.field.inventoryNumber', {}, 'messages')
                        });
                        $("#article").attr('disabled',true);
                        $('#articleDesignation').val(detail.article_designation);
                        $('#return_quantity').val(detail.quantity);
                        $("#quantity").val($('#'+this.value+' td:eq( 2 )').text());
                        $("#article").select2().select2('val',detail.supportingDocument_id);
                        $("#annimation").hide();
                        $('#detailForm').animateCss('bounceIn');
                        $('#detailForm').show();
                        $('#new').hide();
                        $('#edit').show();
                        return false;
                            
                    });

                    oTable.fnLengthChange( 3 );
                    oTable.fnDraw();

                }
            });
        }

        function getlistEditedDetail() {
                
                $.ajax({
                url: Routing.generate(opts.indexUrl , {id: return_id_edit}),
                type: 'GET',
                dataType: 'json',
                success: function(data){
                    $('.cssload-loading').animateCss('bounceOut');
                    $('#list').empty();
                    $('#dialog').empty();
                    $('#list').animateCss('flipInX');
                    oTable.fnClearTable();
                    oTable.fnLengthChange( 100000 );
                    oTable.fnDraw();
                    $.each(data, function(index, detail) {
                        if (detail.classType == "ArticleDurable"){
                            oTable.fnAddData( [
                                detail.inventoryNumber,
                                detail.article_designation,
                                detail.quantity,
                                detail.family,
                                detail.subFamily,
                                '<div class="btn-group">'+
                                    '<button data-box="'+ detail.id +'" class="btn btn-danger-alt mb-parent"><i class="ti ti-trash"></i></button>'+
                                '</div>'
                            ] );

                        }else{
                            oTable.fnAddData( [
                                detail.inventoryNumber,
                                detail.article_designation,
                                detail.quantity,
                                detail.family,
                                detail.subFamily,
                                '<div class="btn-group">'+
                                    '<button value="'+detail.id+'" class="btn btn-info-alt edit"><i class="ti ti-pencil-alt"></i></button>'+
                                    '<button data-box="'+ detail.id +'" class="btn btn-danger-alt mb-parent"><i class="ti ti-trash"></i></button>'+
                                '</div>'
                            ] );
                        }             
                        
                    });
                    $(".mb-parent").on("click",function(){

                        $('#dialog').empty().append('<!-- MESSAGE BOX-->'+
                                            '<div class="message-box open" data-sound="alert">'+
                                                '<div class="mb-container">'+
                                                    '<div class="mb-middle">'+
                                                        '<div class="mb-title"><span class="ti ti-trash"></span>'+Translator.trans('detail.delete.name', {}, 'messages')+' ?</div>'+
                                                        '<div class="mb-content">'+
                                                            '<p>'+Translator.trans('detail.delete.message', {}, 'messages')+'</p>'+                    
                                                            
                                                        '</div>'+
                                                        '<div class="mb-footer">'+
                                                            '<div class="pull-right">'+ 
                                                                '<div class="btn-group">'+
                                                                    '<button value="'+$(this).data("box")+'" class="btn btn-danger btn-lg mb-parent-close delete"><i class="icon-trash"></i>'+Translator.trans('messageBox.yes', {}, 'messages')+
                                                                    '</button>'+
                                                                    '<button class="btn btn-default btn-lg mb-parent-close">'+
                                                                        Translator.trans('messageBox.no', {}, 'messages')+'</button>'+
                                                                '</div>'+
                                                            '</div>'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                        '<!-- END MESSAGE BOX-->');
                        
                                playAudio('alert');

                        $(".mb-parent-close").on("click",function(){
                           $(this).parents(".message-box").removeClass("open");
                            playAudio('fail');
                           return false;
                        }); 

                        $(".delete").click(function() {
                            deleteDetail($(this).val());
                            listDetail();
                        });
                    });

                    
                    $(".edit").click(function() {
                        id = $(this).val();
                        var detail = $.grep(data, function (element) {
                            return element.id == id;
                        });
                        detail = detail[0];
                        $('#article').append('<option value="'+ detail.supportingDocument_id +'">'+ detail.inventoryNumber +'</option>');
                        $("#article").attr('multiple' , false);
                        $("#article").select2({
                          placeholder: Translator.trans('magazine.field.inventoryNumber', {}, 'messages')
                        });
                        $("#article").attr('disabled',true);
                        $('#articleDesignation').val(detail.article_designation);
                        $('#return_quantity').val(detail.quantity);
                        $("#quantity").val($('#'+this.value+' td:eq( 2 )').text());
                        $("#article").select2().select2('val',detail.supportingDocument_id);

                        
                        $("#quantity").val(parseInt($('#'+detail.supportingDocument_id+' td:eq( 2 )').text()) + detail.quantity);
                        
                        $("#annimation").hide();
                        $('#detailForm').animateCss('bounceIn');
                        $('#detailForm').show();
                        $('#new').hide();
                        $('#edit').show();
                        return false;
                            
                    });

                    oTable.fnLengthChange( 3 );
                    oTable.fnDraw();

                }
            });
        }

            
        function playAudio(file){
            if(file === 'alert')
                document.getElementById('audio-alert').play();

            if(file === 'fail')
                document.getElementById('audio-fail').play();    
        }
        

        function clearForm () {
            $('#article').select2().select2('val',"");
            $('#article option[value!=""]').remove();
            $('#articleDesignation').val("");
            $('#return_quantity').val("");
            $('#quantity').val("");
            $('#new').hide();
            $('#newDurable').hide();
            $('#edit').hide();
            $("#annimation").show();
            $('#detailForm').hide();
        }

        function valide () {
            
            if ( ($("#article").val() != "") && ( parseInt($("#return_quantity").val()) < parseInt($("#quantity").val())+1)  &&  ( parseInt($("#return_quantity").val()) > min) ){
                return true;
            }else{
                
                $('#quantity').trigger( "input" );
                return false;
            }
        }

        function valideDurable () {
            if ( $("#article").val() != ""){
                return true;
            }else{
                
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

        if (opts.triggerEvent){
            window.onbeforeunload = function (e) {
                if (trigger) {
                    var e = e || window.event;

                    // For IE and Firefox prior to version 4
                    if (e) {
                        e.returnValue = Translator.trans('magazine.exit', {}, 'messages');
                    }

                    // For Safari and chrom
                    return Translator.trans('magazine.exit', {}, 'messages');
                }
                
            };

            $(window).on('beforeunload', function(){
                if (trigger) {
                    $.ajax({
                          method: "GET",
                          url: Routing.generate(opts.clearSessionUrl),
                          dataType: 'json',
                        }).done(function( msg ) {
                            console.log( " finish ");
                        });

                    console.log("out");
                }
            });
        }
    }
    
    $.fn.returnArticle.defaults = {
        max : 1000,
        min : 0,
        triggerEvent : true,
        type: 'to_central_store',
        action : "new",
        clearSessionUrl : 'clear_session_json',
        deleteUrl: 'detailReturnFormSession_delete',
        addEditUrl: 'detailReturn_new',
        indexUrl: 'detailReturn_saveIn_session_index',
    };
    
})(jQuery);