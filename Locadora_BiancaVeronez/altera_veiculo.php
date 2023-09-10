<?php
  /*1- realizando a conexao com o banco de dados(local,usuario,
   senha,nomeBanco)*/
   //$con=mysqli_connect("localhost","root","","bd_projeto");
   include "conexao.php";
   
   include "lista_veiculo_cod.php";
  
  /*2- pegando os dados vindos do formulario e armazenando em variaveis */
  $id=$_POST["id"];
  $nome=$_POST["nome"];
  $placa=$_POST["placa"];
  $ano=$_POST["ano"];

  /*3- criando o comando sql para alteracao do registro */
  $comandoSql="update  tb_veiculo set
  nome_veiculo='$nome',placa_veiculo='$placa',ano_veiculo='$ano'
  where id_veiculo='$id'"; 

  /*4- executando o comando sql */
  $resultado=mysqli_query($con,$comandoSql);

  /*5- verificando se o comando sql foi executado */
  if($resultado==true){
  	echo "Alterado com sucesso";
  }else{
    echo "Erro na alteração";
  }

   echo "<br> <a href='lista_veiculo.php'>Listar Veículo</a>";

?>