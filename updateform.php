<?php
$id = $_GET['a'];
$link = mysqli_connect("localhost", "root", "", "loja");
$sql = "SELECT * FROM Item WHERE id = $id";
$result = mysqli_query($link, $sql);

if($result->num_rows >0) {
    $data = $result-> fetch_assoc();
$id = $data['id'];
$name = $data['name'];
}

?>

<html>    
<body style="background-color:lightblue;" >
    <h2 style="color:black;background-color:lightblue;">Adicionar Produtos ao sistema: </h2>
    <form method="POST" action="update.php">
        <label for="nome">Nome do Produto</label>
        
        <input type="text" name="item" id="name" value='<?php echo $name ?>'>
        <input type="hidden" name="id" id="name" value='<?php echo $id ?>'>
        <button type="submit"> Salvar </button>
    </form>
    <br><button><a href="crud.php">Voltar</a></button>

    <br><button> <a href="/loja/index.php">Sair</a> </button>
</body>
</html>
