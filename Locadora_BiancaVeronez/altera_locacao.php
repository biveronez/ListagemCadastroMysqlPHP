<?php
  /*1- realizando a conexao com o banco de dados(local,usuario,
   senha,nomeBanco)*/
   //$con=mysqli_connect("localhost","root","","bd_projeto");
   include "conexao.php";
   
   include "lista_veiculo_cod.php";
   include "lista_cliente_cod.php";
  
  /*2- pegando os dados vindos do formulario e armazenando em variaveis */
  $c=$_POST["cliente"];
  $v=$_POST["veiculo"];
  $s=$_POST["dataSaida"];
  $r=$_POST["dataRetorno"];

  session_start();
  $cc=$_SESSION['cliente_antigo'];
  $vv=$_SESSION['veiculo_antigo'];
  $ss=$_SESSION['saida_antiga'];
  $rr=$_SESSION['retorno_antigo'];
  

  /*3- criando o comando sql para alteracao do registro */
  $comandoSql="update  tb_locacao set
  cod_cliente='$c',cod_veiculo='$v',saida_veiculo='$s',retorno_veiculo='$r'
  where cod_cliente='$cc' and cod_veiculo='$vv' and saida_veiculo='$ss' and retorno_veiculo='$rr'"; 

  

  session_unset();
  session_destroy();

  /*4- executando o comando sql */
  $resultado=mysqli_query($con,$comandoSql);

  /*5- verificando se o comando sql foi executado */
  if($resultado==true){
  	echo "Alterado com sucesso";
  }else{
    echo "Erro na alteração";
  }

   echo "<br> <a href='lista_locacao.php'>Listar Locação </a>";

?>