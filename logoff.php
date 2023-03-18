<?php 
session_start();
// //remover indíces específicos do array
// echo '<pre>';
// print_r($_SESSION);
// echo '<pre/>';


// unset($_SESSION['x']);


// echo '<pre>';
// print_r($_SESSION);
// echo '<pre/>';


// destruir sessão

$_SESSION['autenticado'] = 'NÃO';
header('Location: index.php')


?>