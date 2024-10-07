<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Validar Usuário</title>
</head>
<body>
<h1>Validar usuário</h1>

<form action = "recebe_usuario.php" method="post">

	<label for="e-mail" />E-mail:</label>
	<input type="e-mail" name="e-mail" id="e-mail"  required maxlength="100" autofocus >

	<br>
    <br>

	<label for="Senha" />Senha:</label>
	<input type="password" name="senha" id="senha" required maxlength="12">

	<br><br>

	<input type="submit" name="Enviar" value="Enviar">

	<input type="reset" name="limpar" value="limpar">

</form>
</body>
</html>