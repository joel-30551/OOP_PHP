<?php
class BankTransferPayment extends Payment{
    public function processPayment($amount)
    {
        return "Paid\n".$amount. "\nvia Bank transfer.";
    }
}
?>