<?php
//faz as validações
echo '<pre>';
/* ======================================================================================
 * 									CPF
 * ======================================================================================*/
$regexCpf = '/[0-9]{3}\.?[0-9]{3}\.?[0-9]{3}\-?[0-9]{2}/'; //Valida o CPF sem o DV

echo preg_match($regexCpf, '999.999.999-99') ? 'CPF Valido' : 'CPF Invalido';
echo PHP_EOL;
echo preg_match($regexCpf, '99999999999') ? 'CPF Valido' : 'CPF Invalido';
echo PHP_EOL . PHP_EOL;

/* ======================================================================================
 * 									CNPJ
 * ======================================================================================*/
$regexCnpj = '/[0-9]{2}\.?[0-9]{3}\.?[0-9]{3}\/?[0-9]{4}\-?[0-9]{2}/'; //Valida CNPJ sem o DV

echo preg_match($regexCpf, '32.845.529/0001-00') ? 'CNPJ Valido' : 'CNPJ Invalido';
echo PHP_EOL;
echo preg_match($regexCpf, '99999999999') ? 'CNPJ Valido' : 'CNPJ Invalido';
echo PHP_EOL . PHP_EOL;

/* ======================================================================================
 * 									NOME USUARIO
 * ======================================================================================*/
//nome de usuario numero, letra
$regexNomeUsuario = '/^[a-z\d_]{4,28}$/i'; //Essa regra é para permitir usuários com nome de 4 a 28 caracteres, alfanuméricos e acentuados

echo preg_match($regexNomeUsuario, 'userNaME4234432') ? 'Nome Usuário Valido' : 'Nome Usuário Invalido';
echo PHP_EOL;
echo preg_match($regexNomeUsuario, 'matheus antônio') ? 'Nome Usuário Valido' : 'Nome Usuário Invalido';
echo PHP_EOL;
echo preg_match($regexNomeUsuario, 'mat') ? 'Nome Usuário Valido' : 'Nome Usuário Invalido';
echo PHP_EOL . PHP_EOL;

/* ======================================================================================
 * 									CEP
 * ======================================================================================*/
$regexCEP = '/[0-9]{5}-[0-9]{3}|[0-9]{8}/'; //CEP 99999-999

echo preg_match($regexCEP, '37250-000') ? 'CEP Valido' : 'CEP Invalido';
echo PHP_EOL;
echo preg_match($regexCEP, '37250000') ? 'CEP Valido' : 'CEP Invalido';
echo PHP_EOL;
echo preg_match($regexCEP, '37250') ? 'CEP Valido' : 'CEP Invalido';
echo PHP_EOL . PHP_EOL;

/* ======================================================================================
 * 									DATA
 * ======================================================================================*/
$regexData = '/^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)(?:0?2)\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/'; //data MM/DD/YYYY

echo preg_match($regexData, '20/02/1980') ? 'Data Valido' : 'Data Invalido';
echo PHP_EOL;
echo preg_match($regexData, '50/12/9999') ? 'Data Valido' : 'Data Invalido';
echo PHP_EOL;
echo preg_match($regexData, '31/02/2000') ? 'Data Valido' : 'Data Invalido';
echo PHP_EOL . PHP_EOL;
