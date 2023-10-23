<?php

session_start();


if (isset($_GET['pegartenis'])) {
  echo ":D";
  $usr   = $_SESSION['login'];
  $tenis = $_GET['pegartenis'];
  //$usr = $_SESSION['login'];
  $conexao = mysqli_connect("localhost", "root", "", "aulaphp");
  $isser = "INSERT INTO carrinho (USR,NomeTenis) VALUES ( '$usr','$tenis');";

  mysqli_query($conexao, $isser);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Steppin Out</title>
  <link rel="stylesheet" href="style.css" />
  <script src="https://pro.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
  <script src="script.js"></script>
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
            <h2 class="sidebar_marcas">New Balance</h2>
          </a>

          <a href="">
            <h2 class="sidebar_marcas">Converse</h2>
          </a>

          <a href="">
            <h2 class="sidebar_marcas">Vans</h2>
          </a>

          <a href="">
            <h2 class="sidebar_marcas">Under Armour</h2>
          </a>

        </div>
      </div>

      <a href=""><img id="logo" src="imagens_icones/steppin_out_cropped-removebg-preview.png" alt=""></a>

    </div>


    <div id="header_3">

      <button id="cart"><img src="imagens_icones/carrinho.png" alt=""></button>

    </div>

  </div>

  </div>

  <div id="ad">

    <img class="ad_main" src="./imagens_icones/ad_main_1.png" alt="">

  </div>


  <div id="destaques">

    <div id="titulos">

      <h2 class="titulo">Destaques</h2>

    </div>

    <hr>

    <div id="produtos_destaques">

      <div><a href="1"><img class="produtos" src="imagens_icones/tenis.jpg" alt=""></a></div>
      <div><a href="1"><img class="produtos" src="imagens_icones/tenis.jpg" alt=""></a></div>
      <div><a href="1"><img class="produtos" src="imagens_icones/tenis.jpg" alt=""></a></div>
      <div><a href="1"><img class="produtos" src="imagens_icones/tenis.jpg" alt=""></a></div>
      <div><a href="1"><img class="produtos" src="imagens_icones/tenis.jpg" alt=""></a></div>

    </div>

  </div>


  <div id="descontos">
    <div id="titulos">

      <h2 class="titulo">Produtos em Discontos</h2>

    </div>

    <hr>

    <div id="produtos_discontos">

      <div id="produtos_discontos_div">
        <a href="1"><img class="disconto" src="imagens_icones/tenis.jpg" alt=""></a>
        <a href="1"><img class="disconto" src="imagens_icones/tenis.jpg" alt=""></a>
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

          <div><a href="1"><img class="stepping" src="imagens_icones/tenis.jpg" alt=""></a></div>
          <div><a href="1"><img class="stepping" src="imagens_icones/tenis.jpg" alt=""></a></div>
          <div><a href="1"><img class="stepping" src="imagens_icones/tenis.jpg" alt=""></a></div>

        </div>
        <div id="produtos_stepping">

          <div><a href="1"><img class="stepping" src="imagens_icones/tenis.jpg" alt=""></a></div>
          <div><a href="1"><img class="stepping" src="imagens_icones/tenis.jpg" alt=""></a></div>
          <div><a href="1"><img class="stepping" src="imagens_icones/tenis.jpg" alt=""></a></div>

        </div>
      </div>

    </div>

  </div>


  <div id="marcas">

    <button class="marcas_buttons"><img class="marcas_logo" src="imagens_icones/nike_logo.png" alt=""></button>

    <button class="marcas_buttons"><img class="marcas_logo" src="imagens_icones/adidas_logo.png" alt=""></button>

    <button class="marcas_buttons"><img class="marcas_logo" src="imagens_icones/puma_logo.png" alt=""></button>

    <button class="marcas_buttons"><img class="marcas_logo" src="imagens_icones/reebok_logo.png" alt=""></button>

    <button class="marcas_buttons"><img class="marcas_logo" src="imagens_icones/new_balance_logo.png" alt=""></button>

    <button class="marcas_buttons"><img class="marcas_logo" src="imagens_icones/convernce_logo.png" alt=""></button>

    <button class="marcas_buttons"><img class="marcas_logo" src="imagens_icones/vans_logo.png" alt=""></button>

    <button class="marcas_buttons"><img class="marcas_logo" src="imagens_icones/under_armour_logo.png" alt=""></button>

  </div>



  <div id="produtos_all">
    <div id="produtos_all_div">
      <h1>Reebok</h1>
      <div><a href="?pegartenis=rebook1"><img class="produtos" src="imagens_icones/tenis.jpg" alt="" id="rebook1"></a></div>
      <div><a href="pegartenis=rebook2"><img class="produtos" src="imagens_icones/tenis.jpg" alt="" id="reebok2"></a></div>
      <div><a href="pegartenis=rebook3"><img class="produtos" src="imagens_icones/tenis.jpg" alt="" id="reebok3"></a></div>
      <div><a href="pegartenis=rebook4"><img class="produtos" src="imagens_icones/tenis.jpg" alt="" id="reebok4"></a></div>
      <div><a href="pegartenis=rebook5"><img class="produtos" src="imagens_icones/tenis.jpg" alt="" id="reebok5"></a></div>

    </div>

    <div id="produtos_all_div">
      <h1>VANS</h1>
      <div><a href="?pegartenis=Forum84"><img class="produtos" src="Anya.jpeg" alt="" name="Forum84"></a></div>
      <div><a href="?pegartenis=vans2"><img class="produtos" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRi9XpyRgez6JZOQeUa7n0E-IaQrH2AE4eFaOyvMuJMAQ5bvNHKe8qFYIpSlzezvJcUk5Y&usqp=CAU" alt="" id="vans2"></a></div>
      <div><a href="?pegartenis=vans3"><img class="produtos" src="imagens_icones/tenis.jpg" alt="" id="vans3"></a></div>
      <div><a href="?pegartenis=vans4"><img class="produtos" src="imagens_icones/tenis.jpg" alt="" id="vans4"></a></div>
      <div><a href="?pegartenis=vans5"><img class="produtos" src="imagens_icones/tenis.jpg" alt="" id="vans5"></a></div>

    </div>

    <div id="produtos_all_div">
      <h1>Adidas</h1>
      <div><a href="pegartenis=adidas1"><img class="produtos" src="imagens_icones/tenis.jpg" alt="" id="adidas1"></a></div>
      <div><a href="pegartenis=adidas2"><img class="produtos" src="imagens_icones/tenis.jpg" alt="" id="adidas2"></a></div>
      <div><a href="pegartenis=adidas3"><img class="produtos" src="imagens_icones/tenis.jpg" alt="" id="adidas3"></a></div>
      <div><a href="pegartenis=adidas4"><img class="produtos" src="imagens_icones/tenis.jpg" alt="" id="adidas4"></a></div>
      <div><a href="pegartenis=adidas5"><img class="produtos" src="imagens_icones/tenis.jpg" alt="" id="adidas4"></a></div>

    </div>

    <div id="produtos_all_div">
      <h1>Nike</h1>
      <div><a href="pegartenis=nike1"><img class="produtos" src="imagens_icones/tenis.jpg" alt="" id="nike1"></a></div>
      <div><a href="pegartenis=nike2"><img class="produtos" src="imagens_icones/tenis.jpg" alt="" id="nike2"></a></div>
      <div><a href="pegartenis=nike3"><img class="produtos" src="imagens_icones/tenis.jpg" alt="" id="nike3"></a></div>
      <div><a href="pegartenis=nike4"><img class="produtos" src="imagens_icones/tenis.jpg" alt="" id="nike4"></a></div>
      <div><a href="pegartenis=nike5"><img class="produtos" src="imagens_icones/tenis.jpg" alt="" id="nike5"></a></div>
    </div>

    <div id="produtos_all_div">
      <h1>Puma</h1>
      <div><a href="pegartenis=puma1"><img class="produtos" src="imagens_icones/tenis.jpg" alt="" id="puma1"></a></div>
      <div><a href="pegartenis=puma2"><img class="produtos" src="imagens_icones/tenis.jpg" alt="" id="puma2"></a></div>
      <div><a href="pegartenis=puma3"><img class="produtos" src="imagens_icones/tenis.jpg" alt="" id="puma3"></a></div>
      <div><a href="pegartenis=puma4"><img class="produtos" src="imagens_icones/tenis.jpg" alt="" id="puma4"></a></div>
      <div><a href="pegartenis=puma5"><img class="produtos" src="imagens_icones/tenis.jpg" alt="" id="puma5"></a></div>

    </div>
  </div>


  <div id="footer">

    <div class="testo">

      <h2>Preset</h2>

      <a href="">
        <p>Preset</p>
      </a>
      <a href="">
        <p>Preset</p>
      </a>
      <a href="">
        <p>Preset</p>
      </a>

    </div>

    <div class="testo">

      <h2>Preset</h2>

      <a href="">
        <p>Preset</p>
      </a>
      <a href="">
        <p>Preset</p>
      </a>
      <a href="">
        <p>Preset</p>
      </a>

    </div>

    <div class="testo">

      <h2>Preset</h2>

      <a href="">
        <p>Preset</p>
      </a>
      <a href="">
        <p>Preset</p>
      </a>
      <a href="">
        <p>Preset</p>
      </a>

    </div>

    <div class="testo">

      <h2>Preset</h2>

      <a href="">
        <p>Preset</p>
      </a>
      <a href="">
        <p>Preset</p>
      </a>
      <a href="">
        <p>Preset</p>
      </a>

    </div>

  </div>

  <div id="footer_2">

    <img id="logo_end" src="imagens_icones/steppin_out.png" alt="">

  </div>

</body>

</html>