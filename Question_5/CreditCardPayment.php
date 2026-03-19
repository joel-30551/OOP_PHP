<?php
class CreditCardPayment extends Payment{
    public function processPayment($amount)
    {
        return "Paid\n".$amount. "\nvia Credit card.";
    }
}
?>