<?php 
    $errorsForm = array();
    $dadosForm = array();
    //Verificação se Recebeu Corretamente os dados 
    $dadosForm[] = (isset($_POST['name']))? $_POST['name'] :$errorsForm[]="Campo name não Encontrado";

    $email = (isset($_POST['name']))? $_POST['name'] :$errorsForm[]="Campo name não Encontrado";

    $dados = $_GET['onClick'];
    echo($dados);

?>