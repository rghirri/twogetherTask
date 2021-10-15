<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "./classes/CakeDay.php";

require "./classes/EmployeeData.php";

$fileName = 'employee-birthdates.txt';

$lineGenerator = EmployeeData::getEmployeeData($fileName);
$dayMonthGenerator = 
foreach ($lineGenerator as $line) {
  $employee = new CakeDay($line['name'], $line['birthDay']);
  $name = $employee->name;
  $birthDate = $birthDate->birthDay;
  $employeeBirthDayMath = $employee->BirthdayMatch($name, $birthDate);
  var_dump($employeeBirthDayMath);

}