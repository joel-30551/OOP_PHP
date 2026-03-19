<?php
require_once "Payment.php";
require_once "CreditCardPayment.php";
require_once "MobileMoneyPayment.php";
require_once "BankTransferPayment.php";


$payment1 = new CreditCardPayment();
$payment2 = new MobileMoneyPayment();
$payment3 = new BankTransferPayment();


$payments = [$payment1, $payment2, $payment3];


foreach ($payments as $payment) {
    echo $payment->processPayment(100) . "<p>";
}
?>