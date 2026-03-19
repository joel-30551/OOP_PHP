<?php
class MobileMoneyPayment extends Payment{
    public function processPayment($amount)
    {
        return "Paid\n".$amount."\nvia Mobile Money.";
    }
}
?>