<?php

include("../model/model_grupos.php");

	class incluir {
	
		function __construct() {
		
			$botao = $_POST['botao'];

			if ($botao = "Criar grupo") 
			{
			
			$grupos = new grupos();
                        
                        $grupos->set_nome($_POST['novo_grupo']);
                       
                      
                        
                        
                        $grupos->incluir_grupo();
                        
                        
			}
			}
			
			}
			$incluir = new incluir();

?>
