<?php
/**
*
* @Name : PHPMultiExplode/sample.php
* @Version : 1.0
* @Programmer : Max
* @Date : 2019-04-15
* @Released under : https://github.com/BaseMax/PHPMultiExplode/blob/master/LICENSE
* @Repository : https://github.com/BaseMax/PHPMultiExplode
*
**/
include "MultiExplode.php";

$input = "Hello,It is a document or a sample text for test the mexplode function.";
$items = mexplode(array(",","."," "),$input);
print_r($items);
