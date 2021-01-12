<?php

class usuarios{
      
     private $id;
     private $nome;
     private $login; 
     private $password;   
     

    function get_id() {
        return $this->id;
    }


    function get_nome() {
        return $this->nome;
    }

    function get_login() {
        return $this->login;
    }

    function get_password() {
        return $this->password;
    }

    function set_id($id) {
        $this->id = $id;
    }

    function set_nome($nome) {
        $this->nome = $nome;
    }

    function set_login($login) {
        $this->login = $login;
    }

    function set_password($password) {
        $this->password = $password;
    }


    


    
function incluir_usuario()
{


$mysqli = new mysqli("localhost", "root", "password", "teste", "3306");

$mysqli->query("INSERT INTO usuarios (nome, login, password) VALUES ('".$this->get_nome()."','".$this->get_login()."','".$this->get_password()."')");

  echo '<script>';
  echo "alert ('Usuário cadastrado com sucesso!') ";
  echo '</script>';

   echo '<script>';
   echo "window.location.assign('../index.php')";
   echo '</script>'; 

}

function inserir_usuario_id()
{

$mysqli = new mysqli("localhost", "root", "password", "teste", "3306");

$usuario_id = $mysqli->query("SELECT * FROM usuarios order by id desc limit 1");

$grupo_id = $mysqli->query("SELECT * FROM grupos WHERE nome ='". $_POST['grupo']."'");

$ver = mysqli_fetch_assoc($usuario_id);

$ver2 = mysqli_fetch_assoc($grupo_id);



$mysqli->query("INSERT INTO usuarios_grupos (usuario_id, grupo_id) VALUES ('".$ver['id']."','".$ver2['id']."')");


}

function inserir_grupo_id()
{

$mysqli = new mysqli("localhost", "root", "password", "teste", "3306");


}



}
