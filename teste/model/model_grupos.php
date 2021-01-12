<?php

class grupos {
      
     
     private $id; 
      private $nome;

    function get_nome() {
        return $this->nome;
    }

 

    function set_nome($nome) {
        $this->nome = $nome;
    }

   
   
    


    
function incluir_grupo()
{


  $mysqli = new mysqli("localhost", "root", "password", "teste", "3306");

$mysqli->query("INSERT INTO grupos (nome) VALUES ('".$this->get_nome()."')");

    

echo '<script>';
  echo "alert ('Grupo cadastrado com sucesso!') ";
  echo '</script>';

 echo '<script>';
   echo "window.location.assign('../cadastrar_usuario.php')";
   echo '</script>'; 

}
   
}
    
    
  
   
