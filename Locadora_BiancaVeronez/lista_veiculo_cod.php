<?php
function selecionaVeiculoCod($codigo){

    /*1- realizando a conexao com o banco de dados(local,usuario,
     senha,nomeBanco)*/
     //$con=mysqli_connect("localhost","root","","bd_locadora");
    include "conexao.php";

    /* 2- criando o comando sql para consulta do registro*/
    $comandoSql="select * from tb_veiculo";
    
    /*3- executando o comando sql */
    $resultado=mysqli_query($con, $comandoSql);

    echo "<select name='veiculo'> ";

    /*4- pegando os dados da consulta criada e exibindo */
    while($dados=mysqli_fetch_assoc($resultado)){

        $id=$dados["id_veiculo"];
        $veiculo=$dados["nome_veiculo"];

        if($id==$codigo)
            echo "<option value=$id selected=selected> $veiculo</option>";
            else
            echo "<option value=$id> $veiculo <option>";
    }
    echo "</select>";


}



?>