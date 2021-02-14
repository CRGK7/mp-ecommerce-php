<?php
	// SDK de Mercado Pago
	require __DIR__ .  '/vendor/autoload.php';

	// Agrega credenciales
	//MercadoPago\SDK::setAccessToken('TEST-5619069589485548-021302-df1893dea17ef538a2af19ea766a98f0-240542315'); //Yo
	MercadoPago\SDK::setAccessToken('TEST-74762566899515-021305-bad1a08ca4786adeb7cfa3887e7c33bf-714940306');


	// Crea un objeto de preferencia
	$preference = new MercadoPago\Preference();
	$preference->back_urls = array(
	    "success" => "https://crgk7-mp-ecommerce-php.herokuapp.com/response.php",
	    "failure" => "https://crgk7-mp-ecommerce-php.herokuapp.com/error.php?error=failure",
	    "pending" => "https://crgk7-mp-ecommerce-php.herokuapp.com/error.php?error=pending"
	);
	$preference->auto_return = "approved";
	// Crea un ítem en la preferencia
	$item = new MercadoPago\Item();
	$item->id = "1234";
	$item->title = 'Mi producto';
	$item->description = 'Dispositivo móvil de Tienda e-commerce';
	$item->category_id = "phones";
	$item->quantity = 1;
	$item->unit_price = 75.56;
	$item->currency_id = "PEN";
	$preference->items = array($item);
	$preference->save();

	$payer = new MercadoPago\Payer();
	$payer->name = "Lalo";
	$payer->surname = "Landa";
	$payer->email = "charles@hotmail.com";
	$payer->date_created = "2018-06-02T12:58:41.425-04:00";
	$payer->phone = array(
	"area_code" => "52",
	"number" => "5549737300"
	);

	$payer->identification = array(
	"type" => "DNI",
	"number" => "22334445"
	);

	$payer->address = array(
	"street_name" => "Insurgentes Sur",
	"street_number" => 1602,
	"zip_code" => "03940"
	);
?>

<!-- curl -X POST -H "Content-Type: application/json" -H "Authorization: Bearer TEST-5619069589485548-021302-df1893dea17ef538a2af19ea766a98f0-240542315" "https://api.mercadopago.com/users/test_user" -d "{'site_id':'MPE'}"

{"id":714940306,"nickname":"TESTAQBH8UUI","password":"qatest3838","site_status":"active","email":"test_user_78053500@testuser.com"} //vendedor
{"id":714942473,"nickname":"TESTRQ3BOTW5","password":"qatest6932","site_status":"active","email":"test_user_48070331@testuser.com"} //comprador -->

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="https://crgk7-mp-ecommerce-php.herokuapp.com/response.php" method="POST">
		<script
          src="https://www.mercadopago.com.pe/integrations/v1/web-payment-checkout.js"
          data-preference-id="<?php echo $preference->id; ?>">
        </script>
	</form>
</body>
</html>