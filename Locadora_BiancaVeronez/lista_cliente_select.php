<?php

include "conexao.php";

$comandoSql="select * from tb_cliente";

$resultado=mysqli_query($con,$comandoSql);

echo "<select name='cliente'>";

while($dados=mysqli_fetch_assoc($resultado)){
	$id = $dados["id_cliente"];
	$nome = $dados["nome_cliente"];

	echo "<option value = $id> $nome </option>";
}
echo "</select>";

?>