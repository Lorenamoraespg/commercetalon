<?php
if (isset($_GET["a"])) {
if ($_COOKIE["favoritos"]) {
if (strpos($_COOKIE["favoritos"], "'".$_GET["a"]."'") === false) {
setcookie("favoritos",
$_COOKIE["favoritos"].",'".$_GET["a"]."'",
time()+60*60*24*30);

}
} else {
setcookie("favoritos", "'".$_GET["a"]."'", time()+60*60*24*30);
}
header("Location: ./favoritos.php");
exit;
} elseif (isset($_GET["r"])) {
if ($_COOKIE["favoritos"]) {
if (strpos($_COOKIE["favoritos"], "'".$_GET["r"]."'") !== false) {
$favoritos = $_COOKIE["favoritos"];
$favoritos = str_replace(",'".$_GET["r"]."'," , ",", $favoritos);
$favoritos = str_replace("'".$_GET["r"]."'," , "", $favoritos);
$favoritos = str_replace(",'".$_GET["r"]."'" , "", $favoritos);
$favoritos = str_replace("'".$_GET["r"]."'" , "", $favoritos);
setcookie("favoritos", $favoritos, time()+60*60*24*30);
}
}
header("Location: ./favoritos.php");
exit;
}
?>
<html>    
<body style="background-color:lightpink;" >
    <h2 style="color:black;background-color:lightpink;">Gerenciamento de Produtos: </h2>
    <form method="POST" action="insert.php">
        <label for="nome">Nome do Produto</label>
        <input name="item" id="name" type="text"> <br><br>
        <button type="submit"> Salvar </button>
    </form>

    <button> <a href="/loja/index2.php">Adicionar outro produto</a> </button>
    <button> <a href="./logout.php">Logout </a> </button>
    <button> <a href="/loja/index.php">Menu Principal</a> </button>

</body>
</html>
