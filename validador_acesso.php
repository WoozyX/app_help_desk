<?php
  session_start();
  // echo $_SESSION['autenticado']; 
  if($_SESSION['autenticado'] === 'NÃO')
    header('Location: index.php?login=erro2'); 
?>