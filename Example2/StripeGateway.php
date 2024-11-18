<?php
require_once 'PaymentGateway.php';
 class StripeGateWay implements PaymentGateway{
    public function processPayment(float $amount)
    {
        echo "Processing payment of $amount via Square.\n";
    }
 }
?>