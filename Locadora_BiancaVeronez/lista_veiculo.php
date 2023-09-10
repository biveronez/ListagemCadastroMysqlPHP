
 <?php 
  	echo "<a href=index.php> Início </a>";
   echo "<h3>  Listagem de Veículo </h3>";
  //1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)
  //$con=mysqli_connect("localhost","root","","bd_projeto");
  include "conexao.php";
    

  /*2- criando o comando sql para consulta  do registros*/
  $comandoSql="select * from tb_veiculo";
  

  /*3- executando o comando sql */
  $resultado=mysqli_query($con,$comandoSql);

  /*4- pegando os dados da consulta criada e exibindo */
  while($dados=mysqli_fetch_assoc($resultado)){
    $id= $dados["id_veiculo"];
    $nome=$dados["nome_veiculo"];
    $placa=$dados["placa_veiculo"];
    $ano=$dados["ano_veiculo"];
	

    echo "id: $id <br>";
    echo "nome: $nome <br>";
    echo "placa: $placa <br>";
    echo "ano: $ano <br>";
	
	
	echo "<a href=exclui_veiculo.php?id=$id> Excluir </a>";
	echo "<br><a href=frm_altera_veiculo.php?id=$id> Alterar </a>";

    echo "<br><br>";


  }
 
?>
 </div>