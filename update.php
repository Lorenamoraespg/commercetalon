<?php


$item = $_POST['item'];
$idform = $_POST['id'];

$link = mysqli_connect("localhost", "root", "", "loja");
$sql = "UPDATE item set name ='$item' WHERE id = '$idform'";
$result = mysqli_query($link, $sql);




if ($link->query($sql) === TRUE) {
    header('Location:crud.php');
} else {

}
$link->close();
?>