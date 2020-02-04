<?php
/*
* PHP version 7
* @category   Hjälp Funktioner
* @author     Pontus Carlstedt <pontus.carlstedt@hotmail.com>
* @license    PHP CC
*/
?>
<?php

function vara($bilden) {
    preg_match("/(.*)-([0-9]*).\w*$/", $bilden, $match);
    return $match[1];
}

function pris($bilden) {
    preg_match("/(.*)-([0-9]*).\w*$/", $bilden, $match);
    return $match[2];
}
?>
