/*

Copyright 2016 Rami Sfari

Version: 1.0 Timestamp: jeu.  5 mai 2016 14:01:29

*/

(function ($) {
	$.fn.orderArticle = function (options) {

		// get id de bond commande
		if (jQuery.isNumeric($(location).attr('href').substring($(location).attr('href').lastIndexOf('/') + 1))){
		    var order_id_edit = $(location).attr('href').substring($(location).attr('href').lastIndexOf('/') + 1);
		}

		// get les option
		var opts = $.extend( {}, $.fn.orderArticle.defaults, options );
		
		var max = 1000;
		var min = 1;
		var id = 0;
		var trigger = true;

		oTable.api().column( 2 ).visible( false );
		oTable.api().column( 3 ).visible( false );

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

		$("select").removeClass("form-control");

		var opts1=$("#source").html(), opts2="<option></option>"+opts1;
		$("select.populate").each(function() { var e=$(this); e.html(e.hasClass("placeholder")?opts2:opts1); });

		$("select").select2({width: '100%'});

		listDetail();

		// detail form validation
		$('#detail_order_article_article').select2().on("change", function() {
		    if ($(this).val() == ""){
				$("#article_error").text(Translator.trans('formError.notNull', {}, 'messages'));
			}else{
				//getAllStock ($(this).val());
				$("#article_error").text("");
			}      
		});

		$('#detail_order_article_quantity').on('input', function() {
			if (($(this).val() < max )  && ($(this).val() > min)){
				$("#quantity_error").text("");
			}else{
				$("#quantity_error").text(Translator.trans('formError.quantity', {}, 'messages'));
			}
		});

		// error field form validation
		$("#form .form-group:eq( 1 )").append("<div id='error-1' class='text-danger col-sm-7'></div>");
		$("#form .form-group:eq( 2 )").append("<div id='error-2' class='text-danger col-sm-offset-3 col-sm-7'></div>");
		// article management form validation

		$('#order_article_date').on('change', function() {
			if ($(this).val() == ""){
		    	$("#form .form-group:eq( 1 )").addClass("has-error");
		    	$('#error-1').text(Translator.trans('formError.notNull', {}, 'messages'));
				}else{
				$("#form .form-group:eq( 1 )").removeClass("has-error");
				$('#error-1').text("");
			}     
		});
		$('#order_article_observation').on("input", function() {
		    if ($(this).val() == ""){
		    	$("#form .form-group:eq( 2 )").addClass("has-error");
				$('#error-2').text(Translator.trans('formError.notNull', {}, 'messages'));
			}else{
				$("#form .form-group:eq( 2 )").removeClass("has-error");
				$('#error-2').text("");
			}      
		});

		// jquery event 
		$( "#new" ).click(function() {
		  	if (valide ()){
		  		if (opts.action == 'add')
		  			addDetail();
		  		else
		  			addEditDetail ();

		  		clearForm ();
		  	}
		  		
		  		
		});
		$( "#edit" ).click(function() {
		  	if (valide ()){

		  		if (opts.action == 'add')
		  			updateDetail(id);
		  		else
		  			updateEditDetail(id);
		  		
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
		  	$("#submit").hide();
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
			$( "#prev" ).trigger('click');
			if ( ($("#order_article_date").val() != "") && ($("#order_article_observation").val() != "") ){
				$("#form").submit();
			}else{
				$('#order_article_date').trigger( "change" );
				$('#order_article_observation').trigger( "input" );
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
		
		function addDetail() {
			
				$.ajax({
					type: 'POST',
					contentType: 'application/json',
					url: Routing.generate(opts.addEditUrl),
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

		function updateEditDetail(val) {
				$.ajax({
				type: 'POST',
				contentType: 'application/json',
				url: Routing.generate(opts.addEditUrl, { id : order_id_edit , idDetail :  val }),
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
		
		function addEditDetail() {
			
				$.ajax({
					type: 'POST',
					contentType: 'application/json',
					url: Routing.generate(opts.addEditUrl, { id : order_id_edit }),
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
						"article"   		: $('#detail_order_article_article').val(),
						"quantity"			: $('#detail_order_article_quantity').val()
				});
		}

		function edit_formToJSON (){
			return JSON.stringify({
						"id"				: id, 
						"article"   		: $('#detail_order_article_article').val(),
						"quantity"			: $('#detail_order_article_quantity').val()
				});
		}

		function listDetail () {
			 animation();
			var animationEnd = 0;
				var id = setInterval(frame, 20);
				  function frame() {
				    if (animationEnd == 100) {
				      	clearInterval(id);
				      	if (opts.action == 'add')
				      		getlistDetail();
				      	else
				      		edit_getlistDetail();
				      	
				    } else {
				      animationEnd++;
				    }
				  }
				if (animationEnd == 100){
					
				}
		}

		function edit_getlistDetail() {
		    	
		        $.ajax({
		        url: Routing.generate(opts.indexUrl , {id : order_id_edit}),
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
		            	oTable.fnAddData( [
						            detail.article_designation,
						            detail.quantity,
						            detail.family,
						            detail.subFamily,
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
				        var orderArticle = $.grep(data, function (element) {
						    return element.id == id;
						});
				        orderArticle = orderArticle[0];
		            	$('#detail_order_article_family ').select2().select2('val',orderArticle.family_id);
		            	$('#detail_order_article_subFamily').attr('disabled', false);
						$('#detail_order_article_subFamily  option[value!=""]').remove();
						$('#detail_order_article_article').attr('disabled', false);
				        $('#detail_order_article_article option[value!=""]').remove();
				            	
		            	$.ajax({
				            url: Routing.generate(opts.familyUrl, { id: orderArticle.family_id }),
				            type: 'POST',
				            dataType: 'json',
				            success: function(json){
				                $.each(json, function(index, value) {
				                	$('#detail_order_article_subFamily').append('<option value="'+ value.id +'">'+ value.designation +'</option>');
				                });
				                $('#detail_order_article_subFamily').select2().select2('val',orderArticle.subFamily_id,false); 
				            }
				        });
				           	
				            	
                		$.ajax({
				            url: Routing.generate(opts.subFamilyUrl, { id: orderArticle.subFamily_id }),
				            type: 'POST',
				            dataType: 'json',
				            success: function(json){
				        		
				                $.each(json, function(index, value) {
				                	$('#detail_order_article_article').append('<option value="'+ value.id +'">'+ value.designation +'</option>');
				                });
				                $('#detail_order_article_article').select2().select2("val",orderArticle.article_id,false);
				            }
				        });
						
		                $('#detail_order_article_quantity').val(orderArticle.quantity);
		                $('#new').hide();
		                $('#edit').show();
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
		            oTable.fnLengthChange( 100000 );
					oTable.fnDraw();
		            $.each(data, function(index, detail) {
		            	oTable.fnAddData( [
						            detail.article_designation,
						            detail.quantity,
						            detail.family,
						            detail.subFamily,
						            '<div class="btn-group">'+
		                                '<button value="'+detail.article_id+'" class="btn btn-info-alt edit"><i class="ti ti-pencil-alt"></i></button>'+
		                                '<button data-box="#'+ detail.article_id +'" class="btn btn-danger-alt mb-control"><i class="ti ti-trash"></i></button>'+
		                            '</div>'
						        ] );
		                
						$('#dialog').append('<!-- MESSAGE BOX-->'+
		                                    '<div class="message-box " data-sound="alert" id="'+ detail.article_id +'">'+
		                                        '<div class="mb-container">'+
		                                            '<div class="mb-middle">'+
		                                                '<div class="mb-title"><span class="ti ti-trash"></span>'+Translator.trans('detail.delete.name', {}, 'messages')+' ?</div>'+
		                                                '<div class="mb-content">'+
		                                                    '<p>'+Translator.trans('detail.delete.message', {}, 'messages')+'</p>'+                    
		                                                    
		                                                '</div>'+
		                                                '<div class="mb-footer">'+
		                                                    '<div class="pull-right">'+ 
		                                                    	'<div class="btn-group">'+
			                                                        '<button value="'+detail.article_id+'" class="btn btn-danger btn-lg mb-control-close delete"><i class="icon-trash"></i>'+Translator.trans('messageBox.yes', {}, 'messages')+
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
				        var orderArticle = $.grep(data, function (element) {
						    return element.article_id == id;
						});
				        orderArticle = orderArticle[0];
		            	$('#detail_order_article_family ').select2().select2('val',orderArticle.family_id,false);
		            	$('#detail_order_article_subFamily').attr('disabled', false);
						$('#detail_order_article_subFamily  option[value!=""]').remove();
						$('#detail_order_article_article').attr('disabled', false);
				        $('#detail_order_article_article option[value!=""]').remove();
				            	
		            	$.ajax({
				            url: Routing.generate(opts.familyUrl, { id: orderArticle.family_id }),
				            type: 'POST',
				            dataType: 'json',
				            success: function(json){
				                $.each(json, function(index, value) {
				                	$('#detail_order_article_subFamily').append('<option value="'+ value.id +'">'+ value.designation +'</option>');
				                });
				                $('#detail_order_article_subFamily').select2().select2('val',orderArticle.subFamily_id,false); 
				            }
				        });
				           	
				            	
                		$.ajax({
				            url: Routing.generate(opts.subFamilyUrl, { id: orderArticle.subFamily_id }),
				            type: 'POST',
				            dataType: 'json',
				            success: function(json){
				        		
				                $.each(json, function(index, value) {
				                	$('#detail_order_article_article').append('<option value="'+ value.id +'">'+ value.designation +'</option>');
				                });
				                $('#detail_order_article_article').select2().select2("val",orderArticle.article_id,false);
				            }
				        });
						
		                $('#detail_order_article_quantity').val(orderArticle.quantity);
		                $('#new').hide();
		                $('#edit').show();
		                return false;
		            });

					oTable.fnLengthChange( 3 );
					oTable.fnDraw();
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
			
			
			$("#detail_order_article_subFamily").select2().select2('val','');
			$("#detail_order_article_family").select2().select2('val','');
			$("#detail_order_article_article").select2().select2('val','');
			$('#detail_order_article_quantity').val("");
			$('#new').show();
			$('#edit').hide();
		}

		function valide () {
			
			if ( ($("#detail_order_article_article").val() != "") && ($('#detail_order_article_quantity').val() < max)  &&  ($('#detail_order_article_quantity').val() > min)&&  ($('#detail_order_article_quantity').val() != "") ){
				
				return true;

			}else{
				
				$('#detail_order_article_quantity').trigger( "input" );
				$('#detail_order_article_article').trigger( "change" );
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
		
		// init select Form
		$('#detail_order_article_subFamily option[value!=""]').remove();
		$('#detail_order_article_subFamily').attr('disabled', true);

		$('#detail_order_article_article option[value!=""]').remove();
		$('#detail_order_article_article').attr('disabled', true);

		// event
		$('#detail_order_article_family').select2().on('change', function() {
		    if (this.value == ""){
		    	$('#detail_order_article_subFamily').select2().select2('val','');
		        $('#detail_order_article_subFamily').attr('disabled', true);
		        $('#detail_order_article_subFamily option[value!=""]').remove();

		        $('#detail_order_article_article').select2().select2('val','');
		        $('#detail_order_article_article').attr('disabled', true);
		        $('#detail_order_article_article option[value!=""]').remove();
		    }else{
		        $.ajax({
		            url: Routing.generate(opts.familyUrl, { id: this.value }),
		            type: 'POST',
		            dataType: 'json',
		            success: function(json){
		            	if (json.length > 0){
		            		$('#detail_order_article_subFamily').select2().select2('val','');
		                	$('#detail_order_article_subFamily').attr('disabled', false);
		                	$('#detail_order_article_subFamily option[value!=""]').remove();
		                }else{
		                	$('#detail_order_article_subFamily').select2().select2('val','');
					         $('#detail_order_article_subFamily').attr('disabled', true);
					         $('#detail_order_article_subFamily option[value!=""]').remove();

					        $('#detail_order_article_article').select2().select2('val','');
		        			$('#detail_order_article_article').attr('disabled', true);
		        			$('#detail_order_article_article option[value!=""]').remove();
		                }
		                $.each(json, function(index, value) {
		                    $('#detail_order_article_subFamily').append('<option value="'+ value.id +'">'+ value.designation +'</option>');
		                });
		            }
		        });
		    
		    }
		});
		
		$('#detail_order_article_subFamily').select2().on('change', function() {
		    if (this.value == ""){
		    	$('#detail_order_article_article').select2().select2('val','');
		        $('#detail_order_article_article').attr('disabled', true);
		        $('#detail_order_article_article option[value!=""]').remove();
		    }else{
		        $.ajax({
		            url: Routing.generate(opts.subFamilyUrl, { id: this.value }),
		            type: 'POST',
		            dataType: 'json',
		            success: function(json){
		            	if (json.length > 0){
		            		$('#detail_order_article_article').select2().select2('val','');
		            		$('#detail_order_article_article').attr('disabled', false);
		                	$('#detail_order_article_article option[value!=""]').remove();
		            	}else{
		            		$('#detail_order_article_article').select2().select2('val','');
		        			$('#detail_order_article_article').attr('disabled', true);
		        			$('#detail_order_article_article option[value!=""]').remove();
		            	}
		               
		                $.each(json, function(index, value) {
		                    $('#detail_order_article_article').append('<option value="'+ value.id +'">'+ value.designation +'</option>');
		                });
		            }
		        });
		    
		    }
		});
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
	
	$.fn.orderArticle.defaults = {
	    max : 1000,
		min : 0,
		triggerEvent : true,
		action : "add",
		clearSessionUrl : 'clear_session_json',
		deleteUrl: 'detailOrderFormSession_delete',
		addEditUrl: 'detailOrderArticle_new',
		indexUrl: 'detailOrderArticle_index',
		familyUrl: 'Sub_family_index',
		subFamilyUrl: 'json_subFamily_index',
	};
	
})(jQuery);