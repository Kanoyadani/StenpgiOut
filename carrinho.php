<?php
include_once("dbo.php");
session_start();

$user = $_SESSION["login"];

$sqlitens = "SELECT c.nomeTenis,t.preco FROM carrinho c JOIN Tenis T ON T.NomeTenis = c.Nometenis WHERE USR = '$user'";
$result = mysqli_query($conn, $sqlitens);

//print_r($result);



if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Lembre-se de usar aspas simples para strings na consulta SQL e proteger contra SQL injection
  $sql = "DELETE FROM carrinho  WHERE USR = '$user'";
  $result = mysqli_query($conn, $sql);
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Carrinho de Compras</title>
  <link rel="stylesheet" href="carrinho.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
  <header>
    <span>Carrinho de compras dos tênis </span>
  </header>
  <main>
    <div class="page-title">Seu Carrinho</div>
    <div class="content">
      <section>
        <table>
          <thead>
            <tr>
              <th>Produto</th>
              <th>Preço</th>

              <th>-</th>
            </tr>
          </thead>
          <div>

            <?php
            $sqlitens = "SELECT c.nomeTenis,t.preco FROM carrinho c JOIN Tenis T ON T.NomeTenis = c.Nometenis WHERE USR = '$user'";
            $result = mysqli_query($conn, $sqlitens);

            //print_r($result);

            while ($row = $result->fetch_assoc()) {
              echo "<tr>
               <td>
                  <div class='product'>
          
                   <div class='info'>";
              echo "<div class='name'>" . $row['nomeTenis'] . "</div>";

              echo "</div>
                 </div>
                </td>";
              echo "<td>" . $row['preco'] . "</td>";
            }


            ?>


          </div>
        </table>
      </section>
      <aside>
        <div class="box">
          <header>Resumo da compra</header>
          <div class="info">
            <div><span>Frete</span><span>Gratuito</span></div>
            <div>
              <button>
                Adicionar cupom de desconto
                <i class="bx bx-right-arrow-alt"></i>
              </button>
            </div>
          </div>
          <footer>
            <span>Total:
            </span>
            <span><?php
                  $sqlpreco = "SELECT  SUM(preco) as total FROM carrinho c JOIN Tenis T ON T.NomeTenis = c.Nometenis WHERE USR = '$user'";
                  $result = mysqli_query($conn, $sqlpreco);


                  $valor = mysqli_fetch_assoc($result);
                  echo $valor['total'];

                  ?></span>
          </footer>
        </div>
        <form method="post"><input type="submit" name="comprar" value='Finalizar Compra'></form>
      </aside>
    </div>
  </main>
</body>

</html>