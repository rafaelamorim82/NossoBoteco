<?php
    require_once('scripts/db.class.php');

    $nomeCliente = $_POST['nomeCliente'];

    if(isset($_POST['nascimentoCliente']))
    {
        $alt_data = implode('-',array_reverse(explode('/',$_POST['nascimentoCliente'])));
    }



    $sexoCliente = $_POST['sexoCliente'];
    $celularCliente = $_POST['celularCliente'];
    $instagramCliente = $_POST['instagramCliente'];
    $emailCliente = $_POST['emailCliente'];
    $enderecoCliente = $_POST['enderecoCliente'];
    $status = $_POST['status'];

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "INSERT INTO clientes(nomeCliente, nascimentoCliente, sexoCliente, celularCliente, instagramCliente, emailCliente, enderecoCliente, status) VALUES ('$nomeCliente', '$alt_data', '$sexoCliente', '$celularCliente', '$instagramCliente', '$emailCliente', '$enderecoCliente', '$status')";

    if (mysqli_query($link, $sql)){
        header('Location: cadastroCliente.php?status=1');
    };


?>