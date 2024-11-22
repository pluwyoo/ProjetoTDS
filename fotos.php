<?php require_once 'condiguracoes.php';


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Memórias Terceirão</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="/img/LOGO303T.png">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>
    body{
      background-image: url(img/backgroundOFC.png);
      background-size: cover;
      background-attachment: fixed;
    }
  

a {
text-decoration: none;
/* Remove o sublinhado */
outline: none;
/* Remove a linha azul de foco */
color: black;
/* Define a cor do texto */
}

a p {
margin: 0;
font-size: 19px;
}

a:active,
a:focus {
outline: none;

}

h1{
 font-family: MinhaFonte, sans-serif;
}

/* Estilo da navbar */
.navbar {display: flex;
    justify-content: center;
    align-items: center;
    background-color: transparent; /* Cor de fundo preta */
    padding: 10px 0;
    position: sticky;
    width: 100%;
    z-index: 1000;}

/* Estilo dos links */
.navbar a {
    color: #ffdbff; /* Cor roxa para os links */
    text-decoration: none;
    padding: 20px;
    font-size: 28px;
    font-weight: bold;
    transition: all 0.3s ease-in-out;
    border-radius: 4px;
    margin-left: 100px;
}

/* Efeito de hover nos links */
.navbar a:hover {
    background-color: rgba(138, 43, 226, 0.2); /* Cor roxa suave para o hover */
    color: #fff; /* Muda o texto para branco no hover */
    transform: scale(1.1); /* Efeito de zoom */
}

/* Ajustes de foco para melhorar acessibilidade */
.navbar a:focus {
    outline: 2px solid #8a2be2; /* Borda roxa no foco */
}

/* Responsividade para telas menores */
@media (max-width: 768px) {
    .navbar {
        flex-direction: column;
    }

    .navbar a {
        margin: 10px 0;
        font-size: 20px;
        padding: 15px;
    }
}

  </style>
</head>
<body>
  <header>
    <img src="/img/logoterceirao3.png" alt="memorias" class="logo">
  </header>
  <div class="navbar">
  <a style="opacity: 0%;">.</a>
  <a href="fotos.php" class="nav-link">Fotos</a>
  <a href="videos.php" class="nav-link">Vídeos</a>
  <a href="home.php" class="nav-link">Trabalhos</a>
  <a href="home.php#alunos" class="nav-link">Alunos</a>
  <a href="home.php#professores" class="nav-link">Professores</a>
  <span style="opacity: 0%;">.......</span>
</div>

  <header2 id="seção fotos">
    <h1>Fotos</h1>
  </header2>
  <br>
  <center>
  <main>
    <div class="gallery-container">

      <a href="img/f1.jpeg" class="gallery-items" data-lightbox="models" data-title="Presente da Camila">
        <img src="img/f1.jpeg">

        <p>
          Presente da Camila
          <p></p>
        </p>
        </p>

      </a>


      <a href="img/f2.jpeg" class="gallery-items" data-lightbox="models" data-title="PUCPR">
        <img src="img/f2.jpeg">

        <p>
          PUCPR
          <p></p>
          
        </p>
        </p>


      </a>

      <a href="img/f3.jpeg" class="gallery-items" data-lightbox="models"
        data-title="Centro de Realidade Virtual PUCPR">
        <img src="img/f3.jpeg">

        <p>
          Centro de Realidade Virtual PUCPR
          <p></p>
          
        </p>
        </p>


      </a>

      <a href="img/f4.jpeg" class="gallery-items" data-lightbox="models" data-title="Aniversário Edison ">
        <img src="img/f4.jpeg">

        <p>
          Aniversário Edison
          <p></p>
          
        </p>
        </p>


      </a>


      <a href="img/f5.jpeg" class="gallery-items" data-lightbox="models" data-title="Trajados">
        <img src="img/f5.jpeg">


        <p>
          Trajados
          <p></p>
          
        </p>
        </p>



      </a>

      <a href="img/f6.jpeg" class="gallery-items" data-lightbox="models"
        data-title="Uniforme Terceirão">
        <img src="img/f6.jpeg">

        <p>
          Uniforme Terceirão
          <p></p>
          
        </p>
        </p>

      </a>

      <a href="img/f7.jpeg" class="gallery-items" data-lightbox="models" data-title="4 autistas">
        <img src="img/f7.jpeg">

        <p>
          4 autistas
          <p></p>
          
        </p>
        </p>

      </a>

      <a href="img/f8.jpeg" class="gallery-items" data-lightbox="models" data-title="Esses fumaram o traficante">
        <img src="img/f8.jpeg">

        <p>
          Esses fumaram o traficante
          <p></p>
          
        </p>
        </p>


      </a>

      <a href="img/f9.jpeg" class="gallery-items" data-lightbox="models" data-title="A galera reunida">
        <img src="img/f9.jpeg">

        <p>
          A galera reunida
          <p></p>
          
        </p>
        </p>

      </a>

      <a href="img/f10.jpeg" class="gallery-items" data-lightbox="models" data-title="Viajem dos guri">
        <img src="img/f10.jpeg">


        <p>
          Viajem dos guri
          <p></p>
          
        </p>
        </p>

      </a>

      <a href="img/f11.jpeg" class="gallery-items" data-lightbox="models" data-title="Dois littles strangers">
        <img src="img/f11.jpeg">


        <p>
          Dois littles strangers
          <p></p>
        </p>
        </p>



      </a>

      <a href="img/f12.jpeg" class="gallery-items" data-lightbox="models" data-title="Alunos antes do CAPS">
        <img src="img/f12.jpeg">


        <p>
          Alunos antes do CAPS
          <p></p>
        </p>
        </p>


      </a>


      <a href="img/f13.jpeg" class="gallery-items" data-lightbox="models" data-title="Presente da Camila">
        <img src="img/f13.jpeg">

        <p>
          Fernandas's group
          <p></p>
        </p>
        </p>

      </a>


      <a href="img/f14.jpeg" class="gallery-items" data-lightbox="models" data-title="Time dos Verde lá">
        <img src="img/f14.jpeg">

        <p>
          Time dos verde lá
          <p></p>
          
        </p>
        </p>


      </a>

      <a href="img/f15.jpeg" class="gallery-items" data-lightbox="models"
        data-title="Centro de Realidade Virtual PUCPR">
        <img src="img/f15.jpeg">

        <p>
          Centro de Realidade Virtual PUCPR
          <p></p>
          
        </p>
        </p>


      </a>

      <a href="img/f16.jpeg" class="gallery-items" data-lightbox="models" data-title="Aniversário Edison ">
        <img src="img/f16.jpeg">

        <p>
          Formatura is coming...
          <p></p>
          
        </p>
        </p>


      </a>


      <a href="img/f17.jpeg" class="gallery-items" data-lightbox="models" data-title="Trajados">
        <img src="img/f17.jpeg">


        <p>
          Autistas e o Professor
          <p></p>
          
        </p>
        </p>



      </a>

      <a href="img/f18.jpeg" class="gallery-items" data-lightbox="models"
        data-title="A galera da T.I">
        <img src="img/f18.jpeg">

        <p>
          A galera da  T.I
          <p></p>
          
        </p>
        </p>

      </a>

      <a href="img/f19.jpeg" class="gallery-items" data-lightbox="models" data-title="Selfie">
        <img src="img/f19.jpeg">

        <p>
          Selfie 
          <p></p>
          
        </p>
        </p>

      </a>

      <a href="img/f20.jpeg" class="gallery-items" data-lightbox="models" data-title="reunião Do aniversário do Edison">
        <img src="img/f20.jpeg">

        <p>
          reunião Do aniversário do Edison
          <p></p>
          
        </p>
        </p>


      </a>

      <a href="img/f21.jpeg" class="gallery-items" data-lightbox="models" data-title="Red Dead Redemption 3">
        <img src="img/f21.jpeg">

        <p>
          Red Dead Redemption 3
          <p></p>
          
        </p>
        </p>

      </a>

      <a href="img/f22.jpeg" class="gallery-items" data-lightbox="models" data-title="Edison Di Cria">
        <img src="img/f22.jpeg">


        <p>
          Edison Di Cria
          <p></p>
          
        </p>
        </p>

      </a>

      <a href="img/f23.jpeg" class="gallery-items" data-lightbox="models" data-title="Vida de Empreguete">
        <img src="img/f23.jpeg">


        <p>
          Vida de Empreguete
          <p></p>
        </p>
        </p>



      </a>

      <a href="img/f24.jpeg" class="gallery-items" data-lightbox="models" data-title="Edison Chavoso">
        <img src="img/f24.jpeg">


        <p>
          Edison Chavoso
          <p></p>
        </p>
        </p>


      </a>

      <a href="img/f25.jpeg" class="gallery-items" data-lightbox="models" data-title="Trajados">
        <img src="img/f25.jpeg">

        <p>
          Trajados
          <p></p>
        </p>
        </p>

      </a>


      <a href="img/f26.jpeg" class="gallery-items" data-lightbox="models" data-title="Trajados">
        <img src="img/f26.jpeg">

        <p>
          Trajados
          <p></p>
          
        </p>
        </p>


      </a>

      <a href="img/f27.jpeg" class="gallery-items" data-lightbox="models"
        data-title="Trajados">
        <img src="img/f27.jpeg">

        <p>
         Trajados
          <p></p>
          
        </p>
        </p>


      </a>

      <a href="img/f28.jpeg" class="gallery-items" data-lightbox="models" data-title="Adam Sandler Na Duarte">
        <img src="img/f28.jpeg">

        <p>
          Adam Sandler Na Duarte
          <p></p>
          
        </p>
        </p>


      </a>


      <a href="img/f29.jpeg" class="gallery-items" data-lightbox="models" data-title="Dia do Autismo ">
        <img src="img/f29.jpeg">


        <p>
          Dia do Autismo 
          <p></p>
          
        </p>
        </p>



      </a>

      <a href="img/f30.jpeg" class="gallery-items" data-lightbox="models"
        data-title="Sonin bão">
        <img src="img/f30.jpeg">

        <p>
          Sonin bão
          <p></p>
          
        </p>
        </p>

      </a>

      <a href="img/f31.jpeg" class="gallery-items" data-lightbox="models" data-title="O mais macho da sala">
        <img src="img/f31.jpeg">

        <p>
          O mais macho da sala
          <p></p>
          
        </p>
        </p>

      </a>
      <a href="img/CLEITIN.png" class="gallery-items" data-lightbox="models" data-title="CLEITIN o sapo">
        <img src="img/CLEITIN.png">

        <p>
          CLEITIN o sapo
          <p></p>
          
        </p>
        </p>

      </a>
      <a href="img/COBRA2.png" class="gallery-items" data-lightbox="models" data-title="Cobras">
        <img src="img/COBRA2.png">

        <p>
        Cobras
          <p></p>
          
        </p>
        </p>

      </a>
      <a href="img/COBRA3.png" class="gallery-items" data-lightbox="models" data-title="Cobras">
        <img src="img/COBRA3.png">

        <p>
        Cobras
          <p></p>
          
        </p>
        </p>

      </a>
      <a href="img/COBRA.png" class="gallery-items" data-lightbox="models" data-title="Cobras">
        <img src="img/COBRA.png">

        <p>
        Cobras
          <p></p>
          
        </p>
        </p>

      </a>
      <a href="img/COBRA4.png" class="gallery-items" data-lightbox="models" data-title="Cobras">
        <img src="img/COBRA4.png">

        <p>
        Cobras
          <p></p>
          
        </p>
        </p>

      </a>
      <a href="img/COBRA5.png" class="gallery-items" data-lightbox="models" data-title="Cobras">
        <img src="img/COBRA5.png">

        <p>
          Cobras
          <p></p>
          
        </p>
        </p>

      </a>
      <a href="img/DIEGOCHAPADO.png" class="gallery-items" data-lightbox="models" data-title="Diego chapado no formol">
        <img src="img/DIEGOCHAPADO.png">

        <p>
          Diego chapado no formol
          <p></p>
          
        </p>
        </p>

      </a>
      <a href="img/INF.png" class="gallery-items" data-lightbox="models" data-title="A adicionar">
        <img src="img/INF.png">

        <p>
          A adicionar
          <p></p>
          
        </p>
        </p>

      </a>
      <a href="img/INF.png" class="gallery-items" data-lightbox="models" data-title="A adicionar">
        <img src="img/INF.png">

        <p>
          A adicionar
          <p></p>
          
        </p>
        </p>

      </a>
      </center>

    <footer>
        <div id="footer_content">
          <div id="footer_contacts">
            <h1>Tds 303</h1>
            <p>A vida é melhor quando se tem amigos.</p>
    
            <div id="footer_social_media">
  <a style="margin-left: 200px;" href="https://www.instagram.com/terceiro_tds?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="footer-link" id="instagram" target="_blank" rel="noopener noreferrer">
    <i class="fa-brands fa-instagram" style="font-size: 32px;"></i>
  </a>
</div>

          </div>
    
          <ul class="footer-list">
            <li>
              <h3>Professores Regentes</h3>
            </li>
            <li>
              <a href="Rafael.php" class="footer-link">Rafael Felisbino Vitoretti</a>
            </li>
            <li>
              <a href="Eduardo.php" class="footer-link">Eduardo Biela</a>
            </li>
          </ul>
    
          <ul class="footer-list">
            <li>
              <h3>Informações</h3>
            </li>
            <li>
              <a href="home.php" class="footer-link">Professores</a>
            </li>
            <li>
              <a href="home.php" class="footer-link">Alunos</a>
            </li>
            <li>
              <a href="fotos.php" class="footer-link">Fotos</a>
            </li>
          </ul>
    
          <div>
    <img style="margin-top: 20px;   margin-left: -20px; padding: 20px; width: 460px;" src="/img/logoterceirao3.png" alt="memorias" class="logo">
    </div>
          </div>
        </div>
    
        <div id="footer_copyright">
          &#169
          2024 Todos os direitos reservados
        </div>
      </footer>
      <script src="C:\laragon\www\ProjetoTDS\js\menu.js"></script>
  <script src="C:\laragon\www\ProjetoTDS\js\lightbox-plus-jquery.js"></script>
    <script>
      // Função para rolagem suave ao clicar nos links da barra de navegação
      document.querySelectorAll('.navbar a').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
          e.preventDefault();
          
          const targetId = this.getAttribute('href').substring(1);
          const targetSection = document.getElementById(targetId);
    
          window.scrollTo({
            top: targetSection.offsetTop,
            behavior: 'smooth'
          });
        });fdfwsf
      });
      document.getElementById('addFotosBtn').addEventListener('click', function() {
      document.getElementById('inputFileTurma').click();
    });
    
    document.getElementById('inputFileTurma').addEventListener('change', function() {
      const turmaFotosContainer = document.getElementById('turma-fotos');
      const files = Array.from(this.files);
    
      files.forEach(file => {
        const reader = new FileReader();
        reader.onload = function(e) {
          const imgSrc = e.target.result;
          const turmaFoto = document.createElement('div');
          turmaFoto.classList.add('turma-foto');
          turmaFoto.innerHTML = `
            <img src="${imgSrc}">
            <button class="remover-foto-btn">Remover</button>
          `;
          turmaFotosContainer.appendChild(turmaFoto);
          
          // Adiciona um event listener para o botão de remover
          const removerBtn = turmaFoto.querySelector('.remover-foto-btn');
          removerBtn.addEventListener('click', function() {
            turmaFotosContainer.removeChild(turmaFoto);
          });
        };
        reader.readAsDataURL(file);
      });
    });
    
    function adicionarFoto(idElemento, caminhoFoto) {
        // Verificar se o elemento existe
        var elemento = document.getElementById(idElemento);
        if (!elemento) {
            console.error("Elemento não encontrado.");
            return;
        }
        
        // Criar um elemento de imagem
        var novaFoto = document.createElement("img");
        novaFoto.src = caminhoFoto;
        
        // Adicionar a nova foto ao elemento
        elemento.appendChild(novaFoto);
        
        // Adicionar um botão de remover
        var removerBtn = document.createElement("button");
        removerBtn.textContent = "Remover";
        removerBtn.addEventListener("click", function() {
            elemento.removeChild(novaFoto);
            elemento.removeChild(removerBtn);
        });
        elemento.appendChild(removerBtn);
    }
    
    function removerFoto(idElemento) {
        // Verificar se o elemento existe
        var elemento = document.getElementById(idElemento);
        if (!elemento) {
            console.error("Elemento não encontrado.");
            return;
        }
        
        // Remover a última foto do elemento, se existir
        if (elemento.lastChild) {
            elemento.removeChild(elemento.lastChild);
        }
    }
    var removerBtns = document.querySelectorAll('.remover-foto-btn');
        removerBtns.forEach(function(btn) {
          btn.style.backgroundColor = "#ff0000";
          btn.style.color = "#fff";
          btn.style.border = "none";
          btn.style.padding = "5px 10px";
          btn.style.borderRadius = "5px";
          btn.style.cursor = "pointer";
        });
        document.querySelectorAll('.video-container2 video').forEach(vid => {
      vid.onclick = () => {
        document.querySelector('.popup-video').style.display = 'block';
        document.querySelector('.popup-video video').src = vid.getAttribute('src')

      }
    });

    document.querySelector('.popup-video span').onclick = () => {
      document.querySelector('.popup-video').style.display = 'none';
    }
    </script>
     
    </body>
    </html>
    