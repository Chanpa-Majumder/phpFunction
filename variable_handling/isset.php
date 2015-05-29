<?php

$var = '';


if (isset($var)) {
    echo "This var is set so I will print.";
}


$a = "test";
$b = "anothertest";

var_dump(isset($a));
var_dump(isset($a, $b));

unset ($a);

var_dump(isset($a));
var_dump(isset($a, $b));

$foo = NULL;
var_dump(isset($foo));

?>