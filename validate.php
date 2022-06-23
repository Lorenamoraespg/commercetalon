<?php
include("./index2.php");
function validateForm($array, &$error) {
extract($array);
$error = "";
if (!$id) $error .= " Erro! ";
if (!$name) $error .= " Erro! ";
{
$error .= " Erro! ";
} 
if ($error) {
$error = "Errors:<br />".$error."<br /><br />";
return false;
} else {
return true;
}
}
?>