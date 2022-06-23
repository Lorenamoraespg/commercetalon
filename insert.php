<?php
$item = $_POST['item'];

$link = mysqli_connect("localhost", "root", "", "loja");

$sql = "INSERT INTO item (name) VALUES ('$item')";

if ($link->query($sql) === TRUE) {
    header('Location:crud.php');
} else {
    echo "Error: " . $sql . "<br>" . $sql->error;
}



?>