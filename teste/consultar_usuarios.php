<!DOCTYPE html>
<html lang="pt-br">
<head> 
<meta charset="utf-8"> 
<title> TESTE </title>
<link rel="stylesheet" href="Arquivo.css">

</head> 
<body>
<h2>Grupos e Usuários</h2>

<?php
echo 'Usuário ----- Grupo <br/> <br/>';
$mysqli = new mysqli("localhost", "root", "password", "teste", "3306");

$query = "SELECT a.nome, b.nome
FROM usuarios as a, grupos as b, usuarios_grupos as c
WHERE a.id = c.usuario_id AND b.id = c.grupo_id";

//$query = "SELECT * from usuarios";

if ($result = $mysqli->query($query)) {

    /* fetch object array */
    while ($row = $result->fetch_row()) {
      printf ("%s ----- %s", $row[0], $row[1]."<br/>");

    }

    /* free result set */
    $result->close();
}

/* close connection */
$mysqli->close();
?>
    
</body>

</html>

 


