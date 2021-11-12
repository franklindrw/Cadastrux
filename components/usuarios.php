
<div class="btnNovo"><a href="../pages/cadastro.php"><button class="btnVoltar">Novo</button></a></div>
<div class="titleUser"><h3>Usuários</h3></div>
<span class="regua"></span>

<div class="form-pesquisa">
    <div>
        <input type="text" name="searchUser" class="searchText" placeholder="Digite o nome de Usuário" />
        <button class="btnSearch"><img src="../image/searchIcon.png" /></button>
    </div>
</div>

<div class="tabelaPrincipal">
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Nome</th>
            <th></th>
            <th scope="col">Ativo</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody>
            <?php

            $url = 'http://127.0.0.1:5000/usuarios';
            $resultado = json_decode(file_get_contents($url), true);

                foreach($resultado['usuarios'] as $listaUsuarios) {

                    if($listaUsuarios['status'] === 'False') {
                        $convert = ($listaUsuarios['status']) ? 'Não' : 'Falso';
                    } 
                    else {
                        $convert = ($listaUsuarios['status']) ? 'Sim' : 'Verdadeiro';
                    }
        
                    echo "<tr>";
                        echo "<td colspan='2'>$listaUsuarios[usuario]</td>";
                        echo "<td>$convert</td>";
                        echo "<td><button type='button' id='btnEdit' data-bs-toggle='modal' data-bs-target='#staticBackdrop'><img class='btnEdit' style='width: 18px;' src='../image/round_mode_edit_black_24dp.png' /></td></button>";
                    echo "</tr>";
                }

            ?>
        
        </tbody>
    </table>
</div>

<!-- modal de edição de senha -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Mudar Senha / Excluir usuário</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <form method="post" action="../models/altera_exclui_usuario.php">
            <div class="novaSenha">
                <input class="campo-m" type="text" name="confirmUsuario" id="nomeProduto" placeholder="Confirme o nome do usuário">
                <input class="campo-m" type="password" name="senhaAtual" id="nomeProduto" placeholder="Digite a senha atual">
                <input class="campo-m" type="password" name="novaSenha" id="nomeProduto" placeholder="Digite a nova senha (Somente alteração)">
                <input class="campo-m" type="password" name="confirmSenha" id="nomeProduto" placeholder="Repita a nova senha (Somente alteração)">
                <div class="salvarSenha">
                <button type="submit" class="btnDelete" id="btnDelete"><img class="deleteIcon" src="../image/deleteIcon.png" /></button>
                <button type="submit" id="salvarSenha">Salvar</button>
                </div>
            </div>
            </form>
        <div class="acoes">
            

            <div class="form-check form-switch" id="ActiveUser">
                <label class="form-check-label" for="UserAtivo">Ativo</label>
                <input class="form-check-input" type="checkbox" role="switch" id="UserAtivo">
            </div>
        </div>
        
      </div>
    </div>
  </div>