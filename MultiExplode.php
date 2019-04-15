<?php
/**
*
* @Name : PHPMultiExplode/MultiExplode.php
* @Version : 1.0
* @Programmer : Max
* @Date : 2019-04-15
* @Released under : https://github.com/BaseMax/PHPMultiExplode/blob/master/LICENSE
* @Repository : https://github.com/BaseMax/PHPMultiExplode
*
**/
function mexplode($delimiters=null, $input) {
    if($delimiters === null) {
        $$delimiters=array(" ");
    }
    $input = str_replace($delimiters, $delimiters[0], $input);
    return explode($delimiters[0], $input);
    // $items = explode($delimiters[0], $ready);
    // return $items;
}
