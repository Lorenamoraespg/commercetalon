<?php
function validateForm($array, &$error) {
extract($array);
$error = "";
if (!$name) $error .= " Nome Vazio! ";

if ($error) {
$error = "Errors:<br />".$error."<br /><br />";
return false;
} else {
return true;
}
}
?>