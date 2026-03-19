<?php
class FullTimeEmployee extends Employee{

    private $bonus;

    public function __construct(string $name, float $salary,float $bonus)
    {
        parent::__construct($name, $salary);
        $this->bonus = $bonus;
    }
    
    public function calculateAnnualSalary()
    {
        return ($this->salary * 12) + $this->bonus;
    }
}
?>