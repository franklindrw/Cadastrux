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
)