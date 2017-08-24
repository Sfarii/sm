/*

Copyright 2016 Rami Sfari

Version: 1.0 Timestamp: jeu.  1 mai 2016 14:01:29

*/

(function ($) {

	$.fn.supportingDocument = function (options) {
		
		// get id de livre Journal
		if (jQuery.isNumeric($(location).attr('href').substring($(location).attr('href').lastIndexOf('/') + 1))){
		    var journal_id_edit = $(location).attr('href').substring($(location).attr('href').lastIndexOf('/') + 1);
		}else{
			throw new Error("Error");
		}

		// get les option
		var opts = $.extend( {}, $.fn.supportingDocument.defaults, options );
		
		// initialisation var
		var trigger = true;
		var id = 0;
		var inventoryNumber = 0;
		
		oTable.api().column( 0 ).visible( false );
		oTable.api().column( 4 ).visible( false );
		oTable.api().column( 5 ).visible( false );

		// initialisation DOM
		$("#edit").hide();
		$("#step2").hide();
		$("#prev").hide();
		$('#submit').hide();

		// MySplitter

		// message
		new PNotify({
			title: 'Oh!',
			text: Translator.trans('journalConsumable.flash.info', {}, 'messages'),
			hide: false,
			type: 'info',
			icon: 'ti ti-info-alt',
			styling: 'fontawesome'
		});

		// Select2 Plugin
		$("select").removeClass("form-control");

		var optts=$("#source").html(), optts2="<option></option>"+optts;
		$("select.populate").each(function() { var e=$(this); e.html(e.hasClass("placeholder")?optts2:optts); });

		$("select").select2({width: '100%'});

		// init List de piéce Justificative
		listSupportingDocument();

		// piéce Justificative form validation

		$('#supporting_document_'+opts.articleType+'_inventoryNumber').on('input', function() {
			if ($(this).val() != ""){
				$("#inventoryNumber_error").text("");
			}else{
				$("#inventoryNumber_error").text(Translator.trans('formError.notNull', {}, 'messages'));
			}
		});

		$('#supporting_document_'+opts.articleType+'_article').select2().on("change", function() {
		    if ($(this).val() == ""){
				$("#article_error").text(Translator.trans('formError.notNull', {}, 'messages'));
			}else{
				$("#article_error").text("");
			}      
		});

		$('#supporting_document_'+opts.articleType+'_price').on('input', function() {
			if (($(this).val() < opts.max)  &&  ($(this).val() > opts.min)){
				$("#price_error").text("");
			}else{
				$("#price_error").text(Translator.trans('formError.price', {}, 'messages'));
			}
		});
		$('#supporting_document_'+opts.articleType+'_quantity').on('input', function() {
			if (($(this).val() < opts.max )  && ($(this).val() > opts.min)){
				$("#quantity_error").text("");
			}else{
				$("#quantity_error").text(Translator.trans('formError.quantity', {}, 'messages'));
			}
		});

		// erreur champ form validation
		$("#form .form-group:eq( 1 )").append("<div id='error-1' class='text-danger col-sm-7'></div>");
		$("#form .form-group:eq( 2 )").append("<div id='error-2' class='text-danger col-sm-7'></div>");
		$("#form .form-group:eq( 3 )").append("<div id='error-3' class='text-danger col-sm-7'></div>");
		$("#form .form-group:eq( 4 )").append("<div id='error-4' class='text-danger col-sm-7'></div>");

		// journal form validation
		$('#journal_'+opts.articleType+'_type').select2({width: '100%'}).on("change", function() {
		    if ($(this).val() == ""){
		    	$("#form .form-group:eq( 1 )").addClass("has-error");
				$('#error-1').text(Translator.trans('formError.notNull', {}, 'messages'));
			}else{
				$("#form .form-group:eq( 1 )").removeClass("has-error");
				$('#error-1').text("");
			}      
		});

		$('#journal_'+opts.articleType+'_dateEntre').on('change', function() {
			if ($(this).val() == ""){
		    	$("#form .form-group:eq( 2 )").addClass("has-error");
		    	$('#error-2').text(Translator.trans('formError.notNull', {}, 'messages'));
				}else{
				$("#form .form-group:eq( 2 )").removeClass("has-error");
				$('#error-2').text("");
			}     
		});

		$('#journal_'+opts.articleType+'_provider').select2({width: '100%'}).on("change", function() {
		    if ($(this).val() == ""){
		    	$("#form .form-group:eq( 3 )").addClass("has-error");
				$('#error-3').text(Translator.trans('formError.notNull', {}, 'messages'));
			}else{
				$("#form .form-group:eq( 3 )").removeClass("has-error");
				$('#error-3').text("");
			}      
		});

		$('#journal_'+opts.articleType+'_origin').select2({width: '100%'}).on("change", function() {
		    if ($(this).val() == ""){
		    	$("#form .form-group:eq( 4 )").addClass("has-error");
		    	$('#error-4').text(Translator.trans('formError.notNull', {}, 'messages'));
			}else{
				$("#form .form-group:eq( 4 )").removeClass("has-error");
				$('#error-4').text("");
			}          
		});

		// jquery event 
		$( "#new" ).click(function() {
		  	if (valide ()){
		  		addSupportingDocument();
		  		clearForm ();
		  	}
		});

		$( "#edit" ).click(function() {
		  	if (valideEdit ()){
		  		updateSupportingDocument(id);
		  		clearForm ();
		  	}
		});

		$("#annuler").click(function () {
			$("#edit").hide();
		  	clearForm ();
		});

		$( "#next" ).click(function() {
			$("#step1").hide();
			$("#step2").css("visibility", "");
		  	$(this).hide();
		  	$("#prev").show();
		  	$("#basicwizard-head-0").removeClass("stepy-active");
		  	$("#basicwizard-head-1").addClass("stepy-active");
		  	
		  	$("#step2").show();
		  	
		  	$("#submit").hide();
		  	
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
			$( "#prev" ).trigger('click');
			if ( ($('#journal_'+opts.articleType+'_provider').val() != "") && ($('#journal_'+opts.articleType+'_origin').val() != "") && ($('#journal_'+opts.articleType+'_type').val() != "") && ($('#journal_'+opts.articleType+'_dateEntre').val() != "") ){
				trigger = false;
				$("#form").submit();
			}else{
				$('#journal_'+opts.articleType+'_dateEntre').trigger( "change" );
				$('#journal_'+opts.articleType+'_provider').trigger( "change" );
				$('#journal_'+opts.articleType+'_origin').trigger( "change" );
				$('#journal_'+opts.articleType+'_type').trigger( "change" );
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

		// function de Modification
		function updateSupportingDocument(val) {
			$.ajax({
				type: 'POST',
				contentType: 'application/json',
				url: Routing.generate(opts.addEditUrl, { id : journal_id_edit , idSupportingDocument :  val }),
				dataType: "json",
				data: editFormToJSON (),
				success: function(data, textStatus, jqXHR){
					if (data.type == "success"){
						listSupportingDocument();
					}
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

		// Function de Supprition
		function deleteSupportingDocument(val) {
			$.ajax({
				type: 'DELETE',
				url: Routing.generate(opts.deleteUrl, { id:  val }),
				success: function(data, textStatus, jqXHR){
					if (data.type == "success"){
						listSupportingDocument();
					}
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

		// Function de Insertion
		function addSupportingDocument() {
		
			$.ajax({
				type: 'POST',
				contentType: 'application/json',
				url: Routing.generate(opts.addEditUrl, {id : journal_id_edit }),
				dataType: "json",
				data: formToJSON (),
				success: function(data, textStatus, jqXHR){
					listSupportingDocument();
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

		// convert Form Vers JSON
		function formToJSON (){
			return JSON.stringify({
						"inventoryNumber"   : $('#supporting_document_'+opts.articleType+'_inventoryNumber').val(),
						"article"   		: $('#supporting_document_'+opts.articleType+'_article').val(), 
						"price"				: $('#supporting_document_'+opts.articleType+'_price').val(), 
						"quantity"			: $('#supporting_document_'+opts.articleType+'_quantity').val()
				});
		}

		function editFormToJSON (){
			return JSON.stringify({
						"id"				: id,
						"inventoryNumber"   : $('#supporting_document_'+opts.articleType+'_inventoryNumber').val(),
						"article"   		: $('#supporting_document_'+opts.articleType+'_article').val(), 
						"price"				: $('#supporting_document_'+opts.articleType+'_price').val(), 
						"quantity"			: $('#supporting_document_'+opts.articleType+'_quantity').val()
				});
		}

		

		// function list piéce Justificative
		function listSupportingDocument () {
			animation();

			var animationEnd = 0;
			var id = setInterval(frame, 20);

			function frame() {
			    if (animationEnd == 100) {
			      	clearInterval(id);
			      	getlistSupportingDocument();

			    } else {
			      animationEnd++;
			    }
			}
			
		}

		

		function getData (supportingDocument,list) {
			
		}
		// List piéce Justificative
		function getlistSupportingDocument() {
		    	
	        $.ajax({
		        url: Routing.generate(opts.indexUrl , { id : journal_id_edit}),
		        type: 'GET',
		        dataType: 'json',
		        success: function(list){
		        	$('.cssload-loading').animateCss('bounceOut');
		            $('#list').empty();
		            $('#dialog').empty();
		            $('#list').animateCss('flipInX');
		            oTable.fnClearTable();
		            oTable.fnLengthChange( 100000 );
					oTable.fnDraw();

		            $.each(list, function(index, supportingDocument) {
		            	if (opts.articleType == 'durable'){
		            		oTable.fnAddData( [
								supportingDocument.inventoryNumber,
								supportingDocument.article_designation,
								supportingDocument.price,
								supportingDocument.quantity,
								supportingDocument.family,
								supportingDocument.subFamily,
								'<div class="btn-group">'+
								    '<button data-box="#'+ supportingDocument.id +'" class="btn btn-danger-alt mb-control"><i class="ti ti-trash"></i></button>'+
								'</div>'
							] );
		            	}else{
		            		oTable.fnAddData( [
								supportingDocument.inventoryNumber,
								supportingDocument.article_designation,
								supportingDocument.price,
								supportingDocument.quantity,
								supportingDocument.family,
								supportingDocument.subFamily,
								'<div class="btn-group">'+
								    '<button value="'+supportingDocument.id+'" class="btn btn-info-alt edit"><i class="ti ti-pencil-alt"></i></button>'+
								    '<button data-box="#'+ supportingDocument.id +'" class="btn btn-danger-alt mb-control"><i class="ti ti-trash"></i></button>'+
								'</div>'
							] );
		            	}
		            	

						$('#dialog').append('<!-- MESSAGE BOX-->'+
					        '<div class="message-box " data-sound="alert" id="'+ supportingDocument.id +'">'+
					            '<div class="mb-container">'+
					                '<div class="mb-middle">'+
					                    '<div class="mb-title"><span class="ti ti-trash"></span>'+Translator.trans('supportingdocument.delete.name', {}, 'messages')+' ?</div>'+
					                    '<div class="mb-content">'+
					                        '<p>'+Translator.trans('supportingdocument.delete.message', {}, 'messages')+'</p>'+                    
					                        
					                    '</div>'+
					                    '<div class="mb-footer">'+
					                        '<div class="pull-right">'+ 
					                        	'<div class="btn-group">'+
					                                '<button value="'+supportingDocument.id+'" class="btn btn-danger btn-lg mb-control-close delete"><i class="icon-trash"></i>'+Translator.trans('messageBox.yes', {}, 'messages')+
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
					oTable.fnLengthChange( 3 );
					oTable.fnDraw();
					$(".delete").click(function() {
					  	deleteSupportingDocument($(this).val());
					});
					$(".edit").click(function() {
				        id = $(this).val();
				        var supportingDocument = $.grep(list, function (element) {
						    return element.id == id;
						});
				        supportingDocument = supportingDocument[0];
				        setInventoryNumber (supportingDocument.inventoryNumber);
		            	$('#supporting_document_'+opts.articleType+'_family').select2().select2('val',supportingDocument.family_id);
		            	$('#supporting_document_'+opts.articleType+'_subFamily').attr('disabled', false);
						$('#supporting_document_'+opts.articleType+'_subFamily option[value!=""]').remove();
						$('#supporting_document_'+opts.articleType+'_article').attr('disabled', false);
				        $('#supporting_document_'+opts.articleType+'_article option[value!=""]').remove();
				            	
		            	$.ajax({
				            url: Routing.generate(opts.familyUrl, { id: supportingDocument.family_id }),
				            type: 'POST',
				            dataType: 'json',
				            success: function(json){
				                $.each(json, function(index, value) {
				                	$('#supporting_document_'+opts.articleType+'_subFamily').append('<option value="'+ value.id +'">'+ value.designation +'</option>');
				                });
				                $('#supporting_document_'+opts.articleType+'_subFamily').select2().select2('val',supportingDocument.subFamily_id,false); 
				            }
				        });
				           	
				            	
                		$.ajax({
				            url: Routing.generate(opts.subFamilyUrl, { id: supportingDocument.subFamily_id }),
				            type: 'POST',
				            dataType: 'json',
				            success: function(json){
				        		
				                $.each(json, function(index, value) {
				                	$('#supporting_document_'+opts.articleType+'_article').append('<option value="'+ value.id +'">'+ value.designation +'</option>');
				                });
				                $('#supporting_document_'+opts.articleType+'_article').select2().select2("val",supportingDocument.article_id,false);
				            }
				        });
						
		                $('#supporting_document_'+opts.articleType+'_price').val(supportingDocument.price);
		                $('#supporting_document_'+opts.articleType+'_quantity').val(supportingDocument.quantity);
		                $('#supporting_document_'+opts.articleType+'_inventoryNumber').val(supportingDocument.inventoryNumber);
		                $('#new').hide();
		                $('#edit').show();
		                return false;
		            });

					if(oTable.fnSettings().fnRecordsTotal() == 0){
				  		$.ajax({
				            url: Routing.generate(opts.inventoryNumberUrl),
				            type: 'GET',
				            dataType: 'json',
				            success: function(json){
				            	$('#supporting_document_'+opts.articleType+'_inventoryNumber').val(json.inventoryNumber);
				            }
				    	});
				  	}else{
				  		var inventoryNumber = parseInt(list[list.length-1].inventoryNumber)+1;
				  		$('#supporting_document_'+opts.articleType+'_inventoryNumber').val(inventoryNumber);
				  	}

				  	if(oTable.fnSettings().fnRecordsTotal() > 0){
					  	$("#submit").show();
					}

		        }
		    });
			
		}

		function setInventoryNumber (inventoryNum) {
			inventoryNumber = inventoryNum;
		}

		// message Box Function
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

		// clear Form
		function clearForm () {
			$('#supporting_document_'+opts.articleType+'_family').select2().select2('val','');
			$('#supporting_document_'+opts.articleType+'_subFamily').select2().select2('val','');
			$('#supporting_document_'+opts.articleType+'_article').select2().select2('val','');
			$('#supporting_document_'+opts.articleType+'_price').val("");
			$('#supporting_document_'+opts.articleType+'_quantity').val("");
			$('#inventoryNumber').prop('checked', false);
			$('#supporting_document_'+opts.articleType+'_inventoryNumber').attr('disabled', true);
			listSupportingDocument ();
			$('#new').show();
			$('#edit').hide();
		}
		// valide Form
		function valide () {
			if ($('#supporting_document_'+opts.articleType+'_subFamily').is(':disabled'))
				$('#supporting_document_'+opts.articleType+'_article').attr('disabled', false);
			
			$('#supporting_document_'+opts.articleType+'_inventoryNumber').attr('disabled', false);

			if (!checkInventoryNumber ($('#supporting_document_'+opts.articleType+'_inventoryNumber').val()) && ($('#supporting_document_'+opts.articleType+'_inventoryNumber').val() != "") &&($('#supporting_document_'+opts.articleType+'_article').val() != "") && ($('#supporting_document_'+opts.articleType+'_price').val() < opts.max)  &&  ($('#supporting_document_'+opts.articleType+'_price').val() > opts.min) &&  ($('#supporting_document_'+opts.articleType+'_price').val() != "") && ($('#supporting_document_'+opts.articleType+'_quantity').val() < opts.max)  &&  ($('#supporting_document_'+opts.articleType+'_quantity').val() > opts.min)&&  ($('#supporting_document_'+opts.articleType+'_quantity').val() != "") ){
				
				return true;

			}else{
				$('#supporting_document_'+opts.articleType+'_inventoryNumber').trigger( "input" );
				$('#supporting_document_'+opts.articleType+'_price').trigger( "input" );
				$('#supporting_document_'+opts.articleType+'_quantity').trigger( "input" );
				$('#supporting_document_'+opts.articleType+'_article').trigger( "change" );

				$('#supporting_document_'+opts.articleType+'_inventoryNumber').attr('disabled', true);
				if (!$('#supporting_document_'+opts.articleType+'_subFamily').is(':disabled'))
				$('#supporting_document_'+opts.articleType+'_article').attr('disabled', false);

			
				

				return false;
			}
		}

		function valideEdit () {
			if ($('#supporting_document_'+opts.articleType+'_subFamily').is(':disabled'))
				$('#supporting_document_'+opts.articleType+'_article').attr('disabled', false);
			
				$('#supporting_document_'+opts.articleType+'_inventoryNumber').attr('disabled', false);

			if (checkInventoryNumberEdit ($('#supporting_document_'+opts.articleType+'_inventoryNumber').val()) && ($('#supporting_document_'+opts.articleType+'_inventoryNumber').val() != "") &&($('#supporting_document_'+opts.articleType+'_article').val() != "") && ($('#supporting_document_'+opts.articleType+'_price').val() < opts.max)  &&  ($('#supporting_document_'+opts.articleType+'_price').val() > opts.min) &&  ($('#supporting_document_'+opts.articleType+'_price').val() != "") && ($('#supporting_document_'+opts.articleType+'_quantity').val() < opts.max)  &&  ($('#supporting_document_'+opts.articleType+'_quantity').val() > 1)&&  ($('#supporting_document_'+opts.articleType+'_quantity').val() != "") ){
				
				return true;

			}else{
				$('#supporting_document_'+opts.articleType+'_inventoryNumber').trigger( "input" );
				$('#supporting_document_'+opts.articleType+'_price').trigger( "input" );
				$('#supporting_document_'+opts.articleType+'_quantity').trigger( "input" );
				$('#supporting_document_'+opts.articleType+'_article').trigger( "change" );

				$('#supporting_document_'+opts.articleType+'_inventoryNumber').attr('disabled', true);
				if (!$('#supporting_document_'+opts.articleType+'_subFamily').is(':disabled'))
				$('#supporting_document_'+opts.articleType+'_article').attr('disabled', false);

			
				

				return false;
			}
		}

		function checkInventoryNumberEdit (inventoryNumber_id) {
			
			if (inventoryNumber_id != inventoryNumber){
				if (!checkInventoryNumber (inventoryNumber_id)){
					return false;
				}
			}

			return true;
		}

		// annniation Function
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

		// init select Form
		$('#supporting_document_'+opts.articleType+'_subFamily option[value!=""]').remove();
		$('#supporting_document_'+opts.articleType+'_subFamily').attr('disabled', true);

		$('#supporting_document_'+opts.articleType+'_article option[value!=""]').remove();
		$('#supporting_document_'+opts.articleType+'_article').attr('disabled', true);

		// event
		$('#supporting_document_'+opts.articleType+'_family').select2().on('change', function() {
		    if (this.value == ""){
		    	$('#supporting_document_'+opts.articleType+'_subFamily').select2().select2('val','');
		        $('#supporting_document_'+opts.articleType+'_subFamily').attr('disabled', true);
		        $('#supporting_document_'+opts.articleType+'_subFamily option[value!=""]').remove();

		        $('#supporting_document_'+opts.articleType+'_article').select2().select2('val','');
		        $('#supporting_document_'+opts.articleType+'_article').attr('disabled', true);
		        $('#supporting_document_'+opts.articleType+'_article option[value!=""]').remove();
		    }else{
		        $.ajax({
		            url: Routing.generate(opts.familyUrl, { id: this.value }),
		            type: 'POST',
		            dataType: 'json',
		            success: function(json){
		            	if (json.length > 0){
		            		$('#supporting_document_'+opts.articleType+'_subFamily').select2().select2('val','');
		                	$('#supporting_document_'+opts.articleType+'_subFamily').attr('disabled', false);
		                	$('#supporting_document_'+opts.articleType+'_subFamily option[value!=""]').remove();
		                }else{
		                	$('#supporting_document_'+opts.articleType+'_subFamily').select2().select2('val','');
					         $('#supporting_document_'+opts.articleType+'_subFamily').attr('disabled', true);
					         $('#supporting_document_'+opts.articleType+'_subFamily option[value!=""]').remove();

					        $('#supporting_document_'+opts.articleType+'_article').select2().select2('val','');
		        			$('#supporting_document_'+opts.articleType+'_article').attr('disabled', true);
		        			$('#supporting_document_'+opts.articleType+'_article option[value!=""]').remove();
		                }
		                $.each(json, function(index, value) {
		                    $('#supporting_document_'+opts.articleType+'_subFamily').append('<option value="'+ value.id +'">'+ value.designation +'</option>');
		                });
		            }
		        });
		    
		    }
		});
		
		$('#supporting_document_'+opts.articleType+'_subFamily').select2().on('change', function() {
		    if (this.value == ""){
		    	$('#supporting_document_'+opts.articleType+'_article').select2().select2('val','');
		        $('#supporting_document_'+opts.articleType+'_article').attr('disabled', true);
		        $('#supporting_document_'+opts.articleType+'_article option[value!=""]').remove();
		    }else{
		        $.ajax({
		            url: Routing.generate(opts.subFamilyUrl, { id: this.value }),
		            type: 'POST',
		            dataType: 'json',
		            success: function(json){
		            	if (json.length > 0){
		            		$('#supporting_document_'+opts.articleType+'_article').select2().select2('val','');
		            		$('#supporting_document_'+opts.articleType+'_article').attr('disabled', false);
		                	$('#supporting_document_'+opts.articleType+'_article option[value!=""]').remove();
		            	}else{
		            		$('#supporting_document_'+opts.articleType+'_article').select2().select2('val','');
		        			$('#supporting_document_'+opts.articleType+'_article').attr('disabled', true);
		        			$('#supporting_document_'+opts.articleType+'_article option[value!=""]').remove();
		            	}
		               
		                $.each(json, function(index, value) {
		                    $('#supporting_document_'+opts.articleType+'_article').append('<option value="'+ value.id +'">'+ value.designation +'</option>');
		                });
		            }
		        });
		    
		    }
		});

		$('#inventoryNumber').click(function() {
		    var $this = $(this);
		    // $this will contain a reference to the checkbox   
		    if ($this.is(':checked')) {
		       $('#supporting_document_'+opts.articleType+'_inventoryNumber').attr('disabled', false);
		    } else {
		        $('#supporting_document_'+opts.articleType+'_inventoryNumber').attr('disabled', true);
		    }
		});

		function checkInventoryNumber (val) {
		    $.ajax({
		            url: Routing.generate(opts.inventoryNumberUrl, { inventoryNumber:  val}),
		            type: 'GET',
		            dataType: 'json',
		            success: function(json){
		            	
		            	if (json.inventoryNumber == true){
							$("#inventoryNumber_error").text("");
							return  true;
						}else{
							$("#inventoryNumber_error").text(Translator.trans('formError.unique', {}, 'messages'));
							return  false;
						}
		                
		            }
		        });
		}
	};

	$.fn.supportingDocument.defaults = {
	    max : 1000,
		min : 0,
		triggerEvent : true,
		clearSessionUrl : 'clear_session_json',
		articleType : 'consumable',
		deleteUrl: 'supportingDocumentConsumableFormSession_delete',
		addEditUrl: 'supportingdocumentconsumable_edit',
		indexUrl: 'supportingdocumentconsumable_index',
		familyUrl: 'Sub_family_index',
		subFamilyUrl: 'json_subFamily_index',
		articleUrl: 'json_article_index',
		inventoryNumberUrl: 'json_InventoryNumber_generate'
	};

})(jQuery);