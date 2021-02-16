<?php
    // Capturar valores
    $titulo = $_POST['title'];
    $precio = $_POST['price'];
    $precio2 = $_POST['price2'];
    $cantidad = $_POST['unit'];

    if ($titulo == "" || $precio == "" || $precio2 == "" || $cantidad == "") {
    	header("location:index.php");
    }

    // SDK de Mercado Pago
    require __DIR__ .  '/vendor/autoload.php';
    MercadoPago\SDK::setIntegratorId("dev_2e4ad5dd362f11eb809d0242ac130004");

    // Agrega credenciales
    //MercadoPago\SDK::setAccessToken('TEST-5619069589485548-021302-df1893dea17ef538a2af19ea766a98f0-240542315'); //Yo
    //MercadoPago\SDK::setAccessToken('TEST-74762566899515-021305-bad1a08ca4786adeb7cfa3887e7c33bf-714940306'); //Prueba
    MercadoPago\SDK::setAccessToken('APP_USR-8208253118659647-112521-dd670f3fd6aa9147df51117701a2082e-677408439'); 

	/*curl -X POST -H "Content-Type: application/json" -H "Authorization: Bearer TEST-5619069589485548-021302-df1893dea17ef538a2af19ea766a98f0-240542315" "https://api.mercadopago.com/users/test_user" -d "{'site_id':'MPE'}"

	{"id":714940306,"nickname":"TESTAQBH8UUI","password":"qatest3838","site_status":"active","email":"test_user_78053500@testuser.com"} //vendedor
	{"id":714942473,"nickname":"TESTRQ3BOTW5","password":"qatest6932","site_status":"active","email":"test_user_48070331@testuser.com"} //comprador*/

	/*curl -X GET "https://api.mercadopago.com/v1/payments/13706680050" -H "Authorization: Bearer APP_USR-8208253118659647-112521-dd670f3fd6aa9147df51117701a2082e-677408439"*/
    
    /*id
	{"additional_info":{"available_balance":null,"ip_address":"200.106.118.243","nsu_processadora":null},"authorization_code":"1234567","binary_mode":false,"brand_id":null,"call_for_authorize_id":null,"captured":true,"card":{"cardholder":{"identification":{"number":"12345678","type":"DNI"},"name":"APRO"},"date_created":"2021-02-13T17:21:21.000-04:00","date_last_updated":"2021-02-13T17:21:21.000-04:00","expiration_month":11,"expiration_year":2025,"first_six_digits":"503175","id":null,"last_four_digits":"0604"},"charges_details":[],"collector_id":677408439,"corporation_id":null,"counter_currency":null,"coupon_amount":0,"currency_id":"PEN","date_approved":"2021-02-13T17:21:22.000-04:00","date_created":"2021-02-13T17:21:21.000-04:00","date_last_updated":"2021-02-13T17:21:22.000-04:00","date_of_expiration":null,"deduction_schema":null,"description":"Samsung Galaxy S9","differential_pricing_id":null,"external_reference":"wcordova96sistemas7@gmail.com","fee_details":[{"amount":707.68,"fee_payer":"collector","type":"mercadopago_fee"}],"id":13683223725,"installments":6,"integrator_id":null,"issuer_id":"12347","live_mode":true,"marketplace_owner":null,"merchant_account_id":null,"merchant_number":null,"metadata":{},"money_release_date":"2021-02-13T17:21:22.000-04:00","money_release_schema":null,"notification_url":null,"operation_type":"regular_payment","order":{"id":"2327119759","type":"mercadopago"},"payer":{"email":"test_user_46542185@testuser.com","entity_type":null,"first_name":"Test","id":"681051270","identification":{"number":"20555212390","type":"RUC"},"last_name":"Test","operator_id":null,"phone":{"area_code":"01","extension":null,"number":"1111-1111"},"type":"registered"},"payment_method_id":"master","payment_type_id":"credit_card","platform_id":null,"point_of_interaction":{},"pos_id":null,"processing_mode":"aggregator","refunds":[],"shipping_amount":0,"sponsor_id":null,"statement_descriptor":null,"status":"approved","status_detail":"accredited","store_id":null,"taxes_amount":0,"transaction_amount":15000,"transaction_amount_refunded":0,"transaction_details":{"acquirer_reference":null,"external_resource_url":null,"financial_institution":null,"installment_amount":2500,"net_received_amount":14292.32,"overpaid_amount":0,"payable_deferral_period":null,"payment_method_reference_id":"1234567","total_paid_amount":15000}}*/

	/*	{"additional_info":{"available_balance":null,"ip_address":"200.106.118.243","nsu_processadora":null},"authorization_code":"1234567","binary_mode":false,"brand_id":null,"call_for_authorize_id":null,"captured":true,"card":{"cardholder":{"identification":{"number":"88888888","type":"DNI"},"name":"APRO"},"date_created":"2021-02-13T20:23:03.000-04:00","date_last_updated":"2021-02-13T20:23:03.000-04:00","expiration_month":11,"expiration_year":2025,"first_six_digits":"503175","id":null,"last_four_digits":"0604"},"charges_details":[],"collector_id":677408439,"corporation_id":null,"counter_currency":null,"coupon_amount":0,"currency_id":"PEN","date_approved":"2021-02-13T20:23:04.000-04:00","date_created":"2021-02-13T20:23:03.000-04:00","date_last_updated":"2021-02-13T20:23:04.000-04:00","date_of_expiration":null,"deduction_schema":null,"description":"Samsung Galaxy S9","differential_pricing_id":null,"external_reference":"wcordova96sistemas7@gmail.com","fee_details":[{"amount":707.68,"fee_payer":"collector","type":"mercadopago_fee"}],"id":13685411196,"installments":6,"integrator_id":null,"issuer_id":"12347","live_mode":true,"marketplace_owner":null,"merchant_account_id":null,"merchant_number":null,"metadata":{},"money_release_date":"2021-02-13T20:23:04.000-04:00","money_release_schema":null,"notification_url":null,"operation_type":"regular_payment","order":{"id":"2327765902","type":"mercadopago"},"payer":{"email":"test_user_46542185@testuser.com","entity_type":null,"first_name":"Test","id":"681051270","identification":{"number":"20555212390","type":"RUC"},"last_name":"Test","operator_id":null,"phone":{"area_code":"01","extension":null,"number":"1111-1111"},"type":"registered"},"payment_method_id":"master","payment_type_id":"credit_card","platform_id":null,"point_of_interaction":{},"pos_id":null,"processing_mode":"aggregator","refunds":[],"shipping_amount":0,"sponsor_id":null,"statement_descriptor":null,"status":"approved","status_detail":"accredited","store_id":null,"taxes_amount":0,"transaction_amount":15000,"transaction_amount_refunded":0,"transaction_details":{"acquirer_reference":null,"external_resource_url":null,"financial_institution":null,"installment_amount":2500,"net_received_amount":14292.32,"overpaid_amount":0,"payable_deferral_period":null,"payment_method_reference_id":"1234567","total_paid_amount":15000}}*/

    // Crea un objeto de preferencia
    $preference = new MercadoPago\Preference();
    $preference->back_urls = array(
        "success" => "https://crgk7-mp-ecommerce-php.herokuapp.com/success.php",
        "failure" => "https://crgk7-mp-ecommerce-php.herokuapp.com/failure.php",
        "pending" => "https://crgk7-mp-ecommerce-php.herokuapp.com/pending.php"
    );
    $preference->auto_return = "approved";
    //$preference->init_point = "https://www.mercadopago.com.pe/integrations/v1/web-payment-checkout.js";
    $preference->external_reference = "wcordova96crgk7@gmail.com";
    $preference->integrator_id = "dev_2e4ad5dd362f11eb809d0242ac130004";

    // Crea un ítem en la preferencia
    $item = new MercadoPago\Item();
    $item->id = "1234";
    $item->title = "$titulo";
    $item->description = 'Dispositivo móvil de Tienda e-commerce';
    $item->category_id = "phones";
    $item->quantity = "$cantidad";
    $item->unit_price = "$precio";
    $item->currency_id = "PEN";
    $preference->items = array($item);
    $preference->save();

    $payment = new MercadoPago\Payment();
    //$payment->token = "YOUR_CARD_TOKEN";
    $payment->id = "dev_2e4ad5dd362f11eb809d0242ac130004";
    $payment->installments = 6;
    $payment->default_installments = 6;

    $payer = new MercadoPago\Payer();
    $payer->name = "Lalo";
    $payer->surname = "Landa";
    $payer->email = "test_user_46542185@testuser.com";
    $fecha_hora_actual=date("Y-m-d H:i:s");
    $fecha_hora_iso = date("c", strtotime($fecha_hora_actual));
    $payer->date_created = "$fecha_hora_iso";
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
<!DOCTYPE html>
<html class="supports-animation supports-columns svg no-touch no-ie no-oldie no-ios supports-backdrop-filter as-mouseuser" lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=1024">
    <title>Tienda e-commerce</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="format-detection" content="telephone=no">

    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./assets/category-landing.css" media="screen, print">

    <link rel="stylesheet" href="./assets/category.css" media="screen, print">

    <link rel="stylesheet" href="./assets/merch-tools.css" media="screen, print">

    <link rel="stylesheet" href="./assets/fonts" media="">
    <style>
        .as-filter-button-text {
            font-size: 26px;
            font-weight: 700;
            color: #333;
        }
        .row.as-fixed-nav {
            border-bottom: 1px solid #ddd;
        }
        .as-producttile-tilehero.with-paddlenav.with-paddlenav-onhover {
            height: 330px;
        }
        .as-footnotes {
            background: #333;
            color: #fff;
            padding: 16px 40px;
        }
    </style>
    <style type="text/css"> @keyframes loading-rotate { 100% { transform: rotate(360deg); } } @keyframes loading-dash { 0% { stroke-dasharray: 1, 200; stroke-dashoffset: 0; } 50% { stroke-dasharray: 100, 200; stroke-dashoffset: -20px; } 100% { stroke-dasharray: 89, 200; stroke-dashoffset: -124px; } } @keyframes loading-fade-in { from { opacity: 0; } to { opacity: 1; } } .mp-spinner { position: absolute; top: 100px; left: 50%; font-size: 70px; margin-left: -35px; animation: loading-rotate 2.5s linear infinite; transform-origin: center center; width: 1em; height: 1em; } .mp-spinner-path { stroke-dasharray: 1, 200; stroke-dashoffset: 0; animation: loading-dash 1.5s ease-in-out infinite; stroke-linecap: round; stroke-width: 2px; stroke: #009ee3; } </style><style type="text/css"> .mercadopago-button { padding: 0 1.7142857142857142em; font-family: "Helvetica Neue", Arial, sans-serif; font-size: 0.875em; line-height: 2.7142857142857144; background: #009ee3; border-radius: 0.2857142857142857em; color: #fff; cursor: pointer; border: 0; } </style><style type="text/css"> @keyframes loading-rotate { 100% { transform: rotate(360deg); } } @keyframes loading-dash { 0% { stroke-dasharray: 1, 200; stroke-dashoffset: 0; } 50% { stroke-dasharray: 100, 200; stroke-dashoffset: -20px; } 100% { stroke-dasharray: 89, 200; stroke-dashoffset: -124px; } } @keyframes loading-fade-in { from { opacity: 0; } to { opacity: 1; } } .mp-spinner { position: absolute; top: 100px; left: 50%; font-size: 70px; margin-left: -35px; animation: loading-rotate 2.5s linear infinite; transform-origin: center center; width: 1em; height: 1em; } .mp-spinner-path { stroke-dasharray: 1, 200; stroke-dashoffset: 0; animation: loading-dash 1.5s ease-in-out infinite; stroke-linecap: round; stroke-width: 2px; stroke: #009ee3; } </style><style type="text/css"> .mercadopago-button { padding: 0 1.7142857142857142em; font-family: "Helvetica Neue", Arial, sans-serif; font-size: 0.875em; line-height: 2.7142857142857144; background: #009ee3; border-radius: 0.2857142857142857em; color: #fff; cursor: pointer; border: 0; } </style><style type="text/css"> @keyframes loading-rotate { 100% { transform: rotate(360deg); } } @keyframes loading-dash { 0% { stroke-dasharray: 1, 200; stroke-dashoffset: 0; } 50% { stroke-dasharray: 100, 200; stroke-dashoffset: -20px; } 100% { stroke-dasharray: 89, 200; stroke-dashoffset: -124px; } } @keyframes loading-fade-in { from { opacity: 0; } to { opacity: 1; } } .mp-spinner { position: absolute; top: 100px; left: 50%; font-size: 70px; margin-left: -35px; animation: loading-rotate 2.5s linear infinite; transform-origin: center center; width: 1em; height: 1em; } .mp-spinner-path { stroke-dasharray: 1, 200; stroke-dashoffset: 0; animation: loading-dash 1.5s ease-in-out infinite; stroke-linecap: round; stroke-width: 2px; stroke: #009ee3; } </style><style type="text/css"> .mercadopago-button { padding: 0 1.7142857142857142em; font-family: "Helvetica Neue", Arial, sans-serif; font-size: 0.875em; line-height: 2.7142857142857144; background: #009ee3; border-radius: 0.2857142857142857em; color: #fff; cursor: pointer; border: 0; } </style><style type="text/css"> @keyframes loading-rotate { 100% { transform: rotate(360deg); } } @keyframes loading-dash { 0% { stroke-dasharray: 1, 200; stroke-dashoffset: 0; } 50% { stroke-dasharray: 100, 200; stroke-dashoffset: -20px; } 100% { stroke-dasharray: 89, 200; stroke-dashoffset: -124px; } } @keyframes loading-fade-in { from { opacity: 0; } to { opacity: 1; } } .mp-spinner { position: absolute; top: 100px; left: 50%; font-size: 70px; margin-left: -35px; animation: loading-rotate 2.5s linear infinite; transform-origin: center center; width: 1em; height: 1em; } .mp-spinner-path { stroke-dasharray: 1, 200; stroke-dashoffset: 0; animation: loading-dash 1.5s ease-in-out infinite; stroke-linecap: round; stroke-width: 2px; stroke: #009ee3; } </style><style type="text/css"> .mercadopago-button { padding: 0 1.7142857142857142em; font-family: "Helvetica Neue", Arial, sans-serif; font-size: 0.875em; line-height: 2.7142857142857144; background: #009ee3; border-radius: 0.2857142857142857em; color: #fff; cursor: pointer; border: 0; } </style><style type="text/css"> @keyframes loading-rotate { 100% { transform: rotate(360deg); } } @keyframes loading-dash { 0% { stroke-dasharray: 1, 200; stroke-dashoffset: 0; } 50% { stroke-dasharray: 100, 200; stroke-dashoffset: -20px; } 100% { stroke-dasharray: 89, 200; stroke-dashoffset: -124px; } } @keyframes loading-fade-in { from { opacity: 0; } to { opacity: 1; } } .mp-spinner { position: absolute; top: 100px; left: 50%; font-size: 70px; margin-left: -35px; animation: loading-rotate 2.5s linear infinite; transform-origin: center center; width: 1em; height: 1em; } .mp-spinner-path { stroke-dasharray: 1, 200; stroke-dashoffset: 0; animation: loading-dash 1.5s ease-in-out infinite; stroke-linecap: round; stroke-width: 2px; stroke: #009ee3; } </style><style type="text/css"> .mercadopago-button { padding: 0 1.7142857142857142em; font-family: "Helvetica Neue", Arial, sans-serif; font-size: 0.875em; line-height: 2.7142857142857144; background: #009ee3; border-radius: 0.2857142857142857em; color: #fff; cursor: pointer; border: 0; } </style><style type="text/css"> @keyframes loading-rotate { 100% { transform: rotate(360deg); } } @keyframes loading-dash { 0% { stroke-dasharray: 1, 200; stroke-dashoffset: 0; } 50% { stroke-dasharray: 100, 200; stroke-dashoffset: -20px; } 100% { stroke-dasharray: 89, 200; stroke-dashoffset: -124px; } } @keyframes loading-fade-in { from { opacity: 0; } to { opacity: 1; } } .mp-spinner { position: absolute; top: 100px; left: 50%; font-size: 70px; margin-left: -35px; animation: loading-rotate 2.5s linear infinite; transform-origin: center center; width: 1em; height: 1em; } .mp-spinner-path { stroke-dasharray: 1, 200; stroke-dashoffset: 0; animation: loading-dash 1.5s ease-in-out infinite; stroke-linecap: round; stroke-width: 2px; stroke: #009ee3; } </style><style type="text/css"> .mercadopago-button { padding: 0 1.7142857142857142em; font-family: "Helvetica Neue", Arial, sans-serif; font-size: 0.875em; line-height: 2.7142857142857144; background: #009ee3; border-radius: 0.2857142857142857em; color: #fff; cursor: pointer; border: 0; } </style></head>



<body class="as-theme-light-heroimage">

    <div class="stack">
        
        <div class="as-search-wrapper" role="main">
            <div class="as-navtuck-wrapper">
                <div class="as-l-fullwidth  as-navtuck" data-events="event52">
                    <div>
                        <div class="pd-billboard pd-category-header">
                            <div class="pd-l-plate-scale">
                                <div class="pd-billboard-background">
                                    <img src="./assets/music-audio-alp-201709" alt="" width="1440" height="320" data-scale-params-2="wid=2880&amp;hei=640&amp;fmt=jpeg&amp;qlt=95&amp;op_usm=0.5,0.5&amp;.v=1503948581306" class="pd-billboard-hero ir">
                                </div>
                                <div class="pd-billboard-info">
                                    <a href="index.php"><h1 class="pd-billboard-header pd-util-compact-small-18">Tienda e-commerce</h1></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="as-search-results as-filter-open as-category-landing as-desktop" id="as-search-results">

                <div id="accessories-tab" class="as-accessories-details">
                    <div class="as-accessories" id="as-accessories">
                        <div class="as-accessories-header">
                            <div class="as-search-results-count">
                                <span class="as-search-results-value"></span>
                            </div>
                        </div>
                        <div class="as-searchnav-placeholder" style="height: 77px;">
                            <div class="row as-search-navbar" id="as-search-navbar" style="width: auto;">
                                <div class="as-accessories-filter-tile column large-6 small-3">

                                    <button class="as-filter-button" aria-expanded="true" aria-controls="as-search-filters" type="button">
                                        <h2 class=" as-filter-button-text">
                                            Smartphones
                                        </h2>
                                    </button>


                                </div>

                            </div>
                        </div>
                        <div class="as-accessories-results  as-search-desktop">
                            <div class="width:60%">
                                <div class="as-producttile-tilehero with-paddlenav " style="float:left;">
                                    <div class="as-dummy-container as-dummy-img">

                                        <img src="./assets/wireless-headphones" class="ir ir item-image as-producttile-image  " style="max-width: 70%;max-height: 70%;"alt="" width="445" height="445">
                                    </div>
                                    <div class="images mini-gallery gal5 ">
                                    

                                        <div class="as-isdesktop with-paddlenav with-paddlenav-onhover">
                                            <div class="clearfix image-list xs-no-js as-util-relatedlink relatedlink" data-relatedlink="6|Powerbeats3 Wireless Earphones - Neighborhood Collection - Brick Red|MPXP2">
                                                <div class="as-tilegallery-element as-image-selected">
                                                    <div class=""></div>
                                                    <img src="./assets/003.jpg" class="ir ir item-image as-producttile-image" alt="" width="445" height="445" style="content:-webkit-image-set(url(<?php echo $_POST['img'] ?>) 2x);">
                                                </div>
                                                
                                            </div>

                                            
                                        </div>

                                        

                                    </div>

                                </div>
                                <div class="as-producttile-info" style="float:left;min-height: 168px;">
                                    <div class="as-producttile-titlepricewraper" style="min-height: 128px;">
                                        <div class="as-producttile-title">
                                            <h3 class="as-producttile-name">
                                                <p class="as-producttile-tilelink">
                                                    <span data-ase-truncate="2"><?php echo $_POST['title'] ?></span>
                                                </p>
                                            </h3>
                                        </div>
                                        <h3>
                                            <?php echo "Precio: S/" . $_POST['price2'] ?>
                                        </h3>
                                        <h3>
                                            <?php echo "Cantidad: ". $_POST['unit']. " und" ?>
                                        </h3>
                                    </div>
                                    <!-- <button type="submit" class="mercadopago-button" formmethod="post">Pagar</button> -->
                                    <form action="https://crgk7-mp-ecommerce-php.herokuapp.com/response.php" method="POST">
                                        <script
                                          src="https://www.mercadopago.com.pe/integrations/v1/web-payment-checkout.js" data-header-color="#c0392b" data-elements-color="#8e44ad" data-button-label="Pagar la compra" view="item"
                                          data-preference-id="<?php echo $preference->id; ?>">
                                        </script>
                                        <!-- dev_2e4ad5dd362f11eb809d0242ac130004 -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div role="alert" class="as-loader-text ally" aria-live="assertive"></div>
        <div class="as-footnotes">
            <div class="as-footnotes-content">
                <div class="as-footnotes-sosumi">
                    Todos los derechos reservados Tienda Tecno 2021
                </div>
            </div>
        </div>

</div><div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> <svg class="mp-spinner" viewBox="25 25 50 50"> <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle> </svg> </div><div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> <svg class="mp-spinner" viewBox="25 25 50 50"> <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle> </svg> </div><div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> <svg class="mp-spinner" viewBox="25 25 50 50"> <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle> </svg> </div><div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> <svg class="mp-spinner" viewBox="25 25 50 50"> <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle> </svg> </div><div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> <svg class="mp-spinner" viewBox="25 25 50 50"> <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle> </svg> </div><div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> <svg class="mp-spinner" viewBox="25 25 50 50"> <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle> </svg> </div><div id="ac-gn-viewport-emitter"> </div></body></html>