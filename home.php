<?php

  if(isset($_SESSION['login'])){
    header("Location: home.php");
   // echo  $_SESSION['login']; 
  }
  if(isset($_GET['pegartenis'])){
    echo ":D";

    $tenis = $_GET['pegartenis'];
    //$usr = $_SESSION['login'];
    $conexao = mysqli_connect("localhost", "root", "", "aulaphp");
    $isser = "INSERT INTO carrinho (NomeTenis) VALUES ( '$tenis');";

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
    <script
      src="https://pro.fontawesome.com/releases/v5.13.0/js/all.js"
      crossorigin="anonymous"
    ></script>
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

            <a href=""><h2 class="sidebar_marcas">Nike</h2></a>

            <a href=""><h2 class="sidebar_marcas">Adidas</h2></a>

            <a href=""><h2 class="sidebar_marcas">Puma</h2></a>

            <a href=""><h2 class="sidebar_marcas">Reebok</h2></a>

            <a href=""><h2 class="sidebar_marcas">New Balance</h2></a>

            <a href=""><h2 class="sidebar_marcas">Converse</h2></a>

            <a href=""><h2 class="sidebar_marcas">Vans</h2></a>

            <a href=""><h2 class="sidebar_marcas">Under Armour</h2></a>
              
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
        <div><a href="?pegartenis=rebookClassic"><img class="produtos" src="Reebok classic..png" alt="" id="rebook1"></a></div>
        <div><a href="pegartenis=rebookBB4000"><img class="produtos" src="Reebok BB4000.png" alt="" id="reebok2"></a></div>
        <div><a href="pegartenis=rebookLevante"><img class="produtos" src="" alt="ReebokLevante..png" id="reebok3"></a></div>
        <div><a href="pegartenis=rebookCourtAdvance"><img class="produtos" src="ReebookCourtAdvance.png" alt="" id="reebok4"></a></div>
       
      </div>

      <div id="produtos_all_div">
        <h1>VANS</h1>
        <div><a href="?pegartenis=vansComfycuch"><img class="produtos" src="VansComfycuch.png" alt="" name="vans1"></a></div>
        <div><a href="?pegartenis=vanswardcanvas"><img class="produtos" src="VansWardCanvas.png" alt="" id="vans2"></a></div>
        <div><a href="?pegartenis=vansxonepice"><img class="produtos" src="Vans x onepiece.png" alt="" id="vans3"></a></div>
        <div><a href="?pegartenis=vanscaldrone"><img class="produtos" src="Vans caldrone.png" alt="" id="vans4"></a></div>

      </div>

      <div id="produtos_all_div">
        <h1>Adidas</h1>
        <div><a href="pegartenis=adidasMND"><img class="produtos" src="" alt="adidas.png" id="adidas1"></a></div>
        <div><a href="pegartenis=adidasgrandcourt"><img class="produtos" src="Adidas Grand Court.png" alt="" id="adidas2"></a></div>
        <div><a href="pegartenis=adidasFukasa"><img class="produtos" src="Adidas Fukasa.png" alt="" id="adidas3"></a></div>
        <div><a href="pegartenis=adidasYeezy"><img class="produtos" src="Adidas Yeezy.png" alt="" id="adidas4"></a></div>
        <div><a href="pegartenis=adidasForum84"><img class="produtos" src="Adidas Forum84.png" alt="" id="adidas4"></a></div>

      </div>

      <div id="produtos_all_div">
        <h1>Nike</h1>
        <div><a href="pegartenis=Tênis NikeAirForce "><img class="produtos" src="air force.webp" alt="" id="nike1"></a></div>
        <div><a href="pegartenis=TênisAirJordan "><img class="produtos" src="nike.png" alt="" id="nike2"></a></div>
        <div><a href="pegartenis=nikeRun"><img class="produtos" src="nike run.png" alt="" id="nike3"></a></div>
        <div><a href="pegartenis=nikeAirMax"><img class="produtos" src="Design sem nome.png" alt="" id="nike4"></a></div>
        <div><a href="pegartenis=nikeSBForce"><img class="produtos" src="NikeSb.png" alt="" id="nike5"></a></div>
      </div>

      <div id="produtos_all_div">
        <h1>Puma</h1>
        <div><a href="pegartenis=PumaSmash"><img class="produtos" src="puma.png" alt="" id="puma1"></a></div>
        <div><a href="pegartenis=pumaTrinity"><img class="produtos" src="puma trinity.png" alt="" id="puma2"></a></div>
        <div><a href="pegartenis=pumaXRay"><img class="produtos" src="puma Xray.png" alt="" id="puma3"></a></div>
        <div><a href="pegartenis=pumaflyer"><img class="produtos" src="puma flyer.png" alt="" id="puma4"></a></div>
        <div><a href="pegartenis=pumaRsX"><img class="produtos" src="puma Rs.png" alt="" id="puma5"></a></div>

      </div>
    </div>


    <div id="footer">

      <div class="testo">

        <h2>Preset</h2>

        <a href=""><p>Preset</p></a>
        <a href=""><p>Preset</p></a>
        <a href=""><p>Preset</p></a>

      </div>

      <div class="testo">

        <h2>Preset</h2>

        <a href=""><p>Preset</p></a>
        <a href=""><p>Preset</p></a>
        <a href=""><p>Preset</p></a>

      </div>

      <div class="testo">

        <h2>Preset</h2>

        <a href=""><p>Preset</p></a>
        <a href=""><p>Preset</p></a>
        <a href=""><p>Preset</p></a>

      </div>

      <div class="testo">

        <h2>Preset</h2>

        <a href=""><p>Preset</p></a>
        <a href=""><p>Preset</p></a>
        <a href=""><p>Preset</p></a>

      </div>

    </div>

    <div id="footer_2">

      <img id="logo_end" src="imagens_icones/steppin_out.png" alt="">

    </div>
    
  </body>
</html>