<?php
   /*1- realizando a conexao com o banco de dados(local,usuario,
   senha,nomeBanco)*/
  //$con=mysqli_connect("localhost","root","","bd_projeto");
  include "conexao.php";
  

  /*2- pegando o valor vindo da url */
  $cliente=$_GET["c"];
  $veiculo=$_GET["v"];
  $dataSaida=$_GET["s"];
  $dataRetorno=$_GET["r"];
  

   /*3- criando o comando sql para exclusao  do registros*/
  $comandoSql="delete from tb_locacao 

  where 

  cod_cliente='$cliente' 
  and 
  cod_veiculo='$veiculo' 
  and 
  saida_veiculo='$dataSaida' 
  and 
  retorno_veiculo='$dataRetorno'";


    /*4- executando o comando sql */
  $resultado=mysqli_query($con,$comandoSql);

  /*5- verificando se o comando sql foi executado */
  if($resultado==true){
  	echo "Excluido com sucesso";
  }else{
    echo "Erro na exclusão";

  }

 echo "<br> <a href='lista_locacao.php'>Listar Locação </a>";
?>