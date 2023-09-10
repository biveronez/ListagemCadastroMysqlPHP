<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro de Cliente</title>
	

</head> 
<body>
    <h3> Cadastro de Cliente </h3>
	
	<form action="cadastra_cliente.php" method="POST">

      <label for="nome"> Nome: </label>
      <input type="text" id="nome" name="nome">

      <label for="rg"> RG: </label>
      <input type="text" id="rg" name="rg">

      <label for="cpf"> CPF: </label>
      <input type="text" id="cpf" name="cpf">

      <label for="email"> Email: </label>
      <input type="email" id="email" name="email">
	        	 

      <input type="submit" value="Cadastrar">

   </form>

  
  
  
</body>
</html>
