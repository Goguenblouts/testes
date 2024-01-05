<!DOCTYPE html>
<html lang="pt">
  <head>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/589ee031373c72145d08696bf0e00f8007058e3a/style.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Barbearia Corte e Arte</title>
  </head>

  <style>
/*flyer na primeira pagina*/
.image .barber-logo {
  position: relative;
  width: 400px;
  height: auto;
  padding: 0;
  margin: 0;
}

  </style>
  <body>

        <div id="pagina1">
      <div class="image">
        <img class="barber-logo" src="https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/flyer%20barber.png?raw=true" alt="Logo 1" />
      </div>

    <!--Pagina Inicial-->
    <!--<div id="pagina1">
      <div class="image">
        <img class="barber-logo" src="https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/Logo.png?raw=true" alt="Logo 1" />
      </div>-->
      <!-- Botão 1-->
      <button id="Botao1">Conheça Nossos Serviços</button>
    </div>
    <!--Segunda Pagina-->
    <div id="pagina2" style="display:none;">
      <!-- Adicionei o estilo "display:none;" para ocultar inicialmente -->
      <header>
        <img class="header-img" src="https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/Cabe%C3%A7alho.png?raw=true" alt="Cabeçalho">
      </header>
      <div class="pagina">
        <button id="Opção1">
          <img src="https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/Op%C3%A7%C3%A3o%201.png?raw=true" alt="Opção 1">Nossos Serviços </button>
        <button id="Opção2">
          <img src="https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/Op%C3%A7%C3%A3o%202.png?raw=true" alt="Opção 2">Nosso Local </button>
        <button id="Opção3">
          <img src="" alt="">Em Desenvolvimento </button>
        <button id="Opção4">
          <img src="https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/Op%C3%A7%C3%A3o%204.png?raw=true" alt="Opção 4">Contatos </button>
      </div>
    </div>
    <!--Opção 1-->
    <div id="pagina3" style="display:none;">
      <div class="pagin">
        <header>
          <img class="header-img" src="https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/Cabe%C3%A7alho.png?raw=true" alt="Cabeçalho">
        </header>
        <div class="serviços-grid">
          <div class="Serviço1">
            <div class="serviço-ativo">
              <img src="https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/Pagina%203/corte.jpg?raw=true" alt="corte" onclick="mostrarInfo('Serviço1')">
              <div class="serviço-info">R$ 30,00</div>
            </div>
            <div class="texto-info1">Corte</div>
          </div>
          <!-- Adicionando onclick nas outras imagens também -->
          <div class="Serviço2">
            <div class="serviço-ativo">
              <img src="https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/Pagina%203/barba.jpg?raw=true" alt="barba" onclick="mostrarInfo('Serviço2')">
              <div class="serviço-info">R$ 30,00</div>
            </div>
            <div class="texto-info2">Barba</div>
          </div>
          <div class="Serviço3">
            <div class="serviço-ativo">
              <img src="https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/Pagina%203/corte%20navalhado.jpg?raw=true" alt="corte navalhado" onclick="mostrarInfo('Serviço3')">
              <div class="serviço-info">R$ 35,00</div>
            </div>
            <div class="texto-info3">Corte Navalhado</div>
          </div>
          <div class="Serviço4">
            <div class="serviço-ativo">
              <img src="https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/Pagina%203/sobrancelha.jpg?raw=true" alt="sobrancelha" onclick="mostrarInfo('Serviço4')">
              <div class="serviço-info">R$ 15,00</div>
            </div>
            <div class="texto-info4">Sobrancelha</div>
          </div>
          <div class="Serviço5">
            <div class="serviço-ativo">
              <img src="https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/Pagina%203/luzes.jpg?raw=true" alt="luzes" onclick="mostrarInfo('Serviço5')">
              <div class="serviço-info">R$ 100,00</div>
            </div>
            <div class="texto-info5">Luzes</div>
          </div>
          <div class="Serviço6">
            <div class="serviço-ativo">
              <img src="https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/Pagina%203/alisamento.jpg?raw=true" alt="alisamento" onclick="mostrarInfo('Serviço6')">
              <div class="serviço-info">R$ 30,00</div>
            </div>
            <div class="texto-info6">Alisamento</div>
          </div>
        </div>
        <p class="texto-sugestivo">Outros serviços, contate nossos profissionais abaixo:</p>
        <div class="container">
          <button class="expandButton" data-target="button1">
            <img src="https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/Pagina%203/barber%201.png?raw=true" alt="barbeiro 1" class="button-image">
            <a href="https://wa.me/+5562982918497">
              <span class="button-text">Adelino</span>
            </a>
          </button>
          <button class="expandButton" data-target="button2">
            <img src="https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/Pagina%203/barber%202.png?raw=true" alt="barbeiro 2" class="button-image">
            <a href="https://wa.me/+5562994327569">
              <span class="button-text">Junior</span>
            </a>
          </button>
          <button class="expandButton" data-target="button3">
            <img src="https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/Pagina%203/barber%203.png?raw=true" alt="barbeiro 3" class="button-image">
            <a href="https://wa.me/+5562992890566">
              <span class="button-text">Dheymisson</span>
            </a>
          </button>
        </div>
        <button id="Botao2">Voltar</button>
      </div>
    </div>
    <!--Opção 2-->
    <div id="pagina4" style="display:none;">
      <header>
        <img class="header-img" src="https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/Cabe%C3%A7alho.png?raw=true" alt="Cabeçalho">
      </header>
      <div class="pagi">
        <div class="containe">
          <img class="hover-image" id="imagemAtual" src="https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/pagina%204/1%20descri%C3%A7%C3%A3o/img%20barber-7.jpg?raw=true" alt="Imagem 1">
          <p class="exp">Em nossa barbearia, oferecemos um amplo espaço de atendimento, projetado para proporcionar aos nossos clientes uma experiência excepcional. Nossa área de trabalho é equipada com as melhores cadeiras de barbeiro, ferramentas de alta qualidade e uma atmosfera acolhedora.</p>
        </div>
        <div class="containe">
          <img class="hover-image" id="imagemAtual2" src="https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/pagina%204/2%20descri%C3%A7%C3%A3o/img%20barber-14.jpg?raw=true" alt="Imagem 1">
          <p class="exp">Oferecemos um amplo espaço de lazer enquanto você espera. Você pode relaxar em assentos confortáveis, desfrutar de entretenimento como TV e boa musica alem de varias bebidas para se refrescar enquanto espera.</p>
        </div>
        <div class="containe">
          <img class="hover-image" id="imagemAtual3" src="https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/pagina%204/3%20descri%C3%A7%C3%A3o/img%20barber-29.jpg?raw=true" alt="teste3">
          <p class="exp">Visite nossa barbearia, onde a qualidade encontra o conforto. Nossos barbeiros profissionais estão prontos para lhe proporcionar uma experiência única. Venha desfrutar de um corte de cabelo de alta qualidade, um barbear suave e um ambiente acolhedor. Estamos ansiosos para atendê-lo.</p>
        </div>
        <div>
          <p class="info-mapa">Faça-nos uma visita:</p>
          <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3822.1817763059894!2d-49.3266695884615!3d-16.667784745002614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935ef3fb6389f7cb%3A0x5811a4d0ca7c31bb!2sBarbearia%20Corte%20e%20Arte!5e0!3m2!1spt-BR!2sbr!4v1703286070293!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <p class="info-loc"> Avenida Pirineus, Qd 53, Lt 11 - 74453-220 - São Francisco - Goiania/Go </p>
        </div>
      </div>
      <button id="Botao3">Voltar</button>
    </div>
    <!--Opção 3-->
    <div id="pagina5" style="display:none;">
      <header>
        <img class="header-img" src="https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/Cabe%C3%A7alho.png?raw=true" alt="Cabeçalho">
      </header>
      <button id="Botao3">Voltar</button>
    </div>
    </div>
    <!--Opção 4-->
    <div id="pagina6" style="display:none;">
      <header>
        <img class="header-img" src="https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/Cabe%C3%A7alho.png?raw=true" alt="Cabeçalho">
      </header>
      <div class="pag">
        <div class="containe-barb">
 
          <div class="grupo">
            <p>Adelino Marciel</p>

            <div class="info-foto1">
              <img src="https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/Pagina%205/img%20barber-48.jpg?raw=true" alt="barber1">
            </div>
            <p class="info-rede">Acesse minhas redes Sociais:</p>
            <div class="social-media">
              <a href="https://www.instagram.com/barbeariacorteeartegyn/" target="_blank">
                <i class="fab fa-instagram"></i></a>
              <a href="https://web.facebook.com/adelino.m.macedo.9" target="_blank">
                <i class="fab fa-facebook"></i></a>
              <a href="https://wa.me/+5562982918497" target="_blank">
                <i class="fab fa-whatsapp"></i></a>
            </div>
          </div>

          <div class="grupo">
            <p>Gerlan Junior</p>

            <div class="info-foto2">
              <img src="https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/Pagina%205/barber%202.png?raw=true" alt="barber2">
            </div>
            <p class="info-rede">Acesse minhas redes Sociais:</p>
            <div class="social-media">

              <a href="https://www.instagram.com/jrbarber.br/" target="_blank">
                <i class="fab fa-instagram"></i></a>
              <a href="https://wa.me/+5562994327569" target="_blank">
                <i class="fab fa-whatsapp"></i></a>
            </div>
          </div>

          <div class="grupo">
            <p>Dheymisson Neves</p>

            <div class="info-foto3">
              <img src="https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/Pagina%205/barber%203.png?raw=true" alt="barber3">
            </div>
            <p class="info-rede">Acesse minhas redes Sociais:</p>
            <div class="social-media">
              <a href="https://www.instagram.com/dheymisson_ataides" target="_blank">
                <i class="fab fa-instagram"></i></a>
              <a href="https://web.facebook.com/dheymisson.ataides" target="_blank">
                <i class="fab fa-facebook"></i></a>
              <a href="https://wa.me/+5562992890566" target="_blank">
                <i class="fab fa-whatsapp"></i></a>
            </div>
          </div>

        </div>
        <button id="Botao4">Voltar</button>
      </div>
    </div>

<script>
  document.querySelectorAll('.expandButton').forEach(function(button) {
  button.addEventListener('click', function() {
    var image = this.querySelector('.button-image');
    this.classList.toggle('expanded');
    image.classList.toggle('expanded-image');
    var link = this.querySelector('a');
    if (!link && this.classList.contains('expanded')) {
      link = document.createElement('a');
      link.href = 'seu-link-aqui';
      link.appendChild(image.cloneNode(true));
      this.innerHTML = '';
      this.appendChild(link);
    } else if (link && !this.classList.contains('expanded')) {
      this.innerHTML = '';
      this.appendChild(image);
    }
  });
});
document.getElementById("Botao1").addEventListener("click", function() {
  document.getElementById("pagina2").style.display = "block";
  document.getElementById("pagina1").style.display = "none";
});
document.getElementById("Botao2").addEventListener("click", function() {
  document.getElementById("pagina2").style.display = "block";
  document.getElementById("pagina3").style.display = "none";
});
document.getElementById("Botao3").addEventListener("click", function() {
  document.getElementById("pagina2").style.display = "block";
  document.getElementById("pagina4").style.display = "none";
});
document.getElementById("Botao4").addEventListener("click", function() {
  document.getElementById("pagina2").style.display = "block";
  document.getElementById("pagina6").style.display = "none";
});
document.getElementById("Opção1").addEventListener("click", function() {
  document.getElementById("pagina3").style.display = "block";
  document.getElementById("pagina2").style.display = "none";
});
document.getElementById("Opção2").addEventListener("click", function() {
  document.getElementById("pagina4").style.display = "block";
  document.getElementById("pagina2").style.display = "none";
});
document.getElementById("Opção4").addEventListener("click", function() {
  document.getElementById("pagina6").style.display = "block";
  document.getElementById("pagina2").style.display = "none";
});
// Se os serviços são elementos com a classe .serviço-ativo
var serviços = document.querySelectorAll('.serviço-ativo');

function mostrarInfo(id) {
  const serviço = document.querySelector(`.${id}`);
  serviços.forEach(outroServiço => outroServiço.classList.remove('serviço-ativo'));
  serviço.classList.add('serviço-ativo');
}
var imagens1 = ["https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/pagina%204/1%20descri%C3%A7%C3%A3o/img%20barber-1.jpg?raw=true", "https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/pagina%204/1%20descri%C3%A7%C3%A3o/img%20barber-5.jpg?raw=true", "https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/pagina%204/1%20descri%C3%A7%C3%A3o/img%20barber-7.jpg?raw=true"];
var imagens2 = ["https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/pagina%204/2%20descri%C3%A7%C3%A3o/img%20barber-14.jpg?raw=true", "https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/pagina%204/2%20descri%C3%A7%C3%A3o/img%20barber-15.jpg?raw=true", "https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/pagina%204/2%20descri%C3%A7%C3%A3o/img%20barber-19.jpg?raw=true"];
var imagens3 = ["https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/pagina%204/3%20descri%C3%A7%C3%A3o/img%20barber-29.jpg?raw=true", "https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/pagina%204/3%20descri%C3%A7%C3%A3o/img%20barber-24.jpg?raw=true", "https://github.com/Goguenblouts/Barbearia-Corte-Arte/blob/main/pagina%204/3%20descri%C3%A7%C3%A3o/img%20barber-27.jpg?raw=true"];
var indiceAtual1 = 0;
var indiceAtual2 = 0;
var indiceAtual3 = 0;
var imagemAtual = document.getElementById("imagemAtual");
var imagemAtual2 = document.getElementById("imagemAtual2");
var imagemAtual3 = document.getElementById("imagemAtual3");

function mudarImagem() {
  imagemAtual.src = imagens1[indiceAtual1];
  imagemAtual2.src = imagens2[indiceAtual2];
  imagemAtual3.src = imagens3[indiceAtual3];
  indiceAtual1 = (indiceAtual1 + 1) % imagens1.length;
  indiceAtual2 = (indiceAtual2 + 1) % imagens2.length;
  indiceAtual3 = (indiceAtual3 + 1) % imagens3.length;
}
// Configuração para mudar automaticamente a cada 5 segundos (5000 milissegundos)
setInterval(mudarImagem, 5000);
  </script>

</body>
</html>
