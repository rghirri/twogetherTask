<?php

class CakeDayCalculate{

  public static function dateIsDup($dateOfBirth, $dupPattern){
    if (in_array($dateOfBirth, $dupPattern)){
      return true;
    }else
    {
      return false;
    }
  }

}