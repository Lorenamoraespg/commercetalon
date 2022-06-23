
<?php
$id = $_GET['a'];

$link = mysqli_connect("localhost", "root", "", "loja");

$sql = "DELETE FROM item WHERE id = '$id'";

if ($link->query($sql) === TRUE) {
    header('Location:crud.php');
} else {
    echo "Error: " . $sql . "<br>" . $sql->error;
}



?>