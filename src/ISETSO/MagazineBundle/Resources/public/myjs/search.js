findAllStock();
findAllBL();
findAllFacture();

$('#stock').click(function () {
	$('#body').empty();
	findAllStock();
});

$('#bl').click(function () {
	$('#body').empty();
	findAllBL();
});

$('#facture').click(function () {
	$('#body').empty();
	findAllFacture();
});

$('#order').click(function () {
	$('#body').empty();
	findAllOrder();
});

$('#return').click(function () {
	$('#body').empty();
	findAllReturn();
});

$('#discharge').click(function () {
	 $('#body').empty();
	findAllDischargeToMagazine();
	findAllDischargeToUser();
});

$('.stock').click(function () {
	$('#body').empty();
	findByOneDischargeToMagazine($(this).attr( 'id' ));
});
