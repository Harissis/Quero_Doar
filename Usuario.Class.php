<?php

class Usuario
{

    public function login($cpf_cnpj, $senha)
    {
        global $pdo;
        $sql = "SELECT * FROM users WHERE cpf_cnpj = :cpf_cnpj AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("cpf_cnpj", $cpf_cnpj);
        $sql->bindValue("senha", md5($senha));
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();

            $_SESSION['idUser'] = $dado['idusuario'];
            return true;
        } else {
            return false;
        }
    }

    public function logged($id)
    {
        global $pdo;

        $array = array();

        $sql = "SELECT nome FROM users WHERE idusuario = :idusuario";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("idusuario", $id);
        $sql->execute();


        if ($sql->rowCount() > 0) {

            $array = $sql->fetch();
        }

        return $array;
    }

}
?>