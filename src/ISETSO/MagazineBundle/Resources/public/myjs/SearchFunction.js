function findAllStock() {
        $.ajax({
        url: Routing.generate('search_stock_json_show'),
        type: 'GET',
        dataType: 'json',
        success: function(json){
            $.each(json, function(index, value) {
                renderJournal (value);
                
            });

            if (json.length == 10){
                $('#body').append('<div class="col-md-12">'+
                                '<a class="btn-loadmore" href="#">'+
                                '<i class="fa fa-plus"></i>'+
                                'load more products</a>'+   
                            '</div>');
            }
        }
    });
}

function findAllBL() {
    
        $.ajax({
        url: Routing.generate('bl_json_show'),
        type: 'GET',
        dataType: 'json',
        success: function(json){

            $.each(json, function(index, value) {
                renderJournal (value);

                
            });
        }
    });
}

function findAllFacture() {
    
        $.ajax({
        url: Routing.generate('facture_json_show'),
        type: 'GET',
        dataType: 'json',
        success: function(json){

            $.each(json, function(index, value) {
                renderJournal (value);
            });
        }
    });
}

function findAllReturn() {
        $.ajax({
        url: Routing.generate('return_json_show'),
        type: 'GET',
        dataType: 'json',
        success: function(json){

            $.each(json, function(index, value) {
                 
                renderArticleManagement (value);
                
            });
        }
    });
}

function findAllOrder() {
    
        $.ajax({
        url: Routing.generate('order_json_show'),
        type: 'GET',
        dataType: 'json',
        success: function(json){

            $.each(json, function(index, value) {
                 renderArticleManagement (value);

                
            });
        }
    });
}

function findAllDischargeToMagazine() {
    
        $.ajax({
        url: Routing.generate('dischargeToMagazine_json_show'),
        type: 'GET',
        dataType: 'json',
        success: function(json){

            $.each(json, function(index, value) {
                 renderArticleManagement (value);
       });
        }
    });
}

function findAllDischargeToUser(){
    
        $.ajax({
        url: Routing.generate('dischargeToUser_json_show'),
        type: 'GET',
        dataType: 'json',
        success: function(json){

            $.each(json, function(index, value) {
                 renderArticleManagement (value);
        });
        }
    });
}

function findByOneDischargeToMagazine(id) {
    
        $.ajax({
        url: Routing.generate('magazine_stock_json_show', { id: id} ),
        type: 'GET',
        dataType: 'json',
        success: function(json){

            $.each(json, function(index, value) {
                 renderArticleManagement (value);

                
            });
        }
    });
}

function renderJournal (value) {
    $('#body').append('<div class="product">'+
                    '<div class="product__info">'+
                        '<img class="product__image" src="'+img+'" />'+
                        '<h3 class="product__title">'+value.article_name+'</h3>'+
                        '<span class="product__price highlight">'+value.price+'  '+Translator.trans('magazine.devise', {}, 'messages')+'</span>'+
                        '<span class="product__price highlight">'+value.quantity+'  '+value.unit+'</span>'+
                        '<button id="modal-" class="action action--button action--buy">'+
                        '<i class="fa fa-shopping-cart"></i>'+
                        '<span class="action__text"> Plus Detail</span></button>'+
                    '</div>'+
                '</div>');
    
    /*$('#body').append('<div class="col-md-4">'+
                    '<div class="panel panel-default">'+
                        '<div class="panel-heading">'+
                            '<h2><i class="ti ti-save-alt"></i>'+value.article_name+'</h2>'+
                            
                        '</div>'+
                        '<div class="panel-body">'+
                            '<div class="embed-responsive embed-responsive-4by3">'+
                                '<img src="'+img+'">'+
                            '</div>'+
                        '</div>'+
                        '<ul class="list-group">'+
                            '<li class="list-group-item">'+
                                '<span class="badge">'+value.price+'  '+Translator.trans('magazine.devise', {}, 'messages')+'</span>'+
                                Translator.trans('magazine.field.price', {}, 'messages')+
                            '</li>'+
                            '<li class="list-group-item">'+
                                '<span class="badge">'+value.quantity+'  '+value.unit+'</span>'+
                                Translator.trans('magazine.field.quantity', {}, 'messages')+
                            '</li>'+
                        '</ul>'+
                        
                    '</div>'+
                '</div>');*/
}

function renderArticleManagement (value) {
    $('#body').append('<div class="product">'+
                    '<div class="product__info">'+
                        '<img class="product__image" src="'+img+'" />'+
                        '<h3 class="product__title">'+value.article_name+'</h3>'+
                        '<span class="product__price highlight">'+value.quantity+'  '+value.unit+'</span>'+
                        '<button id="modal-" class="action action--button action--buy">'+
                        '<i class="fa fa-shopping-cart"></i>'+
                        '<span class="action__text"> Plus Detail</span></button>'+
                    '</div>'+
                '</div>');
    /*$('#body').append('<div class="col-md-4">'+
                    '<div class="panel panel-default">'+
                        '<div class="panel-heading">'+
                            '<h2><i class="ti ti-save-alt"></i>'+value.article_name+'</h2>'+
                            
                        '</div>'+
                        '<div class="panel-body">'+
                            '<div class="">'+
                                '<img src="'+img+'">'+
                            '</div>'+
                        '</div>'+
                        '<ul class="list-group">'+
                            '<li class="list-group-item">'+
                                '<span class="badge">'+value.quantity+'  '+value.unit+'</span>'+
                                Translator.trans('magazine.field.quantity', {}, 'messages')+
                            '</li>'+
                        '</ul>'+
                        
                    '</div>'+
                '</div>');*/
}

