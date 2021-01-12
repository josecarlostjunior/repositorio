
<!DOCTYPE html>
<html lang="pt-br">
<head> 
<meta charset="utf-8"> 
<title> TESTE </title>
<link rel="stylesheet" href="Arquivo.css">

</head> 
<body>
		
<form method="post">
             
<label> Cadastrar Usuário </label> <br><br>

<label>Nome: </label><input name="nome" size="50" maxlength="50" type="text"><br><br>

<label>Login: </label><input name="login" size="50" maxlength="50" type="text"><br><br>

<label>Password: </label><input name="password" size="50" maxlength="50" type="password"><br><br>

<label style="color: red;">*</label><label>Grupos: </label>
    
<select name="grupo">
<?php 

$mysqli = new mysqli("localhost", "root", "password", "teste", "3306");

$busca = $mysqli->query("SELECT * FROM grupos");

while ($ver = mysqli_fetch_assoc($busca))

{

?>
 <option><?php  echo $ver ['nome']; }?> </option>    
    </select>
<label>Novo grupo: </label><input name="novo_grupo" size="50" maxlength="50" type="text">
<input type="submit" name="botao" value="Criar grupo" formaction="control/control_grupos.php" />

<br><br><br>


<input type="submit" name="botao" value="Cadastrar" formaction="control/control_usuarios.php" />

</form>
       
</body>

</html>
	

