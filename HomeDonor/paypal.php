<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

$money = $_GET["amount"];

// 1. Autoload the SDK Package. This will include all the files and classes to your autoloader
require __DIR__  . '/../vendor/autoload.php';
// 2. Provide your Secret Key. Replace the given one with your app clientId, and Secret
// https://developer.paypal.com/webapps/developer/applications/myapps
$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AfZBoOAE7JEB5HH2cICbtdwLHfxz7SbsnX7BWWW8AJNciHh_4hxYyCpu5T_qtyc3BgzhNy54-vgFYwL-',     // ClientID
        'ENlTIV_oC5sWsvkcSGGzGQCYi4mI4suer8-wDri8UAD4c9yU0mBDwToIu3FZzrWTyreRJB6BdXuB3EE5'      // ClientSecret
    )
);
// 3. Lets try to create a Payment
// https://developer.paypal.com/docs/api/payments/#payment_create
$payer = new \PayPal\Api\Payer();
$payer->setPaymentMethod('paypal');
$amount = new \PayPal\Api\Amount();
$amount->setTotal($money);
$amount->setCurrency('USD');
$transaction = new \PayPal\Api\Transaction();
$transaction->setAmount($amount);
$redirectUrls = new \PayPal\Api\RedirectUrls();
$redirectUrls->setReturnUrl("http://localhost/JoinHands/HomeDonor/message.php")
    ->setCancelUrl("http://localhost/JoinHands/HomeDonor/message.php?m='canceled'");
$payment = new \PayPal\Api\Payment();
$payment->setIntent('sale')
    ->setPayer($payer)
    ->setTransactions(array($transaction))
    ->setRedirectUrls($redirectUrls);
// 4. Make a Create Call and print the values
try {
    $payment->create($apiContext);
    echo $payment;
    echo "\n\nRedirect user to approval_url: " . $payment->getApprovalLink() . "\n";
}
catch (\PayPal\Exception\PayPalConnectionException $ex) {
    // This will print the detailed information on the exception.
    //REALLY HELPFUL FOR DEBUGGING
    echo $ex->getData();
}