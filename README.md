<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Double+Basstrial">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Double+Bass+Trial+Regular">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alako">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alberta">
     
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
      @media only screen and (max-width: 600px) {
  .container {
    width: 90%;
    height: auto;
    padding: 10px;
  }

  h1 {
    font-size: 16px;
    margin-bottom: 20px;
  }

  h2 {
    font-size: 24px;
    margin-bottom: 20px;
  }

  h3 {
    font-size: 16px;
  }

  p,
  li {
    font-size: 14px;
    margin-bottom: 10px;
  }

  .additional-info {
    margin-top: 20px;
  }
}

    </style>

    <title>Delicias da Rô</title>
    <style>  
 /*posiciona a estrela 1*/
      #myCanvas1 {
        border: 0px solid rgb(255, 255, 255);
        width: 20px;
        height: 20px;
        position: fixed;
        top: 7%;
        left: 38%;
        animation: rotate1 5s linear infinite; /* Adiciona a animação de rotação */
      }

      @keyframes rotate1 {
        from {
          transform: rotate(0deg);
        }
        to {
          transform: rotate(360deg);
        }
      }
      
      /*posiciona a estrela 2*/
      #myCanvas2 {
        border: 0px solid rgb(255, 255, 255);
        width: 20px;
        height: 20px;
        position: fixed;
        top: 7%;
        left: 60%;
        animation: rotate2 5s linear infinite; /* Adiciona a animação de rotação */
      }

      @keyframes rotate2 {
        from {
          transform: rotate(0deg);
        }
        to {
          transform: rotate(360deg);
        }
      }
      body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: rgb(0, 58, 167);
      }

      .container {
        border-radius: 20px;
        width: 300px;
        height: 400px;
        background-color: #ffffff;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      }
      h1{
        font-family: doublebass trial, sans-serif;
        text-align: center;
        color: white;
        font-size: 20px;
        margin-bottom: 570px;
        position: absolute;
     }
      h2{
        font-family: doublebass trial regular, sans-serif;
        text-align: center;
        color: rgb(255, 208, 0);
        font-size:45px;
        margin-bottom: 525px;
        position: absolute;
     }
     .container h3 {
        border-radius: 8px;
        width: 140px;
        height: 12px;
        background-color: rgb(0, 58, 167);
        position: absolute;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 10px;
        color: white;
}
      h3 {
        font-family: doublebass trial regular, sans-serif;
        text-align: center;
        color: rgb(0, 0, 0);
        font-size: 20px;
        position: absolute;
        top: 10%;
      }

      p {
        font-family: Alako, sans-serif;
        font-size: 20px; 
        margin-bottom: 40px;
        text-align: center;
        display: block; 
      }
      .additional-info {
        display: block;
      }

      .btn {
        padding: 10px 20px;
        background-color: #ffcc00;
        color: #ffffff;
        text-decoration: none;
        border-radius: 4px;
        font-weight: bold;
        transition: background-color 0.3s ease;
        position: absolute;
        top: 80%;
      }

      .btn:hover {
        background-color: #ff9900;
      }

      .show {
        display:block;
      }

      .hide {
        display: none;
      }

      .container .segundo-paragrafo {
        border-radius: 2px;
        width: 130px;
        height: 0px;
        background-color: rgb(204, 0, 0);
        position: absolute;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        color: white;
}

      li {
        text-align:justify;
        font-size: 12px;
        line-height: 2;
        font-family: alberta, sans-serif;

      }
      .segundo-btn {
        padding: 2,5px 5px;
        background-color: #ffcc00;
        color: #ffffff;
        text-decoration: none;
        border-radius: 4px;
        font-weight: bold;
        transition: background-color 0.3s ease;
        position: absolute;
        top: 94%;
        left: 42%;
      }
      .segundo-paragrafo {
        font-size: 15px;
        text-align: center;
        margin-bottom: 40px;
        position: absolute;
        top: 87%;
        left: 30%;
     }
    </style>
  </head>
  <body>

    <canvas id="myCanvas1" width="200" height="200"></canvas>
    <canvas id="myCanvas2" width="200" height="200"></canvas>
 
    <div class="container">
      <h1> CARDÁPIO</h1>
      <h2>Junino</h2>
      <h3>DOÇURAS DA RÔ</h3>
      <p>Oferecemos uma variedade de deliciosos doces típicos de festa junina, como paçoca, pé de moleque, pamonha, canjica e muito mais!</p>
      <button class="btn" onclick="showAdditionalInfo()">ACESSAR CARDAPIO</button>
      <div class="additional-info hide">

        <li>MAÇA TRADICIONAL.     .     .     .     .     .     .     .     .     .     .     .     .     .     .     .     . R$ 5,00 und</li>
        <li>MAÇA COLORIDA.     .     .     .     .     .     .     .     .     .     .     .     .     .     .     .     .     .     .     . R$ 7,00  und</li>
        <li>MAÇA GOURMET.     .     .     .     .     .     .     .     .     .     .     .     .     .     .     .     .     .     .     .     .R$ 10,00 und</li>
        <li>CANJICA C/ AMENDOIM(250ML).     .     .     .     .     . R$ 8,00 und</li>
        <li>CANJICA DE NINHO(250ML).     .     .     .     .     .     .     .     .     .     .R$ 10,00 und</li>
        <li>PIPOCA DE SAL E DOCE.     .     .     .     .     .     .     .     .     .     ..     .     .     .     .     R$ 4,00 pct</li>
        <li>PIPOCA DE LEITE NINHO.     .     .     .     .     .     .     .     .     .     .     .     .     .     .R$ 6,00 pct</li>
        <li>AMENDOIM CROCANTE.     .     .     .     .     .     .     .     .     .     .     .     .     .     . R$ 5,00 und</li>
        <li>PÉ DE MOÇA.     .     .     .     .     .     .     .     .     .     .     .     .     .     .     .     .     .     .     .     .     .     .     .     .     .   R$ 4,00 und</li>
        <li>BRIGADEIROS JUNINOS.     .     .     .     .     .     .     .     .     .     .     .     .     .     .     .  R$ 3,00 und</li>
        
        <p class="segundo-paragrafo">Aceitamos Encomendas</p>
        <button class="segundo-btn" onclick="hideAdditionalInfo()">voltar</button>
      </div>
    </div>

    <script>

// Código JavaScript para criar as coordenadas da estrela 1
var canvas1 = document.getElementById("myCanvas1");
      var ctx1 = canvas1.getContext("2d");
      ctx1.beginPath();
      ctx1.moveTo(95, 0);
      ctx1.lineTo(160, 180);
      ctx1.lineTo(0, 70);
      ctx1.lineTo(190, 70);
      ctx1.lineTo(30, 180);
      ctx1.closePath();
      ctx1.fillStyle = "gold";
      ctx1.fill();
      ctx1.stroke();

      // Código JavaScript para criar as coordenadas da estrela 2
      var canvas2 = document.getElementById("myCanvas2");
      var ctx2 = canvas2.getContext("2d");
      ctx2.beginPath();
      ctx2.moveTo(95, 0);
      ctx2.lineTo(160, 180);
      ctx2.lineTo(0, 70);
      ctx2.lineTo(190, 70);
      ctx2.lineTo(30, 180);
      ctx2.closePath();
      ctx2.fillStyle = "gold";
      ctx2.fill();
      ctx2.stroke();
      
      function showAdditionalInfo() {
        var additionalInfo = document.querySelector('.additional-info');
        additionalInfo.classList.remove('hide');

        var btn = document.querySelector('.btn');
        btn.classList.add('hide');

        var paragraph = document.querySelector('p');
        paragraph.classList.add('hide');

        var btn = document.querySelector('.segundo-btn');
        btn.classList.remove('hide');
      }

      function hideAdditionalInfo() {
        var additionalInfo = document.querySelector('.additional-info');
        additionalInfo.classList.add('hide');

        var btn = document.querySelector('.btn');
        btn.classList.remove('hide');

        var paragraph = document.querySelector('p');
        paragraph.classList.remove('hide');

        var btnVoltar = document.querySelector('.segundo-btn');
        btnVoltar.classList.add('hide');
      }
    </script>
  </body>
</html>
