// -------------------------------
// Initialize Data Tables
// -------------------------------
jQuery.fn.dataTableExt.oApi.fnLengthChange = function ( oSettings, iDisplay )
{
    oSettings._iDisplayLength = iDisplay;
    oSettings.oApi._fnCalculateEnd( oSettings );

    /* If we have space to show extra rows (backing up from the end point - then do so */
    if ( oSettings._iDisplayEnd == oSettings.aiDisplay.length )
    {
        oSettings._iDisplayStart = oSettings._iDisplayEnd - oSettings._iDisplayLength;
        if ( oSettings._iDisplayStart < 0 )
        {
            oSettings._iDisplayStart = 0;
        }
    }

    if ( oSettings._iDisplayLength == -1 )
    {
        oSettings._iDisplayStart = 0;
    }

    oSettings.oApi._fnDraw( oSettings );

    if ( oSettings.aanFeatures.l )
    {
        $('select', oSettings.aanFeatures.l).val( iDisplay );
    }
};

var dataTable_setting = {
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
};
var oTable = $('#example').dataTable(dataTable_setting);

$('#example_length').hide();


//DOM Manipulation to move datatable elements integrate to panel
$('.search').append($('.dataTables_filter').addClass("pull-right")).find("label").addClass("panel-ctrls-center");
$('.search').append("<i class='separator'></i>");
$('.search').append($('.dataTables_length').addClass("pull-left")).find("label").addClass("panel-ctrls-center");

$('.footer-dataTable').append($(".dataTable+.row"));
$('.dataTables_paginate>ul.pagination').addClass("pull-right m-n");
