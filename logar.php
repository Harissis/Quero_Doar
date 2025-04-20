<?php
if (isset($_POST['cpf_cnpj']) && !empty($_POST['cpf_cnpj']) && isset($_POST['senha']) && !empty($_POST['senha'])) {

    require 'conexao2.php';
    require 'Usuario.Class.php';

    $u = new Usuario();

    $cpf_cnpj = addslashes($_POST['cpf_cnpj']);
    $senha = addslashes($_POST['senha']);

    if ($u->login($cpf_cnpj, $senha) == true) {
        if (isset($_SESSION['idUser'])) {
            header('Location: poslogin.php');
        } else {
            header('Location: login.php');
        }

    } else {
        header("Location: login.php");
    }



} else {
    header('Location: login.php');
}

?>