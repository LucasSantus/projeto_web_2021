<?php

if(!isset($_SESSION["nome"])){
    header('Location: ?pg=login/formulario');
}

?>

<h1>Área restrita</h1>

<p>Seja Bem-vindo(a), <?= $_SESSION["nome"] ?>!</p>

<p>Tem Permissão de Administrador!</p>