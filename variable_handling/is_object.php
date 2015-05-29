<?php

function get_students($obj)
{
    if (!is_object($obj)) {
        return false;
    }

    return $obj->students;
}

$obj = new stdClass();
$obj->students = array('Kalle', 'Ross', 'Felipe');

var_dump(get_students(null));
var_dump(get_students($obj));
?>