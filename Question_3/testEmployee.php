<?php
require_once "Employee.php";
require_once "FulltimeEmployee.php";
require_once "PartTimeEmployee.php";

$employee1 = new Employee("Joel",2000000);
echo"Employee Salary.<br>";
echo"Annual Salary:". $employee1->calculateAnnualSalary();
echo"<p>";

$fullemployee1 = new FullTimeEmployee("Lena Kirchoff",1500.54,140.70);
echo"Full Time Employee Salary.<br>";
echo"Annual Salary:" . $fullemployee1->calculateAnnualSalary();
echo"<p>";

$partemployee1 = new PartTimeEmployee("JOhn Wesley",15.95,15);
echo"Part Time Employee Salary.<br>";
echo"Annual Salary:". $partemployee1->calculateAnnualSalary();
echo"<p>";

?>