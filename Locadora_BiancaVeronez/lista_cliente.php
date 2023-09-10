
 <?php 
 	echo "<a href=index.php> Início </a>";
   echo "<h3>  Listagem de Cliente </h3>";
  //1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)
  //$con=mysqli_connect("localhost","root","","bd_projeto");
  include "conexao.php";
    

  /*2- criando o comando sql para consulta  do registros*/
  $comandoSql="select * from tb_cliente";
  

  /*3- executando o comando sql */
  $resultado=mysqli_query($con,$comandoSql);

  /*4- pegando os dados da consulta criada e exibindo */
  while($dados=mysqli_fetch_assoc($resultado)){
    $id= $dados["id_cliente"];
    $nome=$dados["nome_cliente"];
    $rg=$dados["rg_cliente"];
    $cpf=$dados["cpf_cliente"];
    $email=$dados["email_cliente"];
	

    echo "id: $id <br>";
    echo "nome: $nome <br>";
    echo "rg: $rg <br>";
    echo "cpf: $cpf <br>";
    echo "email: $email <br>";
	
	
	echo "<a href=exclui_cliente.php?id=$id> Excluir </a>";
	echo "<br><a href=frm_altera_cliente.php?id=$id> Alterar </a>";

    echo "<br><br>";


  }
 
?>
 </div>