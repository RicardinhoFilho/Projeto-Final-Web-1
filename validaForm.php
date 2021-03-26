<?php

//protege aplicaçlão contra risco
function verifica_campo($texto)
{
    $texto = trim($texto);
    $texto = stripslashes($texto);
    $texto = htmlspecialchars($texto);
    return $texto;
}

//Valida num de telefone
function celular($telefone)
{
    $telefone = trim(str_replace('/', '', str_replace(' ', '', str_replace('-', '', str_replace(')', '', str_replace('(', '', $telefone))))));

    $regexTelefone = "^[0-9]{11}$";

    $regexCel = '/[0-9]{2}[6789][0-9]{3,4}[0-9]{4}/'; // Regex para validar somente celular
    if (preg_match($regexCel, $telefone)) {
        return true;
    } else {
        return false;
    }
}

//bloqueia formulkário vázio
function valida_campo($texto)
{

    if (empty($texto)) {
        return false;
    }

    return true;
}

//filtra somente os números do cartão
function TraduzCard($texto)
{

    $texto = preg_replace('/[^0-9]/', '', $texto);

    return $texto;
}

//verifica se possui 16 digitos
function ValidaCard($card)
{

    $teste = (int)strlen($card);

    if ($teste == 16) {
        return true;
    }

    return false;
}


//valida cpf
function validaCPF($cpf)
{

    // Extrai somente os números
    $cpf = preg_replace('/[^0-9]/is', '', $cpf);

    // Verifica se foi informado todos os digitos corretamente
    if (strlen($cpf) != 11) {
        return false;
    }

    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;
}

//valida código de segurança de tres números
function checaCodSeguranca($cod)
{

    $cod = preg_replace('/[^0-9]/is', '', $cod);

    $teste = (int)strlen($cod);

    if ($teste == 3) {
        return true;
    }

    return false;
}

function quebraFrase($frase)
{
    $array = explode(' ', $frase);

    return $array;
}
