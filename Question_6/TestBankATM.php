<?php
require_once "ATMOperations.php";
require_once "BankATM.php";

$atm = new BankATM(2500.98);


echo $atm->checkBalance()."<p>";
echo $atm->deposit(200.12)."<p>";
echo $atm->withdraw(300.15)."<p>";
echo $atm->checkBalance();

?>