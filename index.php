<!DOCTYPE html>
<html lang="pt-br">
<head>

    <?php
        session_start();

        //caso o link receba erro=true do login.php, envia um alert de erro
        if(isset($_GET['erro'])){
            echo  "<script type='text/javascript'>
                        alert('Erro teste');
                   </script>";
        }
    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/mainStyles.css">
    <title>Cadastrux | Login</title>
</head>
<body>

<main>
    <div class="menu">
        <h1>Cadastrux</h1>
        <form method="post" action="./models/valida_login.php"  id="formLogin" name="formLogin">
            <input type="text" name="usuario" id="usuario" placeholder="Digite seu usuário" autocomplete="off" required>
            <input type="password" name="senha" id="senha" placeholder="Digite a sua senha" required>
            <input type="submit" value="Entrar">
        </form>
    </div>

    <img src="./image/logoCadastrux 1.png" alt="cadastrux">
</main>
    
</body>
</html>