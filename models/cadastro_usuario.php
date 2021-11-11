<?php

    $vusuario = $_POST['nomeUsuario'];
    $vsenha = $_POST['senhaUsuario'];
    $vconfirmSenha = $_POST['confimarSenha'];

    if($vsenha == $vconfirmSenha) {

      $array = array();
      $json = json_encode($array);

      $ch = curl_init('http://127.0.0.1:5000/usuarios/criar/'. $vusuario . '/' . $vsenha);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array(

          'Content-Type: application/json',

          'Content-Length: ' . strlen($json))

      );

      $response = curl_exec($ch);
      echo $response;
      curl_close($ch);

      unset ($_SESSION ['usuario']);
      unset ($_SESSION ['senha']);
      $_SESSION['sucessLogin'] = "Usuário cadastrado";
      header('Location: ../pages/cadastro.php?sucess=true');
    }
    else {

      unset ($_SESSION ['usuario']);
      unset ($_SESSION ['senha']);
      $_SESSION['erroLogin'] = "Usuário não cadastrado";
      header('Location: ../pages/cadastro.php?erro=true');
    }


?>
