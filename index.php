<?php

//Comentário de linha

/*
comentario de bloco
*/

define('XPTO', 'Valor sempre igual');

echo XPTO;

$num = 2;

$var = '<br>' . "Olá mundo! $num"; //Ponto concatena

echo $var;

var_dump($var);

//phpinfo(); Informações importantes
// Pós Intervalo

$domingo = 'Domingo';
$segunda = 'segunda';
$terça = 'terça';
$quarta = 'quarta';
$quinta = 'quinta';
$sexta = 'sexta';
$sábado = 'sábado';

$diaSemana = [ //podemos declara vetores com arrays
    1 => 'Domingo',
    2 => 'segunda',
    3 => 'terça',
    4 => 'quarta',
    5 => 'quinta',
    6 => 'sexta',
    7 => 'sábado',
];

echo '<br>Hoje é ' . $diaSemana[5]; //Exemplo sem interpolação
echo "<br>Hoje é {$diaSemana[7]}"; //Exemplo com interpolação

$contatos = [
    'Pedro',
    'Lucas',
    'Leo',
];
echo "<pre>";

var_dump($contatos);

$usuario[0] = [
    'nome' => 'Luiz',
    'senha' => '123'
];
$usuario[1] = [
    'nome' => 'fer',
    'senha' => '321'
];
$usuario[2] = [
    'nome' => 'bono',
    'senha' => '627'
];
echo "<pre>\n\n";

var_dump($usuario);
