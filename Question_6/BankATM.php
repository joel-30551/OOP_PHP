<?php
class BankATM implements ATMOperations{
    private $balance = 0;

    public function __construct(float $initialBalance = 0)
    {
        $this->balance = $initialBalance;
    }

    public function withdraw($amount)
    {
        if($amount < 0){
            return "Invalid Amount!";

        }elseif($amount > $this->balance){
            return "You have Insuffient balance in your account.";

        }else{
            $this->balance -= $amount;

            return "You have withdrew:GH$\n".$amount;
        }
    }

    public function deposit($amount){
        if($amount < 0){
            return "Invalid Amount";
        }else{
            $this->balance += $amount;
            return "You have deposited:GH$\n".$amount;
        }
    }

    public function checkBalance()
    {
        return "Current balance:GH$\n" .$this->balance;
    }
}
?>