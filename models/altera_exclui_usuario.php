<?php

    $vsenhaAtual = $_POST['senhaAtual'];
    $vsenhaNova = $_POST['novaSenha'];
    $vconfirmSenha = $_POST['confirmSenha'];
    $vusuario = $_POST['confirmUsuario'];

    $url = 'http://127.0.0.1:5000/usuarios';
    $resultado = json_decode(file_get_contents($url), true);

        $vid = 0;
        foreach($resultado['usuarios'] as $user) {
            if($user['usuario'] == $vusuario) {
                $vid = $user['id'];
            }
        }
    
    if($vsenhaNova == $vconfirmSenha) {

        $array = array();
        $json = json_encode($array);
  
        $ch = curl_init('http://127.0.0.1:5000/usuarios/update/'. $vsenhaNova . '/' . $vid);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(

          'Content-Type: application/json',

          'Content-Length: ' . strlen($json))

      );

      $response = curl_exec($ch);
      curl_close($ch);

     unset ($_SESSION ['usuario']);
     unset ($_SESSION ['senha']);
     $_SESSION['sucessSenha'] = "Senha alterada";
     header('Location: ../pages/menu.php?sucess=true');
      }

     // else if($vsenhaAtual != null) {
       // echo "cheguei else if";
        /*$array = array();
        $json = json_encode($array);
  
        $ch = curl_init('http://127.0.0.1:5000/usuarios/delete/'. $vid);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
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
        $_SESSION['sucessDelete'] = "Usuário deletado";
        header('Location: ../pages/menu.php?delete=true');*/
      //}
      else {
        $_SESSION['erroSenha'] = "Dados incoerentes. Favor verificar!!!";
        header('Location: ../pages/menu.php?erro=true');
      }

?>