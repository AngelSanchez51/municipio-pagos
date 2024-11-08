<?php
require 'paypal_config.php';

use PayPalCheckoutSdk\Orders\OrdersCreateRequest;

$request = new OrdersCreateRequest();
$request->prefer('return=representation');
$request->body = [
    "intent" => "CAPTURE",
    "purchase_units" => [[
        "amount" => [
            "value" => "100.00",
            "currency_code" => "MXN"
        ]
    ]],
    "application_context" => [
        "cancel_url" => "https://sandbox.paypal.com /cancel",
        "return_url" => "https://sandbox.paypal.com /return"
    ]
];

try {
    $client = PayPalClient::client();
    $response = $client->execute($request);
    echo json_encode($response);
} catch (HttpException $ex) {
    echo $ex->statusCode;
    print_r($ex->getMessage());
}
?>
