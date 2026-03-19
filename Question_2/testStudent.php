<?php
require_once "Student.php";
$student1 = new Student("118085031","Joel Webs",58.5);

echo"Name:". $student1->getName(). "<br>";
echo"Student ID:". $student1->getStudentId(). "<br>";
echo"<p>";

echo"Score Between 0 and 100: (58.5) <br> ";
echo"Grade:". $student1->getGrade() ."<br>";
echo"<p>";

echo"Score Lesser than Zero: (-10.50) <br>";
$student1->setScore(-10.5);
echo"<p>";

echo"Score Greater than 100 : (110) <br>";
$student1->setScore(110);
echo"<p>";

?>