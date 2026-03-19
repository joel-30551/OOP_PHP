<?php
interface  ATMOperations{
    public function withdraw($amount);
    public function deposit($amount);
    public function checkBalance();
}
?>