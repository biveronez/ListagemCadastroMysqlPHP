<?php
 //1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)
 //$con=mysqli_connect("localhost","root","","bd_projeto");
 include "conexao.php";
 
  /*2- pegando os dados vindos do formulario e armazenando em variaveis */
  $n=$_POST["nome"];
  $r=$_POST["rg"];
  $c=$_POST["cpf"];
  $e=$_POST["email"];
 
  /*3- criando o comando sql para insercao do registro */
  $comandoSql="insert into tb_cliente
  (nome_cliente,rg_cliente,cpf_cliente,email_cliente) 
  values 
  ('$n','$r','$c','$e')";

  /*4- executando o comando sql */
  $resultado=mysqli_query($con,$comandoSql);

  /*5- verificando se o comando sql foi executado */
  if($resultado==true){
  	echo "Cadastrado com sucesso";
	
  }else{
    echo "Erro no cadastro";

  }
  echo "<br> <a href='lista_cliente.php'>Listar Cliente</a>";
 
?>