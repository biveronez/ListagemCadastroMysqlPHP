<?php

include "conexao.php";

$comandoSql="select * from tb_veiculo";

$resultado=mysqli_query($con,$comandoSql);

echo "<select name='veiculo'>";

while($dados=mysqli_fetch_assoc($resultado)){
	$id = $dados["id_veiculo"];
	$nome = $dados["nome_veiculo"];

	echo "<option value = $id> $nome </option>";
}
echo "</select>";

?>