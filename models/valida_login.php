<?php

    $vusuario = $_POST['usuario'];
    $vsenha = $_POST['senha'];

    $url = 'http://127.0.0.1:5000/usuarios/'. $vusuario . '/' . $vsenha;
    $resultado = json_decode(file_get_contents($url), true);

    if(!empty($resultado)) {
        header('Location: ../pages/menu.html');
    }
    else {
        unset ($_SESSION ['usuario']);
        unset ($_SESSION ['senha']);
        $_SESSION['erroLogin'] = "Usuário ou Senha Inválidos, por favor tente novamente";
        header('location: ../index.php?erro=true');
    }
    
    
?>