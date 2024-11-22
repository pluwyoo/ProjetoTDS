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
.navbar {
display: flex;
    justify-content: center;
    align-items: center;
    background-color: transparent; /* Cor de fundo preta */
    padding: 10px 0;
    position: sticky;
    width: 100%;
    z-index: 1000;
}

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
<div class="section" id="videos"> 

  <header2>
    <h1 href="">Vídeos</h1>
  </header2>
  <!-- Conteúdo da seção de vídeos -->
    <!-- partial:index.partial.html  -->

    <div class="container2">
        <div class="video-container2">
          <div class="video"><video src="videos/CLEITO.mp4" muted></video></div>
          <div class="video"><video src="videos/VideoIG.mp4" muted></video></div>
        </div>
    
        <div class="popup-video">
          <span>&times;</span>
          <video src="videos/video-1.mp4" muted autoplay controls></video>
        </div>
    
      </div>
</div>

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

  <script>
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
