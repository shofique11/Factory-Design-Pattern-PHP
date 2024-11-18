<?php
require_once 'PaymentFactory.php';
require_once 'PaypalGateway.php';
try{
  $gatewayType = "Paypal";
  $gateway = PaymentFactory::createPayment($gatewayType); 
  $gateway->processPayment(2000.40);
}catch(Exception $e){
    echo "Error: " . $e->getMessage();
}
?>