<html>
<head>
<title>Favoritos</title>
</head>
<body>
<body style="background-color:lightblue;" >
<h2> Gerenciador de Produtos: </h2>
<?php
$link = mysqli_connect("localhost", "root", "", "loja");
$sql = "SELECT * FROM Item ORDER BY name";
$result = mysqli_query($link, $sql);
if ($result) {
while ($row = mysqli_fetch_assoc($result)) {
echo $row["name"]." <a href=\"delete.php?a=".$row["id"]."\"><button> REMOVE </button></a>" . "<a href='updateform.php?a=".$row["id"]."'><button> ATUALIZAR </button> </a><br>";
}
}
?>

</body>
<br>
<h2> Adicionar Produtos: </h2>
<form method="POST" action="insert.php">
        <label for="nome">Nome do Produto</label>
        <input name="item" id="name" type="text"> <br><br>
        <button type="submit"> Salvar </button>
    </form>
    <br><button> <a href="menu.php">Voltar ao Menu</a></button>
</html>
