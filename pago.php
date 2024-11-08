<?php
require 'vendor/autoload.php';

use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $monto = $_POST['monto'];

    $apiContext = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
            'AfOEtRsjCVhQQ5GQYjRC33U_3T0LUD1yhTz6JyViDbKabh9ALvlGwlaehITdXk3_UBY6cTo-nz20RNpb',
            'EI-gwYUoFaBuKTybYDo5XatLXkRAh_O93m3hiTr0HVnxdH3E6O7eyliVvNFtGQNRY3DCwRHlc9pjyD1t'
        )
    );

    $apiContext->setConfig([
        'mode' => 'sandbox',
        // Otras configuraciones...lineas de codigo añadidas en duda
    ]);
    $payer = new Payer();
    $payer->setPaymentMethod("paypal");

    $amount = new Amount();
    $amount->setTotal($monto);
    $amount->setCurrency("MXN");

    $transaction = new Transaction();
    $transaction->setAmount($amount);
    $transaction->setDescription("Pago de Agua Potable - Atlacomulco");

    $redirectUrls = new RedirectUrls();
    $redirectUrls->setReturnUrl("http://localhost/municipio_pagos/confirmacion.php?exito=true")
        ->setCancelUrl("http://localhost/municipio_pagos/confirmacion.php?exito=false");

    $payment = new Payment();
    $payment->setIntent("sale")
        ->setPayer($payer)
        ->setTransactions(array($transaction))
        ->setRedirectUrls($redirectUrls);

    try {
        $payment->create($apiContext);
        header("Location: " . $payment->getApprovalLink());
    } catch (Exception $ex) {
        echo 'Error: ' . $ex->getMessage();
    }
}
?>
