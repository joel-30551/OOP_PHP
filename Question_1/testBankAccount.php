<?php
require_once 'BankAccount.php';

$account = new BankAccount("WB-2240-125", "Joel Webs", 10000);
echo "A Valid Deposit: 200. <br>";
$account->deposit(200);
echo"<br><p>";

echo "An Invalid Deposit: -24.10 (Negative Amount). <br>";
$account->deposit(-24.10);
echo"<br><p>";

echo "An Invalid Deposit: 0. (Zero Amount). <br>";
$account->deposit(0);
echo"<br><p>";

echo "A Valid Withdrawal: 140.85. <br>";
$account->withdraw(140.85);
echo"<br><p>";

echo "An Invalid Withdrawal: -120.95 (Negative Amount). <br>";
$account->withdraw(-120.95);
echo"<br><p>";

echo "An Invalid Withdrawal: 0. (Zero Amount). <br>";
$account->withdraw(0);
echo"<br><p>";

echo "An Invalid Withdrawal: 1200000. (Amount > Balance). <br>";
$account->withdraw(12000000);
echo"<br><p>";

echo"Current Balance In Account. <br>";
echo"Current Balance:" . $account->getBalance();
?>
