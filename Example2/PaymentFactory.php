<?php
class PaymentFactory{
    public static function createPayment(string $gateway){
        switch(strtolower($gateway)){
            case 'paypal':
                return new PaypalGateway();
            case 'stripe':
                return new StripeGateway();
            case 'square':
                return new SquareGateway();
            default:
            return throw new Exception("Unknown payment gateway: $gateway");

        }
    }
}
?>