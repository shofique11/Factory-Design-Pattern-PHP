<?php
require_once 'PaymentGateway.php';
 class SquareGateway implements PaymentGateway{
    public function processPayment(float $amount){
        echo "Payment processing of $amount via SquareGateway\n";
    }
 }

?>