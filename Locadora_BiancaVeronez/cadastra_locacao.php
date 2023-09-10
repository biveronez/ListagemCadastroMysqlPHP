<?php
 //1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)
 //$con=mysqli_connect("localhost","root","","bd_projeto");
 include "conexao.php";
 
  /*2- pegando os dados vindos do formulario e armazenando em variaveis */
  $c=$_POST["cliente"];
  $v=$_POST["veiculo"];
  $s=$_POST["dataSaida"];
  $r=$_POST["dataRetorno"];
 
  /*3- criando o comando sql para insercao do registro */
  $comandoSql="insert into tb_locacao
  (cod_cliente,cod_veiculo,saida_veiculo,retorno_veiculo) 
  values 
  ('$c','$v','$s','$r')";

  /*4- executando o comando sql */
  $resultado=mysqli_query($con,$comandoSql);

  /*5- verificando se o comando sql foi executado */
  if($resultado==true){
  	echo "Cadastrado com sucesso";
	
  }else{
    echo "Erro no cadastro";

  }
  echo "<br> <a href='lista_locacao.php'>Listar Locação</a>";
 
?>