
<div class="titleUser"><h3>Lista de Produtos</h3></div>
<span class="regua"></span>

<div class="form-pesquisa">
    <div>
        <input type="text" name="searchUser" class="searchText" placeholder="Digite o Produto" />
        <button class="btnSearch"><img src="../image/searchIcon.png" /></button>
    </div>
</div>

<div class="tabelaPrincipal">
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Produto</th>
            <th scope="col">Categoria</th>
            <th scope="col">Preço R$</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody>
            <?php

                $url = 'http://127.0.0.1:5000/produtos';
                $resultado = json_decode(file_get_contents($url), true);

                foreach($resultado['produtos'] as $listaProdutos) {
            ?>
        <tr>
            <td><?=$listaProdutos['produto']?></td>
            <td><?=$listaProdutos['categoria']?></td>
            <td><?=$listaProdutos['preco']?></td>
            <td><a href="../pages/editarProduto.html"><img class="btnEdit" style="width: 18px;" src="../image/round_mode_edit_black_24dp.png" /></a></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

