<!DOCTYPE html>
<html lang="pt-br">
<head>

<?php
        session_start();

        //caso o link receba sucess=true do altera_exclui_usuario.php, envia um alert de sucesso
        if(isset($_GET['sucess'])){
            echo  "<script type='text/javascript'>
                        alert('Senha alterada com sucesso!!');
                   </script>";
        }

        //caso o link receba erro=true do altera_exclui_usuario.php, envia um alert de erro
        if(isset($_GET['erro'])){
            echo  "<script type='text/javascript'>
                        alert('Dados incoerentes. Favor verificar!!!');
                   </script>";
        }

        //caso o link receba delete=true do altera_exclui_usuario.php, envia um alert de sucesso
        if(isset($_GET['delete'])){
            echo  "<script type='text/javascript'>
                        alert('Usuário deletado!!!');
                   </script>";
        }
    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/menuStyles.css">
    <link rel="stylesheet" href="../css/componentsStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cadastrux | Menu</title>
</head>
<body>
    <div class="menu-container">
        <header class="container-vermelho" id="menu">
            <h1 class="logoCadastrux">Cadastrux</h1>
            <div class="btnMenu-container">
                <a class="linkPage" href="../components/usuarios.php"><button class="btnMenu">Usuários</button></a>
                <a class="linkPage" href="../components/listaProdutos.php"><button class="btnMenu">Lista de Produtos</button></a>
                <a href="../pages/criarProduto.html"><button class="btnMenu">Cadastro de Produtos</button></a>
                <a class="linkPage" href="../components/listaCategorias.php"><button class="btnMenu">Lista de Categorias</button></a>
                <a href="../pages/outdoor.html" target="_blank"><button class="btnMenu">Outdoor</button></a>
            </div>

            <div class="btnMenuExit"><a href="../index.php"><button id="btnMenuExit">Sair</button></div></a>
        </header>

        <main>
            <section id="components"></section>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../js/app.js"></script>
</body>
</html>