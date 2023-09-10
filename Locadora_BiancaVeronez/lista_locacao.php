
 <?php 
  	echo "<a href=index.php> Início </a>";
   echo "<h3>  Listagem de Locação </h3>";
  //1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)
  //$con=mysqli_connect("localhost","root","","bd_projeto");
  include "conexao.php";
    

  /*2- criando o comando sql para consulta  do registros*/
  $comandoSql="select * from tb_locacao";
  

  /*3- executando o comando sql */
  $resultado=mysqli_query($con,$comandoSql);

  /*4- pegando os dados da consulta criada e exibindo */
  while($dados=mysqli_fetch_assoc($resultado)){
    $cliente=$dados["cod_cliente"];
    $veiculo=$dados["cod_veiculo"];
    $dataSaida=$dados["saida_veiculo"];
    $dataRetorno=$dados["retorno_veiculo"];
	
	
	
	
    /*organizando a data*/
   $saidaFormatada=date_create($dataSaida);
   $saidaFormatada=date_format($saidaFormatada,'d-m-Y');

   $retornoFormatado=date_create($dataRetorno);
   $retornoFormatado=date_format($retornoFormatado,'d-m-Y');

    echo "Cliente: $cliente <br>";
    echo "Veículo: $veiculo <br>";
    echo "Data de saída: $saidaFormatada <br>";
    echo "Data de retorno: $retornoFormatado <br>";

	echo "<a href=exclui_locacao.php?c=$cliente&v=$veiculo&s=$dataSaida&r=$dataRetorno> Excluir </a>";

	echo "<br><a href=frm_altera_locacao.php?c=$cliente&v=$veiculo&s=$dataSaida&r=$dataRetorno> Alterar </a>";

    echo "<br><br>";


  }
 
?>
 </div>