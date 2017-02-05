<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$name = $_REQUEST["name"];
//echo $name;

$array = array("a" => "orange", "b" => "banana", "c" => "apple", "name" => $name);
$resText = json_encode($array);
echo $resText;

