<?php
$value = 1;

function changeValue() {
    global $value;
    $value = 5;
}

function getValue() {
    global $value;
    global $defaultvalue;
    if ($value == 1)
    {
    return $value;
    }
    else
    {return 0;}
}