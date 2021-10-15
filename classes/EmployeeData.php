<?php

class EmployeeData{

  public static function getEmployeeData($fileName)
  {
    $myfile = fopen($fileName, "r") or die("Unable to open file!");
    // Output one line until end-of-file
    $lineArray = array();
    while(!feof($myfile)) {
      $str = fgets($myfile);
      $employeeDateArray = explode(",",$str);
      $lineArray = array('name' => $employeeDateArray[0], 'birthDay' => isset($employeeDateArray[1]) ? $employeeDateArray[1] : null);
  
      yield $lineArray;
   
    
    }
    fclose($myfile);
  }

}