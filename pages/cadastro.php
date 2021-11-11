<!DOCTYPE html>
<html lang="pt-br">
<head>

    <?php
        session_start();

        //caso o link receba sucess=true do cadastro_usuario.php, envia um alert de sucesso
        if(isset($_GET['sucess'])){
            echo  "<script type='text/javascript'>
                        alert('Usuário cadastrado com sucesso!!');
                   </script>";
        }

        //caso o link receba erro=true do login.php, envia um alert de erro
        if(isset($_GET['erro'])){
            echo  "<script type='text/javascript'>
                        alert('Senha e confirmação de senha diferentes!!');
                   </script>";
        }
    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>Cadastrux | Novo Usuário</title>
</head>
<body class="container-vermelho">
    <header id="gridCadastro">
    <div class="box box-1"><a href="../pages/menu.html"><button class="btnVoltar">Voltar</button></a></div>
    <div class="box box-2"></div>
    <div class="box box-3"><h1 class="logoCadastrux">Cadastrux</h1></div>
    </header>

    <main>
        <div class="formulario">
            <h2 id="titleWhite">Criar Usuário</h2>
            <form method="post" action="../models/cadastro_usuario.php"  id="formNewUser" name="formNewUser">
                <div class="campoForm"><input type="text" name="nomeUsuario" id="nomeUsuario" placeholder="Nome de Usuário"></div>
                <div class="campoForm"><input type="text" name="senhaUsuario" id="senhaUsuario" placeholder="Digite a Senha"></div>
                <div class="campoForm"><input type="text" name="confimarSenha" id="confirmarSenha" placeholder="Confirmar senha"></div>
                <div class="campoForm" id="btnSalvar"><input type="submit" value="Salvar"></div>
            </form>
        </div>
    </main>
</body>
</html>