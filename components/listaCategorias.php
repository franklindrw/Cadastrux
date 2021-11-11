
<div class="titleUser"><h3>Lista de Categorias</h3></div>
<span class="regua"></span>

<div class="form-pesquisa">
    <div>
        <input type="text" name="searchUser" class="searchText" placeholder="Digite a Categoria" />
        <button class="btnSearch"><img src="../image/searchIcon.png" /></button>
    </div>
</div>

<div class="tabelaPrincipal">
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Categoria</th>
            <th scope="col">Cadastrados</th>
        </tr>
        </thead>
        <tbody>
            <?php
                $url = 'http://127.0.0.1:5000/produtos';
                $resultado = json_decode(file_get_contents($url), true);

                $nConfeitaria = 0;
                $nPaes = 0;
                foreach($resultado['produtos'] as $listaCategorias) {
                    if($listaCategorias['categoria'] == 'Confeitaria') {
                        $nConfeitaria++;
                    }

                    if($listaCategorias['categoria'] == 'Pães') {
                        $nPaes++;
                    }
                }
            ?>
        <tr>
            <td>Confeitaria</td>
            <td><?= $nConfeitaria ?></td>
        </tr>
        <tr>
            <td>Pães</td>
            <td><?= $nPaes ?></td>
        </tr>
        </tbody>
    </table>
</div>
