<?php
function selecionaClienteCod($codigo){

    /*1- realizando a conexao com o banco de dados(local,usuario,
     senha,nomeBanco)*/
     //$con=mysqli_connect("localhost","root","","bd_locadora");
    include "conexao.php";

    /* 2- criando o comando sql para consulta do registro*/
    $comandoSql="select * from tb_cliente";
    
    /*3- executando o comando sql */
    $resultado=mysqli_query($con, $comandoSql);

    echo "<select name='cliente'> ";

    /*4- pegando os dados da consulta criada e exibindo */
    while($dados=mysqli_fetch_assoc($resultado)){

        $id=$dados["id_cliente"];
        $cliente=$dados["nome_cliente"];

        if($id==$codigo)
            echo "<option value=$id selected=selected> $cliente </option>";
            else
            echo "<option value=$id> $cliente <option>";
    }
    echo "</select>";


}



?>