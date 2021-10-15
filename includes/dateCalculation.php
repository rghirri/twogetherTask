<?php

$birthDate = $line->birthDay;
$dateOfBirth = new \DateTime($birthDate);
$dateOfBirth = $dateOfBirth->format('m-d');
$dateOfBirth = new \DateTime($line->birthDay);
$birthDate = new \DateTime($line->birthDay);
$currentDate = $birthDate->format(date("Y")."-m-d");
$age = date_diff($birthDate, date_create($currentDate));
$years = "P".$age->format("%y")."Y";
$birthDate->add(new DateInterval($years));
$timestamp = strtotime($birthDate->format('Y-m-d'));
$cakeDay = date('l', $timestamp);