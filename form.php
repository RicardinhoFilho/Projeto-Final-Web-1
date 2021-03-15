<?php
function verifica_campo($texto)
{
    $texto = trim($texto);
    $texto = stripslashes($texto);
    $texto = htmlspecialchars($texto);
    return $texto;
}

$payment = null;
$car = null;
$erro = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["nome"])) {
        $erro_nome = "Nome é obrigatório.";
        $erro = true;
    }
    if (empty($_POST["email"])) {
        $erro_email = "Email é obrigatório.";
        $erro = true;
    }
    if (empty($_POST["CPF"])) {
        $erro_CPF = "Nascimento é obrigatório.";
        $erro = true;
    }
    if (empty($_POST["payment"])) {
        $erro_payment = "Senha é obrigatório.";
        $erro = true;
    }
    if (empty($_POST["car"])) {
        $erro_car = "Verificação senha é obrigatório.";
        $erro = true;
    }


    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro_email = "Insira email válido.";
        $erro = true;
    }

    if ($erro) {
        return -1;
    }


    $nome = verifica_campo($_POST["nome"]);
    $email = verifica_campo($_POST["email"]);
    $CPF = verifica_campo($_POST["CPF"]);
    $payment = verifica_campo($_POST["payment"]);
    $car = verifica_campo($_POST["car"]);
}
