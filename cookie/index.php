<html>
<head>
<title>Favoritos</title>
</head>
<body>
<body style="background-color:lightblue;" >

<h2> Seu Carrinho de Compras: </h2>

<?php
$link = mysqli_connect("localhost", "root", "", "loja");
$sql = "SELECT * FROM Item ORDER BY name";
$result = mysqli_query($link, $sql);
if ($result) {
while ($row = mysqli_fetch_assoc($result)) {
echo $row["name"]." <a href=\"./favoritos.php?a=".$row["id"]."\">ADICIONAR</a><br>";
}
}
?>
<br>
<button><a href="./favoritos.php">Favoritos</a><br></button>
<button><a href="./favoritos.php">Voltar</a></button>
</body>
</html>