<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "./classes/CakeDay.php";

require "./classes/EmployeeData.php";


$fileName = 'employee-birthdates.txt';

$lineGenerator = EmployeeData::getEmployeeData($fileName);
foreach ($lineGenerator as $line) {
  $employeeBirthDayMath = $line->CakeDayCalculate($line);
  echo $employeeBirthDayMath. '</br>';

}