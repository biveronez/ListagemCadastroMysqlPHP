<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Alteração de Locação</title>
	
</head>
<body>
 
   <?php
    /*1- realizando a conexao com o banco de dados(local,usuario,
     senha,nomeBanco)*/
     //$con=mysqli_connect("localhost","root","","bd_projeto");
	 include "conexao.php";
    
	
	
   include "lista_cliente_cod.php";
   include "lista_veiculo_cod.php";
    
   /*2- pegando o valor vindo da url */
    $cliente=$_GET["c"];
    $veiculo=$_GET["v"];
    $saida=$_GET["s"];
    $retorno=$_GET["r"];

  

   /*3- criando o comando sql para selecionar o registro a ser alterado*/
   $comandoSql="select * from tb_locacao where cod_cliente='$cliente' and cod_veiculo='$veiculo' and saida_veiculo='$saida' and retorno_veiculo='$retorno'";
  
  

    /*4- executando o comando sql */
    $resultado=mysqli_query($con,$comandoSql);
   
   /*5- pegando os dados da consulta criada e armazenando em variaveis */   
   $dados=mysqli_fetch_assoc($resultado);

    $cliente=$dados["cod_cliente"];
    $veiculo=$dados["cod_veiculo"];
    $saida=$dados["saida_veiculo"];
    $retorno=$dados["retorno_veiculo"];

    session_start();
    $_SESSION['cliente_antigo']=$cliente;
    $_SESSION['veiculo_antigo']=$veiculo;
    $_SESSION['saida_antiga']=$saida;
    $_SESSION['retorno_antigo']=$retorno;

      
   ?>
   <!--preenchendo o formulario com dados da consulta -->

   <h3> Alteração de Locação </h3>
	
	<form action="altera_locacao.php" method="POST">
	
      
	  <label for="cliente"> Cliente </label>
      <?php //include "lista_cliente_select.php"; ?>
	  <?php selecionaClienteCod($cliente) ?>
   
      <label for="veiculo"> Veículo </label>
      <?php //include "lista_veiculo_select.php"; ?>
	  <?php selecionaVeiculoCod($veiculo) ?>
        
	  <label for="dataSaida"> Data Saída </label>
      <input type="date" id="dataSaida" name="dataSaida" value="<?php echo 
      $saida ?>">
	
	  <label for="dataRetorno"> Data Retorno </label>
      <input type="date" id="dataRetorno" name="dataRetorno" value="<?php echo $retorno ?>">
	  	 
    
      <input type="submit" value="Alterar">

   </form>

  
  </div>
</body>
</html>