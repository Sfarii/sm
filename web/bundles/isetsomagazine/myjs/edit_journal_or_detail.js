$("select").removeClass("form-control");
var opts=$("#source").html(), opts2="<option></option>"+opts;
$("select.populate").each(function() { var e=$(this); e.html(e.hasClass("placeholder")?opts2:opts); });

$("select").select2({width: '100%'});