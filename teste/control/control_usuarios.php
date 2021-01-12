<?php

include("../model/model_usuarios.php");

	class incluir_ {
	
		function __construct() {
		
			$botao = $_POST['botao'];

			if ($botao = "Cadastrar") 
			{
			
			$Usuarios = new usuarios();
                        $Usuarios->set_id($_POST['id']);
                        $Usuarios->set_nome($_POST['nome']);
                        $Usuarios->set_login($_POST['login']);
                        $Usuarios->set_password($_POST['password']);
                      
                        
                        
                        $Usuarios->incluir_usuario();

                        $Usuarios->inserir_usuario_id();

                        //$Usuarios->inserir_grupo_id();
                        
                        
			}
			}
			
			}
			$incluir = new incluir_();

?>


