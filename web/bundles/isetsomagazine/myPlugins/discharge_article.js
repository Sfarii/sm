
/*

Copyright 2016 Rami Sfari

Version: 1.0 Timestamp: jeu.  10 mai 2016 14:01:29

*/

(function ($) {
    $.fn.dischargeArticle = function (options) {

        // get id de retour article
        if (jQuery.isNumeric($(location).attr('href').substring($(location).attr('href').lastIndexOf('/') + 1))){
            var discharge_id_edit = $(location).attr('href').substring($(location).attr('href').lastIndexOf('/') + 1);
        }

        // get les option
        var opts = $.extend( {}, $.fn.dischargeArticle.defaults, options );

        //
        var max = 1000;
        var min = 0;
        var id = 0;
        var stock = 0 ;
        var trigger = true;
        // initialisation
        $("#editConsumable").hide();

        $("#step2").hide();
        $("#prev").hide();
        $('#submit').hide();

        oTable.api().column( 0 ).visible( false );
        oTable.api().column( 3 ).visible( false );
        oTable.api().column( 4 ).visible( false );

        var select_id = '#';
        if (opts.to == "user")
        select_id = select_id + 'discharge_article_to_'+opts.to+'_toUser';
        else if (opts.to == "local")
        select_id = select_id + 'discharge_article_to_'+opts.to+'_toLocal';
        else if (opts.to == "sub_magazine")
        select_id = select_id +"magazine_discharge_toUser";
        else
        select_id = select_id + 'discharge_article_to_'+opts.to+'_toMagazine';

        var date_id = "#"
        if (opts.to == "sub_magazine")
        date_id = date_id +'magazine_discharge_date';
        else
        date_id = date_id +'discharge_article_to_'+ opts.to +'_date';

        var observation_id = "#";
        if (opts.to == "sub_magazine")
        observation_id = observation_id +'magazine_discharge_observation';
        else
        observation_id = observation_id +'discharge_article_to_'+opts.to+'_observation';

        new PNotify({
            title: 'Oh!',
            text: Translator.trans('detail.flash.info', {}, 'messages'),
            hide: false,
            type: 'info',
            icon: 'ti ti-info-alt',
            styling: 'fontawesome'
        });

        $("select").removeClass("form-control");

        var opts1=$("#source").html(), opts2="<option></option>"+opts1;
        $("select.populate").each(function() { var e=$(this); e.html(e.hasClass("placeholder")?opts2:opts1); });

        $("select").select2({width: '100%'});

        $('#detail_discharge_article_durable_supportingDocument').attr('disabled', true);
        $('#detail_discharge_article_consumable_supportingDocument').attr('disabled', true);

        listDetail();

        // detail form validation
        $('#detail_discharge_article_durable_supportingDocument').select2().on("change", function() {
            
            if (jQuery.isEmptyObject($(this).val())){
                $("#supportingDocumentDurable_error").text(Translator.trans('formError.notNull', {}, 'messages'));
                $("#detail_discharge_article_durable_quantity").val(0);
            }else{
                $("#supportingDocumentDurable_error").text("");

                $("#detail_discharge_article_durable_quantity").val($(this).val().length);
            }      
        });

        // detail form validation
        $('#detail_discharge_article_consumable_supportingDocument').select2().on("change", function() {
            if ($(this).val() == ""){
                $("#supportingDocumentConsumable_error").text(Translator.trans('formError.notNull', {}, 'messages'));
            }else{
                //alert($(this).attr( "id" ));
                var stock = $('#detail_discharge_article_consumable_supportingDocument option[value="'+$(this).val()+'"]').attr( "id" );
                $("#stock").val(stock);
                $("#supportingDocumentConsumable_error").text("");
            }      
        });

        $("#detail_discharge_article_consumable_quantity").bind('keyup mouseup input', function () {
            if (( parseInt(this.value) < parseInt($("#stock").val())+1)  &&  ( parseInt(this.value) > min)){
                
                $("#quantityConsumable_error").text("");
            }else{
                $("#quantityConsumable_error").text(Translator.trans('formError.quantity', {}, 'messages'));
            }
            
        });

        // error field form validation
        $(date_id).parent().append("<div id='error-1' class='text-danger col-sm-7'></div>");
        $(select_id).parent().append("<div id='error-2' class='text-danger col-sm-7'></div>");
        $(observation_id).parent().append("<div id='error-3' class='text-danger col-sm-7'></div>");
        // article management form validation

        $(date_id).on('change', function() {
            if ($(this).val() == ""){
                $(this).parent().addClass("has-error");
                $('#error-1').text(Translator.trans('formError.notNull', {}, 'messages'));
                }else{
               // $(this).parent().append("<div id='error-1' class='text-danger col-sm-7'></div>");
                $(this).parent().removeClass("has-error");
                $('#error-1').text("");
            }     
        });

        $(select_id).select2({width: '100%'}).on("change", function() {
            if ($(this).val() == ""){
                $(this).parents().addClass("has-error");
                $('#error-2').text(Translator.trans('formError.notNull', {}, 'messages'));
            }else{
                $(this).parents().removeClass("has-error");
                $('#error-2').text("");
            }       
        });



        $(observation_id).on("input", function() {
            if ($(this).val() == ""){
                $(this).parents().addClass("has-error");
                $('#error-3').text(Translator.trans('formError.notNull', {}, 'messages'));
            }else{
                $(this).parents().removeClass("has-error");
                $('#error-3').text("");
            }      
        });

        // jquery event 

        $( "#newDurable" ).click(function() {
            if (valideDurable ()){
                if (opts.action == "new")
                    addDetailDurable();
                else
                    addEditedDetailDurable();
                
                clearForm ();
            }
        });

        $( "#newConsumable" ).click(function() {
            if (valideConsumable ()){
                if (opts.action == "new")
                    addDetailConsumable();
                else
                    addEditedDetailConsumable();
                
                clearForm ();
            }
                
                
        });
        $( "#editConsumable" ).click(function() {
            if (valideConsumable ()){
                if (opts.action == "new")
                    updateDetailConsumable(id);
                else
                    updateEditedDetailConsumable(id);

                clearForm ();
            }
                
                
        });
        $("#annuler").click(function () {
            $("#editConsumable").hide();
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
            if(oTable.fnSettings().fnRecordsTotal() > 0){
                $("#submit").show();
            }
        });

        $( "#submit" ).click(function() {
            trigger = false;
            $( "#prev" ).trigger("click");
            if ( ($(date_id).val() != "") && ($(observation_id).val() != "") && ($(select_id).val() != "") ){
                $("#form").submit();
            }else{
                $(date_id).trigger("change");
                $(observation_id).trigger("input");
                $(select_id).trigger("change");
            }   
            
        });

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

        // function
        function supportingDocUrl (val) {
        if (opts.to == "sub_magazine")
            return Routing.generate(opts.supportingDocumentUrl, { id : store_id ,article_id: val });
        else
            return Routing.generate(opts.supportingDocumentUrl, { id: val });
            
        }

        function updateDetailDurable(val) {
                $.ajax({
                type: 'POST',
                contentType: 'application/json',
                url: Routing.generate(opts.addEditUrl, { id:  val }),
                dataType: "json",
                data: formToJSONDurable (),
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

        function updateDetailConsumable(val) {
                $.ajax({
                type: 'POST',
                contentType: 'application/json',
                url: Routing.generate(opts.addEditUrl, { id:  val }),
                dataType: "json",
                data: formToJSONConsumable (),
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

        function updateEditedDetailConsumable(val) {
                $.ajax({
                type: 'POST',
                contentType: 'application/json',
                url: Routing.generate(opts.addEditUrl, { id:  discharge_id_edit , idDetail: val }),
                dataType: "json",
                data: edit_formToJSONConsumable (),
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

        function addDetailConsumable() {
            
                $.ajax({
                    type: 'POST',
                    contentType: 'application/json',
                    url: Routing.generate(opts.addEditUrl),
                    dataType: "json",
                    data: formToJSONConsumable (),
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

        function addEditedDetailConsumable() {
            
                $.ajax({
                    type: 'POST',
                    contentType: 'application/json',
                    url: Routing.generate(opts.addEditUrl , {id: discharge_id_edit}),
                    dataType: "json",
                    data: formToJSONConsumable (),
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

        function addDetailDurable() {
            
                $.ajax({
                    type: 'POST',
                    contentType: 'application/json',
                    url: Routing.generate(opts.addEditUrl),
                    dataType: "json",
                    data: formToJSONDurable (),
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

        function addEditedDetailDurable() {
            
                $.ajax({
                    type: 'POST',
                    contentType: 'application/json',
                    url: Routing.generate(opts.addEditUrl , {id : discharge_id_edit}),
                    dataType: "json",
                    data: formToJSONDurable (),
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

        function formToJSONDurable (){
            return JSON.stringify({
                        "supportingDocument": $('#detail_discharge_article_durable_supportingDocument').val(),
                        "quantity"          : $('#detail_discharge_article_durable_quantity').val()
                });
        }

        function edit_formToJSONConsumable () {
            return JSON.stringify({
                        "id"                : id,
                        "supportingDocument": $('#detail_discharge_article_consumable_supportingDocument').val(),
                        "quantity"          : $('#detail_discharge_article_consumable_quantity').val()
                });
        }

        function formToJSONConsumable (){
            return JSON.stringify({
                        "supportingDocument": $('#detail_discharge_article_consumable_supportingDocument').val(),
                        "quantity"          : $('#detail_discharge_article_consumable_quantity').val()
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
                        getEditedlistDetail();
                } else {
                  animationEnd++;
                }
            }
        }

        function getEditedlistDetail() {
                
                $.ajax({
                url: Routing.generate(opts.indexUrl , { id : discharge_id_edit}),
                type: 'GET',
                dataType: 'json',
                success: function(data){
                    $('.cssload-loading').animateCss('bounceOut');
                    $('#list').empty();
                    $('#dialog').empty();
                    $('#list').animateCss('flipInX');
                    oTable.fnClearTable();
                    oTable.fnLengthChange( 1000000 );
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
                            deleteDetail(this.value);
                            listDetail();
                        });
                    });
                    $(".edit").unbind('click').bind('click', function(event) {
                        id = this.value;
                        var detail = $.grep(data, function (element) {
                            return element.id == id;
                        });
                        detail = detail[0];
                        
                        $('#detail_discharge_article_consumable_family').select2().select2('val',detail.family_id,true);
                        edit_form (detail);
                        $('#detail_discharge_article_consumable_quantity').val(detail.quantity);
                        
                        $('#newConsumable').hide();
                        $('#editConsumable').show();
                        return false;
                    });
                    
                    oTable.fnLengthChange( 3 );
                    oTable.fnDraw();

                }
            });
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
                    oTable.fnLengthChange( 1000000 );
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
                            deleteDetail(this.value);
                            listDetail();
                        });
                    });
                    $(".edit").unbind('click').bind('click', function(event) {
                        id = this.value;
                        var detail = $.grep(data, function (element) {
                            return element.supportingDocument_id == id;
                        });
                        detail = detail[0];
                        
                        $('#detail_discharge_article_consumable_family').select2().select2('val',detail.family_id,true);
                        edit_form (detail);
                        $('#detail_discharge_article_consumable_quantity').val(detail.quantity);
                        
                        $('#newConsumable').hide();
                        $('#editConsumable').show();
                        return false;
                    });
                    
                    oTable.fnLengthChange( 3 );
                    oTable.fnDraw();

                }
            });
        }

        function edit_form (data) {

            $('#detail_discharge_article_consumable_article').attr("disabled",false);
            $('#detail_discharge_article_consumable_supportingDocument').attr("disabled",false);

            $.ajax({
                url: Routing.generate(opts.familyUrl, { id: data.family_id }),
                type: 'POST',
                dataType: 'json',
                success: function(json){
                    $('#detail_discharge_article_consumable_subFamily option[value!=""]').remove();
                    $.each(json, function(index, value) {
                        $('#detail_discharge_article_consumable_subFamily').append('<option value="'+ value.id +'">'+ value.designation +'</option>');
                    });
                    $('#detail_discharge_article_consumable_subFamily').select2().select2('val',data.subFamily_id,false);
                }
            });


            $.ajax({
                url: Routing.generate(opts.subFamilyUrl, { id: data.subFamily_id }),
                type: 'POST',
                dataType: 'json',
                success: function(json){
                    $('#detail_discharge_article_consumable_article option[value!=""]').remove();
                    $.each(json, function(index, value) {
                       $('#detail_discharge_article_consumable_article').append('<option value="'+ value.id +'">'+ value.designation +'</option>');
                    });
                    $('#detail_discharge_article_consumable_article').select2().select2('val',data.article_id,false);
                }
            });
            

            $.ajax({
                url: supportingDocUrl ( data.article_id),
                type: 'POST',
                dataType: 'json',
                success: function(json){
                    $('#detail_discharge_article_consumable_supportingDocument option[value!=""]').remove();
                    $.each(json, function(index, value) {
                        $('#detail_discharge_article_consumable_supportingDocument').append('<option id="'+value.quantity+'" value="'+ value.id +'">'+ value.text +'</option>');
                    });
                    $('#detail_discharge_article_consumable_supportingDocument').select2().select2('val',data.supportingDocument_id,true);
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
            $("form[name=detail_discharge_article_durable]").trigger("reset");
            $('#detail_discharge_article_durable_family').trigger( "change" );
            $("form[name=detail_discharge_article_consumable]").trigger("reset");
            $('#detail_discharge_article_consumable_family').trigger( "change" );
            
            $('#newDurable').show();
            $('#newConsumable').show();
            $('#editConsumable').hide();
        }

        function valideDurable () {
            //ddd
            if ( !jQuery.isEmptyObject($("#detail_discharge_article_durable_supportingDocument").val())){
                
                return true;

            }else{
                $('#detail_discharge_article_durable_supportingDocument').trigger( "change" );
                return false;
            }
        }

        function valideConsumable () {
            
            if ( ($("#detail_discharge_article_consumable_supportingDocument").val() != "") && ($('#detail_discharge_article_consumable_quantity').val() < max)  &&  ($('#detail_discharge_article_consumable_quantity').val() > min)&&  ($('#detail_discharge_article_consumable_quantity').val() != "") ){
                
                return true;

            }else{
                $('#detail_discharge_article_consumable_supportingDocument').trigger( "change" );
                $('#detail_discharge_article_consumable_quantity').trigger( "input" );
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
        ///
        $('#detail_discharge_article_durable_subFamily option[value!=""]').remove();
        $('#detail_discharge_article_durable_subFamily').attr('disabled', true);

        $('#detail_discharge_article_durable_family').select2().on('change', function() {
            if (this.value == ""){
                $('#detail_discharge_article_durable_subFamily').select2().select2('val','');
                $('#detail_discharge_article_durable_subFamily').attr('disabled', true);
                $('#detail_discharge_article_durable_subFamily option[value!=""]').remove();

                $('#detail_discharge_article_durable_article').select2().select2('val','');
                $('#detail_discharge_article_durable_article').attr('disabled', true);
                $('#detail_discharge_article_durable_article option[value!=""]').remove();

                $('#detail_discharge_article_durable_supportingDocument').select2().select2('val','');
                $('#detail_discharge_article_durable_supportingDocument').attr('disabled', true);
                $('#detail_discharge_article_durable_supportingDocument option[value!=""]').remove();
            }else{
                $.ajax({
                    url: Routing.generate(opts.familyUrl, { id: this.value }),
                    type: 'POST',
                    dataType: 'json',
                    success: function(json){
                        if (json.length > 0){
                            $('#detail_discharge_article_durable_subFamily').select2().select2('val','');
                            $('#detail_discharge_article_durable_subFamily').attr('disabled', false);
                            $('#detail_discharge_article_durable_subFamily option[value!=""]').remove();
                        }else{
                            $('#detail_discharge_article_durable_subFamily').select2().select2('val','');
                             $('#detail_discharge_article_durable_subFamily').attr('disabled', true);
                             $('#detail_discharge_article_durable_subFamily option[value!=""]').remove();

                            $('#detail_discharge_article_durable_article').select2().select2('val','');
                            $('#detail_discharge_article_durable_article').attr('disabled', true);
                            $('#detail_discharge_article_durable_article option[value!=""]').remove();

                            $('#detail_discharge_article_durable_supportingDocument').select2().select2('val','');
                            $('#detail_discharge_article_durable_supportingDocument').attr('disabled', true);
                            $('#detail_discharge_article_durable_supportingDocument option[value!=""]').remove();
                        }
                        $.each(json, function(index, value) {
                            $('#detail_discharge_article_durable_subFamily').append('<option value="'+ value.id +'">'+ value.designation +'</option>');
                        });
                    }
                });
            
            }
        });

        $('#detail_discharge_article_durable_article option[value!=""]').remove();
        $('#detail_discharge_article_durable_article').attr('disabled', true);

        $('#detail_discharge_article_durable_subFamily').select2().on('change', function() {
            if (this.value == ""){
                $('#detail_discharge_article_durable_article').select2().select2('val','');
                $('#detail_discharge_article_durable_article').attr('disabled', true);
                $('#detail_discharge_article_durable_article option[value!=""]').remove();

                $('#detail_discharge_article_durable_supportingDocument').select2().select2('val','');
                $('#detail_discharge_article_durable_supportingDocument').attr('disabled', true);
                $('#detail_discharge_article_durable_supportingDocument option[value!=""]').remove();
            }else{
                $.ajax({
                    url: Routing.generate(opts.subFamilyUrl, { id: this.value }),
                    type: 'POST',
                    dataType: 'json',
                    success: function(json){
                        if (json.length > 0){
                            $('#detail_discharge_article_durable_article').select2().select2('val','');
                            $('#detail_discharge_article_durable_article').attr('disabled', false);
                            $('#detail_discharge_article_durable_article option[value!=""]').remove();
                        }else{
                            $('#detail_discharge_article_durable_article').select2().select2('val','');
                            $('#detail_discharge_article_durable_article').attr('disabled', true);
                            $('#detail_discharge_article_durable_article option[value!=""]').remove();

                            $('#detail_discharge_article_durable_supportingDocument').select2().select2('val','');
                            $('#detail_discharge_article_durable_supportingDocument').attr('disabled', true);
                            $('#detail_discharge_article_durable_supportingDocument option[value!=""]').remove();
                        }
                       
                        $.each(json, function(index, value) {
                            $('#detail_discharge_article_durable_article').append('<option value="'+ value.id +'">'+ value.designation +'</option>');
                        });
                    }
                });
            
            }
        });
        //Detail
        $('#detail_discharge_article_durable_article').select2().on('change', function() {
            if (this.value == ""){
                $('#detail_discharge_article_durable_supportingDocument').select2().select2('val','');
                $('#detail_discharge_article_durable_supportingDocument').attr('disabled', true);
                $('#detail_discharge_article_durable_supportingDocument option[value!=""]').remove();
            }else{
                $.ajax({
                    url: supportingDocUrl (this.value ),
                    type: 'POST',
                    dataType: 'json',
                    success: function(json){
                        if (json.length > 0){
                            $('#stockDurable').val(json.length);
                            $('#detail_discharge_article_durable_supportingDocument').select2().select2('val','');
                            $('#detail_discharge_article_durable_supportingDocument').attr('disabled', false);
                            $('#detail_discharge_article_durable_supportingDocument option[value!=""]').remove();
                        }else{

                            $('#detail_discharge_article_durable_supportingDocument').select2().select2('val','');
                            $('#detail_discharge_article_durable_supportingDocument').attr('disabled', true);
                            $('#detail_discharge_article_durable_supportingDocument option[value!=""]').remove();
                        }
                       
                        $.each(json, function(index, value) {
                            $('#detail_discharge_article_durable_supportingDocument').append('<option value="'+ value.id +'">'+ value.text +'</option>');
                        });
                    }
                });
            
            }
        });


        ///
        $('#detail_discharge_article_consumable_subFamily option[value!=""]').remove();
        $('#detail_discharge_article_consumable_subFamily').attr('disabled', true);

        $('#detail_discharge_article_consumable_family').select2().on('change', function() {
            if (this.value == ""){
                $('#detail_discharge_article_consumable_subFamily').select2().select2('val','');
                $('#detail_discharge_article_consumable_subFamily').attr('disabled', true);
                $('#detail_discharge_article_consumable_subFamily option[value!=""]').remove();

                $('#detail_discharge_article_consumable_article').select2().select2('val','');
                $('#detail_discharge_article_consumable_article').attr('disabled', true);
                $('#detail_discharge_article_consumable_article option[value!=""]').remove();

                $('#detail_discharge_article_consumable_supportingDocument').select2().select2('val','');
                $('#detail_discharge_article_consumable_supportingDocument').attr('disabled', true);
                $('#detail_discharge_article_consumable_supportingDocument option[value!=""]').remove();
            }else{
                $.ajax({
                    url: Routing.generate(opts.familyUrl, { id: this.value }),
                    type: 'POST',
                    dataType: 'json',
                    success: function(json){
                        if (json.length > 0){
                            $('#detail_discharge_article_consumable_subFamily').select2().select2('val','');
                            $('#detail_discharge_article_consumable_subFamily').attr('disabled', false);
                            $('#detail_discharge_article_consumable_subFamily option[value!=""]').remove();
                        }else{
                            $('#detail_discharge_article_consumable_subFamily').select2().select2('val','');
                            $('#detail_discharge_article_consumable_subFamily').attr('disabled', true);
                            $('#detail_discharge_article_consumable_subFamily option[value!=""]').remove();

                            $('#detail_discharge_article_consumable_article').select2().select2('val','');
                            $('#detail_discharge_article_consumable_article').attr('disabled', true);
                            $('#detail_discharge_article_consumable_article option[value!=""]').remove();

                            $('#detail_discharge_article_consumable_supportingDocument').select2().select2('val','');
                            $('#detail_discharge_article_consumable_supportingDocument').attr('disabled', true);
                            $('#detail_discharge_article_consumable_supportingDocument option[value!=""]').remove();
                        }
                        $.each(json, function(index, value) {
                            $('#detail_discharge_article_consumable_subFamily').append('<option value="'+ value.id +'">'+ value.designation +'</option>');
                        });
                    }
                });
            
            }
        });

        $('#detail_discharge_article_consumable_article option[value!=""]').remove();
        $('#detail_discharge_article_consumable_article').attr('disabled', true);

        $('#detail_discharge_article_consumable_subFamily').select2().on('change', function() {
            if (this.value == ""){
                $('#detail_discharge_article_consumable_article').select2().select2('val','');
                $('#detail_discharge_article_consumable_article').attr('disabled', true);
                $('#detail_discharge_article_consumable_article option[value!=""]').remove();

                $('#detail_discharge_article_consumable_supportingDocument').select2().select2('val','');
                $('#detail_discharge_article_consumable_supportingDocument').attr('disabled', true);
                $('#detail_discharge_article_consumable_supportingDocument option[value!=""]').remove();
            }else{
                $.ajax({
                    url: Routing.generate(opts.subFamilyUrl, { id: this.value }),
                    type: 'POST',
                    dataType: 'json',
                    success: function(json){
                        if (json.length > 0){
                            $('#detail_discharge_article_consumable_article').select2().select2('val','');
                            $('#detail_discharge_article_consumable_article').attr('disabled', false);
                            $('#detail_discharge_article_consumable_article option[value!=""]').remove();

                        }else{
                            $('#detail_discharge_article_consumable_article').select2().select2('val','');
                            $('#detail_discharge_article_consumable_article').attr('disabled', true);
                            $('#detail_discharge_article_consumable_article option[value!=""]').remove();

                            $('#detail_discharge_article_consumable_supportingDocument').select2().select2('val','');
                            $('#detail_discharge_article_consumable_supportingDocument').attr('disabled', true);
                            $('#detail_discharge_article_consumable_supportingDocument option[value!=""]').remove();
                        }
                       
                        $.each(json, function(index, value) {
                            $('#detail_discharge_article_consumable_article').append('<option value="'+ value.id +'">'+ value.designation +'</option>');
                        });
                    }
                });
            
            }
        });
        $('#detail_discharge_article_consumable_article').select2().on('change', function() {

            if (this.value == ""){
                $('#detail_discharge_article_consumable_supportingDocument').select2().select2('val','');
                $('#detail_discharge_article_consumable_supportingDocument').attr('disabled', true);
                $('#detail_discharge_article_consumable_supportingDocument option[value!=""]').remove();
            }else{
                $.ajax({
                    url: supportingDocUrl (this.value ),
                    type: 'POST',
                    dataType: 'json',
                    success: function(json){
                        if (json.length > 0){
                            $('#detail_discharge_article_consumable_supportingDocument').select2().select2('val','');
                            $('#detail_discharge_article_consumable_supportingDocument').attr('disabled', false);
                            $('#detail_discharge_article_consumable_supportingDocument option[value!=""]').remove();
                        }else{
                            $('#detail_discharge_article_consumable_supportingDocument').select2().select2('val','');
                            $('#detail_discharge_article_consumable_supportingDocument').attr('disabled', true);
                            $('#detail_discharge_article_consumable_supportingDocument option[value!=""]').remove();
                        }
                       
                        $.each(json, function(index, value) {
                            $('#detail_discharge_article_consumable_supportingDocument').append('<option id="'+value.quantity+'" value="'+ value.id +'">'+ value.text +'</option>');
                        });
                    }
                });
            
            }
        });
        
        if (opts.to == "local"){
            $('#discharge_article_to_local_toLocal').attr('disabled', true);
            $('#discharge_article_to_local_toLocal option[value!=""]').remove();

            $('#discharge_article_to_local_typelocal').on('change', function() {
                if (this.value == ""){
                     $('#discharge_article_to_local_toLocal').attr('disabled', true);
                     $('#discharge_article_to_local_toLocal option[value!=""]').remove();
                }else{
                    $.ajax({
                        url: Routing.generate(opts.typeLocalUrl, { id: this.value }),
                        type: 'POST',
                        dataType: 'json',
                        success: function(json){
                            $('#discharge_article_to_local_toLocal').attr('disabled', false);
                            $('#discharge_article_to_local_toLocal option[value!=""]').remove();
                            $.each(json, function(index, value) {
                                $('#discharge_article_to_local_toLocal').append('<option value="'+ value.id +'">'+ value.designation +'</option>');
                            });
                        }
                    });
                
                }
            });
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
    $.fn.dischargeArticle.defaults = {
        max : 1000,
        min : 0,
        typeLocalUrl: 'json_local_index',
        triggerEvent : true,
        action : "new",
        to: "user",
        clearSessionUrl : 'clear_session_json',
        deleteUrl: 'detailDischarge_session_delete',
        addEditUrl: 'detailDischarge_new',
        indexUrl: 'detailDischarge_session_index',
        familyUrl: 'Sub_family_index',
        subFamilyUrl: 'json_subFamily_index',
        supportingDocumentUrl : 'json_supporting_document_index'
    };
})(jQuery);