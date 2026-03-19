<?php
class Employee{
    protected $name;
    protected $salary;

    public function __construct(string $name,float $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function calculateAnnualSalary(){
        return $this->salary * 12;
    }
}
?>