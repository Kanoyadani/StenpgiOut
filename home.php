<?php

session_start();


if (isset($_GET['pegartenis'])) {
  $usr   = $_SESSION['login'];
  $tenis = $_GET['pegartenis'];
  //$usr = $_SESSION['login'];
  $conexao = mysqli_connect("localhost", "root", "", "aulaphp");
  $isser = "INSERT INTO carrinho (USR,NomeTenis) VALUES ( '$usr','$tenis');";

  mysqli_query($conexao, $isser);
  header("Location: Home.php");
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Lembre-se de usar aspas simples para strings na consulta SQL e proteger contra SQL injection
  header("Location: carrinho.php");
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Steppin Out</title>
  <link rel="stylesheet" href="home.css" />
  <script src="https://pro.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
  <script src="home.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

  <div id="header">

    <div id="header_1">

      <!-- Botão para abrir a barra lateral -->
      <button id="open-sidebar" onclick="toggleSidebar()"><img src="imagens_icones/sidebar.png" alt=""></button>

      <!-- Barra lateral -->
      <div id="mySidebar" class="sidebar">
        <div class="sidebar-content">

          <h1 id="sidebar_titulo">MARCAS</h1>

          <a href="">
            <h2 class="sidebar_marcas">Nike</h2>
          </a>

          <a href="">
            <h2 class="sidebar_marcas">Adidas</h2>
          </a>

          <a href="">
            <h2 class="sidebar_marcas">Puma</h2>
          </a>

          <a href="">
            <h2 class="sidebar_marcas">Reebok</h2>
          </a>

          <a href="">
            <h2 class="sidebar_marcas">Vans</h2>
          </a>

        </div>
      </div>

      <a href=""><img id="logo" src="imagens_icones/steppin_out_cropped-removebg-preview.png" alt=""></a>

    </div>


    <div id="header_3">


      <form method="post"><input type="submit" name="comprar" value='Carrinho'></form>
    </div>

  </div>

  </div>

  <div id="parent-container">

    <div class="navigation-buttons">
      <div class="previous nav-btn">
        << /div>
          <div class="next nav-btn">></div>
      </div>

      <div class="slider-carousel">
        <div class="images main">
          <img src="./imagens_icones/ad_main_1.png" alt="flower 1" />
        </div>
        <div class="images">
          <img src="./imagens_icones/ad_main_2.png" alt="flower 2" />
        </div>
        <div class="images">
          <img src="./imagens_icones/ad_main_3.png" alt="flower 3" />
        </div>
        <div class="images">
          <img src="./imagens_icones/ad_main_4.png" alt="flower 3" />
        </div>
      </div>

    </div>


    <div id="destaques">

      <div id="titulos">

        <h2 class="titulo">Destaques</h2>

      </div>

      <hr>

      <div id="produtos_destaques">

        <div class="produtos_destaques_conteiner">
          <div><a href="?pegartenis=Classic"><img class="produtos" src="./tenis imagens/Reebok/Reebok classic.webp.jpg" alt="rebook1" id="rebook1"></a></div>
          <h2 class="tenis_nome">Reebok Classic</h2>
          <h3 class="tenis_preco">300R$</h3>
        </div>
        <div class="produtos_destaques_conteiner">
          <div><a href="?pegartenis=Flexagon"><img class="produtos" src="./tenis imagens/Reebok/Reebok Flexagon.webp" alt="reebok2" id="reebok2"></a></div>
          <h2 class="tenis_nome">Reebok Flexagon</h2>
          <h3 class="tenis_preco">230RS$</h3>
        </div>
        <div class="produtos_destaques_conteiner">
          <div><a href="?pegartenis=Levante"><img class="produtos" src="./tenis imagens/Reebok/ReebokLevante.webp" alt="reebok3" id="reebok3"></a></div>
          <h2 class="tenis_nome">Reebok Lavante</h2>
          <h3 class="tenis_preco">500R$</h3>
        </div>
        <div class="produtos_destaques_conteiner">
          <div><a href="?pegartenis=Court"><img class="produtos" src="./tenis imagens/Reebok/ReebookCourtAdvance.jpg" alt="reebok4" id="reebok4"></a></div>
          <h2 class="tenis_nome">Reebok Court</h2>
          <h3 class="tenis_preco">500R$</h3>
        </div>


      </div>

    </div>


    <div id="descontos">
      <div id="titulos">

        <h2 class="titulo">Produtos em Descontos</h2>

      </div>

      <hr>

      <div id="produtos_discontos">

        <div id="produtos_discontos_div">
          <div class="produtos_disconto_conteiner">
            <div><a href="?pegartenis=comfycuch"><img class="produtos" src="./tenis imagens/Vans/VansComfycuch.webp" alt="vans1" name="vans1"></a></div>
            <h2 class="tenis_nome">Vans comfycush</h2>
            <div class="produtos_discontos_testo">
              <h3 class="tenis_preco">450R$</h3>
            </div>
          </div>
          <div class="produtos_disconto_conteiner">
            <div><a href="?pegartenis=WardCanvas"><img class="produtos" src="./tenis imagens/Vans/VansWardCanvas.webp.jpg" alt="vans2" id="vans2"></a></div>
            <h2 class="tenis_nome">Vans Ward Canvas </h2>
            <div class="produtos_discontos_testo">
              <h3 class="tenis_preco">350R$</h3>
            </div>
          </div>
        </div>

      </div>
    </div>



    <div id="ad">

      <img id="ad2" src="./imagens_icones/ad2.png" alt="">

    </div>



    <div id="stepping">

      <div id="titulos">

        <h2 class="titulo">Stepping Out</h2>

      </div>

      <hr>

      <div id="produtos_stepping_div">

        <div id="image_stepping">

          <img id="stepping_image" src="./imagens_icones/stepping_image.png" alt="">

        </div>

        <div id="produtos_stepping_div_2">
          <div id="produtos_stepping">

            <div class="produtos_stepping_conteiner">
              <div><a href="?pegartenis=vansxOnePice"><img class="produtos" src="./tenis imagens/Vans/Vans x onepiece.webp" alt="vans3" id="vans3"></a></div>
              <h2 class="tenis_nome">Vans x OnePiece</h2>
              <h3 class="tenis_preco">330R$</h3>
            </div>
            <div class="produtos_stepping_conteiner">
              <div><a href="?pegartenis=vanscaldrone"><img class="produtos" src="./tenis imagens/Vans/Vans caldrone.webp" alt="vans4" id="vans4"></a></div>
              <h2 class="tenis_nome">Vans Caldrone</h2>
              <h3 class="tenis_preco">420R$</h3>
            </div>
            <div class="produtos_stepping_conteiner">
              <div><a href="?pegartenis=Forum84"><img class="produtos" src="./tenis imagens/Adidas/Adidas Forum84.webp" alt="adidas1" id="adidas1"></a></div>
              <h2 class="tenis_nome">Adidas Forum84</h2>
              <h3 class="tenis_preco">800R$</h3>
            </div>

          </div>
          <div id="produtos_stepping">

            <div class="produtos_stepping_conteiner">
              <div><a href="?pegartenis=GrandCourt"><img class="produtos" src="./tenis imagens/Adidas/Adidas Grand Court.webp" alt="adidas2" id="adidas2"></a></div>
              <h2 class="tenis_nome">Adidas Grand Court</h2>
              <h3 class="tenis_preco">400R$</h3>
            </div>
            <div class="produtos_stepping_conteiner">
              <div><a href="?pegartenis=Fukasa"><img class="produtos" src="./tenis imagens/Adidas/Adidas Fukasa.avif" alt="adidas3" id="adidas3"></a></div>
              <h2 class="tenis_nome">Adidas Fukasa</h2>
              <h3 class="tenis_preco">350R$</h3>
            </div>
            <div class="produtos_stepping_conteiner">
              <div><a href="pegartenis=Yeezy"><img class="produtos" src="./tenis imagens/Adidas/Adidas Yeezy.webp" alt="adidas4" id="adidas4"></a></div>
              <h2 class="tenis_nome">Adidas Yeezy</h2>
              <h3 class="tenis_preco">1.500$</h3>
            </div>

          </div>
        </div>

      </div>

    </div>


    <div id="marcas">

      <button class="marcas_buttons"><img class="marcas_logo" src="imagens_icones/nike_logo.png" alt=""></button>

      <button class="marcas_buttons"><img class="marcas_logo" src="imagens_icones/adidas_logo.png" alt=""></button>

      <button class="marcas_buttons"><img class="marcas_logo" src="imagens_icones/puma_logo.png" alt=""></button>

      <button class="marcas_buttons"><img class="marcas_logo" src="imagens_icones/reebok_logo.png" alt=""></button>

      <button class="marcas_buttons"><img class="marcas_logo" src="imagens_icones/vans_logo.png" alt=""></button>

    </div>



    <div id="produtos_all">
      <div id="produtos_all_div">

        <div class="produtos_all_conteiner">
          <div><a href="?pegartenis=AirForce "><img class="produtos" src="./tenis imagens/Nike/nike air force.webp" alt="nike1" id="nike1"></a></div>
          <h2 class="tenis_nome">Nike Air Force</h2>
          <h3 class="tenis_preco">600R$</h3>
        </div>
        <div class="produtos_all_conteiner">
          <div><a href="?pegartenis=SB"><img class="produtos" src="./tenis imagens/Nike/nike Sb.webp" alt="nike2" id="nike2"></a></div>
          <h2 class="tenis_nome">Nike Sb</h2>
          <h3 class="tenis_preco">170R$</h3>
        </div>
        <div class="produtos_all_conteiner">
          <div><a href="?fpegartenis=Run"><img class="produtos" src="./tenis imagens/Nike/nike run.webp" alt="nike3" id="nike3"></a></div>
          <h2 class="tenis_nome">Nike Run</h2>
          <h3 class="tenis_preco">450R$</h3>
        </div>
        <div class="produtos_all_conteiner">
          <div><a href="?pegartenis=AirMax"><img class="produtos" src="./tenis imagens/Nike/Nike air max.jpg" alt="nike4" id="nike4"></a></div>
          <h2 class="tenis_nome">Nike Air Max </h2>
          <h3 class="tenis_preco">480R$</h3>
        </div>

      </div>

      <div id="produtos_all_div">

        <div class="produtos_all_conteiner">
          <div><a href="?pegartenis=Smash"><img class="produtos" src="./tenis imagens/Puma/puma smash.webp" alt="puma1" id="puma1"></a></div>
          <h2 class="tenis_nome">PumaSmash</h2>
          <h3 class="tenis_preco">300R$</h3>
        </div>
        <div class="produtos_all_conteiner">
          <div><a href="?pegartenis=Trinity"><img class="produtos" src="./tenis imagens/Puma/puma trinity.webp" alt="puma2" id="puma2"></a></div>
          <h2 class="tenis_nome">Puma Trinity</h2>
          <h3 class="tenis_preco">450$</h3>
        </div>
        <div class="produtos_all_conteiner">
          <div><a href="?pegartenis=XRay"><img class="produtos" src="./tenis imagens/Puma/puma x ray.webp" alt="puma3" id="puma3"></a></div>
          <h2 class="tenis_nome">Puma x Ray</h2>
          <h3 class="tenis_preco">500R$</h3>
        </div>
        <div class="produtos_all_conteiner">
          <div><a href="?pegartenis=RX-X"><img class="produtos" src="./tenis imagens/Puma/puma RS-X.webp.jpg" alt="puma4" id="puma4"></a></div>
          <h2 class="tenis_nome">Puma RS-X</h2>
          <h3 class="tenis_preco">600R$</h3>
        </div>

      </div>
    </div>


    <div id="footer">

      <div class="testo">

        <h2 class="tenis_nome">FALE CONOSCO</h2>

        <a href="">
          <p>rodrigokanoyadani1@gmail.com</p>
        </a>
        <a href="">
          <p>hp.henrique11@gmail.com</p>
        </a>
        <a href="">
          <p>sabinolucasc@gmail.com</p>
        </a>

      </div>

    </div>

    <div id="footer_2">

      <img id="logo_end" src="imagens_icones/steppin_out.png" alt="">

    </div>

</body>

</html>