<?php 
class BankAccount{
    private $accountNumber;
    private $accountHolder;
    private $balance;

    public function __construct(string $accountNumber,string $accountHolder, float $balance)
    {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
    }

    public function deposit($amount){
        if($amount <= 0){
            echo"Invalid Amount!";
        }else{
            $this->balance += $amount;
            echo"Deposit of GH$\n". $amount .  "\nSuccessful.";
        }
    }
    public function withdraw($amount){
        if($amount <= 0){
            echo"Invalid Amount!";
        }elseif($amount > $this->balance){
            echo"Sorry! You Have Insufficient Balance In Your Account.";
        }
        else{
            $this->balance -= $amount;
            echo"Withdrawal of GH$ \n" . $amount . "\n Successful.";
        }
    }

    public function getBalance(){
        return $this->balance;
    }
    public function getAccountNumber(){
        return $this->accountNumber;
    }
}
?>