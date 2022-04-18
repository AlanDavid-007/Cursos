<?php

require __DIR__ . '../../vendor/autoload.php';

define('TITLE', 'Cadastro de Cursos');
define('HREF', '../Cadastrar/cadastrar_cursos.php');
define('BUTTONTEXT', 'Cadastrar Curso');

use \App\Entity\Curso;


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

$cursos = Curso::getCursos($where);
require __DIR__ . '../../INCLUDES/header.php';

require __DIR__ . '../../INCLUDES/listagem_cursos.php';

require __DIR__ . '../../INCLUDES/footer.php';
?>