<?php 
    $errorsForm = array();
    
        //Verificação se Recebeu Corretamente os dados 
    $dadosForm = (isset($_POST['FormCamps']))? $_POST['FormCamps'] : $errorsForm[]="felds not found";

    print_r($dadosForm);
        // Verificar os Campos : 
            
        function CheckPass($pass){
            // Nao preciso criar uma matrix pois esse array vai se ligar ao Principal
        $errorPass= array();
            
        // Verificacao para ver se o campo está vazio 
         if(strlen(str_replace(" ","",$pass)) === 0){
             $errorPass[]="Campo não preenchido,Por favor Preencha";
         }

        if(preg_match('/[a-z]/', $pass) == 0){
            $errorPass[] = "Precisa de Caracters minúsculos";

        }if(preg_match('/[A-Z]/', $pass) == 0){
            $errorPass[] = "Precisa de Caracters Maiúsculos";
        }

        if(preg_match('/[0-9]/', $pass) == 0){
            $errorPass[] = "Precisa de Caracters Númericos";
        }

        if(preg_match('/^[\w$@]{6,}$/', $pass) == 0){
            $errorPass[] = "Precisa de Caracters Especiais";
        }if (strlen($pass) < 8){
            $errorPass[] = "Pelo menos 8 Caracteres";
        }
       
       return $errorPass;
    }
        //Recebe o Array de Errors  
    $receiveErrorsPass = CheckPass($dadosForm['pass']);
        
        /**
         *  TOTAL DE ERROS DE TDS OS CAMPOS
         */
    $totalErrors['pass'][] = $receiveErrorsPass;

        // FORCA DA PASSWORD *** RESOLVIDO ***
    $errorsPass = count($receiveErrorsPass);
    $strongPass = 0 ;
    

    // Verifica a forca da senha de acordo com numero de Erros 
            // Mandar para o front a força da Pass 
        if($errorsPass === 5){
            $strongPass = 0;
        }else if($errorsPass <> 5){
            $strongPass = 5 - $errorsPass;
        }
        if($errorsPass === 0){
            echo "Password Forte";
        }



        
        
         
    
    
?>