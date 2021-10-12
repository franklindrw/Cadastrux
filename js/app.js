// Montagem dos Componentes no menu

// selecionando os links
document.querySelectorAll(".linkPage").forEach(link =>{
        link.onclick = function(page){

            // para a função de navegação da página
            page.preventDefault()
        
            // acessando a tag do espaço na página
            const components = document.getElementById('components')

            // guardando o texto do component e escrevendo dentro da tag principal
            fetch(link.href)
                .then(resp => resp.text())
                .then(html => components.innerHTML = html)
        }
    }
);


//Preview das Imagens enviadas no cadastro
function lerImagem(){
    if (this.files && this.files[0]){

        //faz a leitura da imagem enviada e carrega na div preview
        var file = new FileReader();
        file.onload  = function(e){
            document.getElementById("preview").src = e.target.result;
        };

        file.readAsDataURL(this.files[0]);
    }
}
//mapeia quando é colocado alguma imagem no input e inicia a function
document.getElementById("uploadImagem").addEventListener("change", lerImagem, false);
