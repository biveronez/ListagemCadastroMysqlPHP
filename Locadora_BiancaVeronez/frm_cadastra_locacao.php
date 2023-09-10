<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro de Locação</title>

</head>
<body>
    <h3> Cadastro de Locação </h3>

    <form action="cadastra_locacao.php" method="POST">

      <label for="cliente"> Cliente </label>
      <?php include "lista_cliente_select.php"; ?>

      <label for="veiculo"> Veículo </label>
      <?php include "lista_veiculo_select.php"; ?>

      <label for="dataSaida"> Data de saída </label>
      <input type="date" id="dataSaida" name="dataSaida">

      <label for="dataRetorno"> Data de retorno </label>
      <input type="date" id="dataRetorno" name="dataRetorno">


      <input type="submit" value="Cadastrar">

  </form>
</body>
</html>