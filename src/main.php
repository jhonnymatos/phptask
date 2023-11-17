<?php

include_once __DIR__ . "/../vendor/autoload.php";

use App\model\Usuario;

$usuario1 = new Usuario('Joao', 'idadedoJoao');
$usuario2 = new Usuario('Maria', 'idadeDaMaria');

echo "Usuário 1: " . $usuario1->getNome() . " " . $usuario1->getidade() . "\n";
echo "<br>";
echo "Usuário 2: " . $usuario2->getNome() . " " . $usuario2->getidade() . "\n";