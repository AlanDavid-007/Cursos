<?php

require __DIR__ . '../../vendor/autoload.php';

define('TITLE', 'Cadastro de Professores');
define('HREF', '../Cadastrar/cadastrar_professores.php');
define('BUTTONTEXT', 'Cadastrar Professor');

use \App\Entity\Professor;

// echo "<pre>"; print_r($Noticias); echo "</pre>"; exit;


//busca
$busca = filter_input(INPUT_GET, 'busca');

//Filtro status
$FiltroNome = filter_input(INPUT_GET, 'nome');


//condiçoes sql 
$condicoes = [
   strlen($busca) ? 'nome LIKE "%'.str_replace (' ','%',$busca).'%"' : null, 
];

$condicoes = array_filter($condicoes);

 //clausula where
$where = implode(' AND ',$condicoes);

$professores = Professor::getProfessores($where);
require __DIR__ . '../../INCLUDES/header.php';

require __DIR__ . '../../INCLUDES/listagem_professores.php';

require __DIR__ . '../../INCLUDES/footer.php';
?>