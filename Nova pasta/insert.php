<?php
include ('conexao.php');

$item = $_POST['item'];

$query = "INSERT INTO product (item) VALUES ('$item')";

if (mysqli_query($link, $sql)) {
    echo "Inserido com sucesso";
    header('Location:index.php');
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
?>
