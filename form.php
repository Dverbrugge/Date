<?php
$birthyear= $_POST["year"];

function getAge()
{
global $birthyear;
return date("Y")-$birthyear;
}

echo "you are ".getAge()."really old";












?>
