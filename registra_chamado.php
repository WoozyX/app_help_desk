<?php
    session_start();
    echo '<pre/>';
    print_r($_POST);
    echo '<pre/>';

    $arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');

    // $titulo = str_replace('#','-',$_POST['titulo']) ;
    // $categoria = str_replace('#','-',$_POST['categoria']);
    // $descricao = str_replace('#','-',$_POST['descricao']);

    // $texto = $titulo . '#' . $categoria . '#' . $descricao;

    $texto = $_SESSION['id'] . '#' . implode('#',$_POST) .  PHP_EOL;

    fwrite($arquivo, $texto);

    fclose($arquivo);

    header('Location: abrir_chamado.php')

    // echo $texto;

?>
