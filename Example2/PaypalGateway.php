<?php
require_once 'PaymentGateway.php';
class PaypalGateway implements PaymentGateway{
   public  function processPayment(float $amount){
    
    echo "Processing payment of $amount via PayPal.\n";

   }
}
?>