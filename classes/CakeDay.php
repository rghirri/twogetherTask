<?php
require "./classes/DayMonth.php";
require "./classes/CakeDayConditions.php";


class CakeDay{

  public $name;
  public $birthDay;

  public function __construct($name,$birthDay)
  {
    $this->name = $name;
    $this->birthDay = $birthDay;
  }
  

  public function CakeDayCalculate($line) 
  {
    $dupPattern = DayMonth::datePattern();
    $name = $line->name;
    $birthDate = $line->birthDay;
    $dateOfBirth = new \DateTime($birthDate);
    $dateOfBirth = $dateOfBirth->format('m-d');
    if (CakeDayCalculate::dateIsDup($dateOfBirth, $dupPattern)){
      $dateOfBirth = new \DateTime($line->birthDay);
      $birthDate = new \DateTime($line->birthDay);
      $currentDate = $birthDate->format(date("Y")."-m-d");
      $age = date_diff($birthDate, date_create($currentDate));
      $years = "P".$age->format("%y")."Y";
      $birthDate->add(new DateInterval($years));
      $timestamp = strtotime($birthDate->format('Y-m-d'));
      $cakeDay = date('l', $timestamp);
      if ($cakeDay == "Friday"){
        $birthDate = $birthDate->add(new DateInterval('P3D'));
        return $birthDate->format('dS F Y'). " One shared large cake ". $name;
      }else{
        $birthDate = $birthDate->add(new DateInterval('P1D'));
        return $birthDate->format('dS F Y'). " One shared large cake ". $name;
      }

    }else
    {
      $dateOfBirth = new \DateTime($line->birthDay);
      $birthDate = new \DateTime($line->birthDay);
      $currentDate = $birthDate->format(date("Y")."-m-d");
      $age = date_diff($birthDate, date_create($currentDate));
      $years = "P".$age->format("%y")."Y";
      $birthDate->add(new DateInterval($years));
      $timestamp = strtotime($birthDate->format('Y-m-d'));
      $cakeDay = date('l', $timestamp);
      if ($cakeDay == "Friday"){
        $birthDate = $birthDate->add(new DateInterval('P3D'));
        return $birthDate->format('dS F Y'). " One cake ". $name;
      }else{
        $birthDate = $birthDate->add(new DateInterval('P1D'));
        return $birthDate->format('dS F Y'). " One cake ". $name;
      }
    }

    
}


} 