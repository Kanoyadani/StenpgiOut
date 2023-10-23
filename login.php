<?php

include_once("dbo.php");




//   if (!$conn) {
//     die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
// }

if (!isset($_SESSION['login'])) {

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $userform = $_POST['login'];
    $passform = $_POST['senha'];

    session_start();
    $_SESSION['login'] = $userform;

    $sql = "SELECT count(1) FROM usuarios WHERE USr = '$userform' AND SENHA = '$passform'";
    $result = mysqli_query($conn, $sql);

    if ($result >= 1) {
      header("Location: home.php");
    }

    // Lembre-se de usar aspas simples para strings na consulta SQL e proteger contra SQL injection


  }
} else {
  header("Location: home.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Login e cadastro </title>
  <link rel="stylesheet" href="./Programação Web/style.css">
  <script src="./Programação Web/script.js" defer></script>
</head>

<body>





  <form method="post">
    <div id="login">
      <h1> Login </h1>
      <input type="text" placeholder="Nome:" class="estilo_login" name='login'>
      <br> </br>
      <input type="password" placeholder="Senha:" class="estilo_login" name='senha'>
      <br> </br>
      <input type="submit" id="botao1" href="login.php" value="Entrar">

    </div>
  </form>

</body>

</html>