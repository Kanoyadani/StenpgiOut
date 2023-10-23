<?php






if (!isset($_SESSION["login"])) {
    // Usuário autenticado com sucesso
    
    
    header("Location: login.php");
    
    

}else{
    

    header("Location: home.php");
    
}
