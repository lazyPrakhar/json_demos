<?php
    
//path to our JSON file
$url='countryList.json';
$dataCountry = file_get_contents($url); //Reads entire file into a string
$objCountry=json_decode($dataCountry); //decode json obj to php

//    echo $objCountry[0]->name." ".$objCountry[0]->code;

    foreach($objCountry as $value){
        echo $value->name." ".$value->code."<br>";
    }
?>