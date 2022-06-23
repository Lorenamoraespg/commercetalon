<?php
function contaValida($username, $password) {
    $link = mysqli_connect("localhost", "root", "", "loja");
    $sql = "SELECT * FROM account WHERE username = '".$username."'
    AND password = MD5('$password')";
    $result = mysqli_query($link, $sql);
    if ($result) {
    if ($row = mysqli_fetch_assoc($result)) {
    return true;
    }
    }
    return false;
}
?>