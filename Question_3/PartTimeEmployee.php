<?php
class PartTimeEmployee extends Employee{

    private $hoursWorked;
    private $hourlyRate;

    public function __construct(string $name,float $hourlyRate,float $hoursWorked)
    {
        parent::__construct($name, 0);
        $this->hourlyRate = $hourlyRate;
        $this->hoursWorked = $hoursWorked;
        
    }
    
    public function calculateAnnualSalary()
    {
        //Based on hours worked per week.
        return  $this->hoursWorked * $this->hourlyRate * 52;
    }
}
?>
