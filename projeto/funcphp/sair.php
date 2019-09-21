<!-- serve para deslogar de uma conta do site, detruir a sessão e redirecionar para a pagina de login -->
<?php
session_start();
session_unset();
session_destroy();
header("Location: ../login/login.php");
?>