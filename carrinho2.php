<?php
session_Start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
<h1>SEU CARRINHO </h1>

<?php


require 'conexao.php';

$total=0;


	



for($i=0;$i<count($_SESSION["carrinho"]);$i++){
	
	$id=$_SESSION["carrinho"][$i];
	$comando = "SELECT * FROM produto WHERE idLivro='$id';";
$retorno = mysqli_query($cnx,$comando);
$retorno2 = mysqli_fetch_assoc($retorno);
echo $retorno2["descricao"];
echo "<br>";
echo "<br>";
echo "<br>";
echo "<img style='height:250px;width:250px' src='"."$retorno2[imagem]'";
echo "<br>";
echo "<br>";
echo $retorno2["preco"];
$total+= $retorno2["preco"];
echo "<br>";
echo "<br>";

}


echo "<h1>Valor da compra:</h1>";
echo "<br>";
echo "<h1>"."R$ ".$total."</h1>";





?>

</body>
</html>