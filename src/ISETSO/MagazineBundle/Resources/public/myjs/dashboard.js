function findNotification() {
    
        $.ajax({
        url: Routing.generate('notification_json_show', { choice: 2 }),
        type: 'POST',
        dataType: 'json',
        success: function(json){
            $('#notification_list').empty();

            $.each(json, function(index, value) {
                var newDate = new Date();
                newDate.setDate(value.date);
                $('#notification_list').append("<li class=\"mini-timeline-lime\">"+
                    "<div class=\"timeline-icon\"></div>"+
                    "<div class=\"timeline-body\">"+
                        "<div class=\"timeline-content\">"+
                            "<a href=\"#/\" class=\"name\">"+value.username+" </a> "+Translator.trans(value.action, {}, 'messages')+" <a href="+value.link+"> "+Translator.trans(value.message)+"</a>"+
                            "<span class=\"time\">"+newDate+"</span>"+
                        "</div>"+
                    "</div>"+
                "</li>");

                
            });
        }
    });
}

function getConnectedUser() {
    
        $.ajax({
        url: Routing.generate('user_onligne_json_show'),
        type: 'POST',
        dataType: 'json',
        success: function(json){
            $.each(json, function(index, value) {
                $('#user_onligne').append("<li class=\"mini-timeline-lime\">"+
                    "<div class=\"timeline-icon\"></div>"+
                    "<div class=\"timeline-body\">"+
                        "<div class=\"timeline-content\">"+
                            "<a href=\"#/\" class=\"name\">"+value.username+" </a> "+
                        "</div>"+
                    "</div>"+
                "</li>");
            });
            
            $('#number_user').empty().append(json.length);
            var dxta = json,
                    totalPoints = 10;
                var updateInterval = 1000;

                function getRandomData() {

                    if (dxta.length > 0)
                        dxta = dxta.slice(1);

                    // Do a random walk

                    while (dxta.length < totalPoints) {

                        var prev = dxta.length > 0 ? dxta[dxta.length - 1] : 25,
                            y = Math.random(json.length);

                        if (y < 0) {
                            y = 0;
                        } else if (y > 33) {
                            y = 50;
                        }

                        dxta.push(y);
                    }

                    // Zip the generated y values with the x values

                    var res = [];
                    for (var i = 0; i < dxta.length; ++i) {
                        res.push([i, dxta[i]])
                    }

                    return res;
                }

                var plot = $.plot("#realtime-updates", [ getRandomData() ], {
                    series: {
                        bars: {
                            show: true,
                            lineWidth: 0,
                            barWidth: 0.75,
                            fill: 0.4
                        },
                        shadowSize: 0   // Drawing is faster without shadows
                    },
                    grid: {
                        labelMargin: 8,
                        hoverable: true,
                        clickable: true,
                        borderWidth: 0,
                        borderColor: '#f5f5f5'
                    },
                    yaxis: {
                        min: 0,
                        max: 10,
                        ticks: [0, 5, 10],
                        tickColor: '#f5f5f5', 
                        font: {color: '#bdbdbd', size: 12}
                    },
                    xaxis: {
                        show: false
                    },
                    colors: ['#00bcd4'],
                    tooltip: true,
                    tooltipOpts: {
                        content: "Active User: %y"
                    }

                });

                function update() {

                    plot.setData([getRandomData()]);

                    // Since the axes don't change, we don't need to call plot.setupGrid()

                    plot.draw();
                    setTimeout(update, updateInterval);
                }

                update();
        }
    });
}

function journalChart () {
    var stock = [];
    var bl = [];
    var facture = [];
    $.ajax({
        url: Routing.generate('journal_json_show'),
        type: 'POST',
        dataType: 'json',
        success: function(json){
            $.each(json, function(index, value) {
                var nb_stock = 0;
                var nb_bl = 0;
                var nb_facture = 0;
                switch (value.type){
                    case "Stock" : 
                        nb_stock = 10;
                        break;
                    case "Bl" : 
                        nb_bl = 10;
                        break;
                    case "Facture" : 
                        nb_facture = 10;
                        break;
                }
            stock = [value.month , nb_stock];
            bl = [value.month , nb_bl];
            facture = [value.month , nb_facture];
            });
        }
    });
    
var plot = $.plot($("#socialstats"),
[{ data: stock, label: "Stock" },
  { data: facture, label: "Bl" },
 { data: bl, label: "Facture" }], {
    series: {

        shadowSize: 0,
        lines: { 
            show: false,
            lineWidth: 0
        },
        points: { show: true },
        splines: {
            show: true,
            fill: 0.08,
            tension: 0.3, // float between 0 and 1, defaults to 0.5
            lineWidth: 2 // number, defaults to 2
        },
    },
    grid: {
        labelMargin: 8,
        hoverable: true,
        clickable: true,
        borderWidth: 0,
        borderColor: '#fafafa'
    },
    legend: {
        backgroundColor: '#fff',
        margin: 8
    },
    yaxis: { 
        min: 0, 
        max: 100, 
        tickColor: '#fafafa', 
        font: {color: '#bdbdbd', size: 12},
        // tickFormatter: function (val, axis) {
        //     if (val>999) {return (val/1000) + "K";} else {return val;}
        // }
    },
    xaxis: { 
        tickColor: 'transparent',
        tickDecimals: 0, 
        font: {color: '#bdbdbd', size: 12}
    },
    colors: ['#9fa8da', '#80deea'],
    tooltip: true,
    tooltipOpts: {
        content: "x: %x, y: %y"
    }
});
}
function journal_by_qte () {
    var nb_stock = 0;
    var nb_bl = 0;
    var nb_facture = 0;
    $.ajax({
        url: Routing.generate('journal_by_qte_json_show'),
        type: 'POST',
        dataType: 'json',
        success: function(json){
            $.each(json, function(index, value) {
                if (value.type == 'Stock'){
                    nb_stock = value.quantity;
                }
                if (value.type == 'BL'){
                    nb_bl = value.quantity;
                }
                if (value.type == 'Facture'){
                    nb_facture = value.quantity;
                
                }
            });
            Morris.Donut({
                element: 'donut-example',
                data: [
                    {label: Translator.trans('search.stock', {}, 'messages'), value: nb_stock},
                    {label: Translator.trans('search.bl', {}, 'messages'), value: nb_bl},
                    {label: Translator.trans('search.facture', {}, 'messages'), value: nb_facture}
                ],
                colors: [Utility.getBrandColor('inverse'), Utility.getBrandColor('midnightblue'), Utility.getBrandColor('green')]
                });
            }
    });
    
}
$('#real-Time').on('change', function() {
    setInterval(getConnectedUser(), 1000);
 });
findNotification();
getConnectedUser();
journal_by_qte ();
//journalChart();