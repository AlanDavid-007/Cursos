<?php

require __DIR__ . '../../vendor/autoload.php';

define('TITLE', 'Cadastro de Categorias');
define('HREF', '../Cadastrar/cadastrar_categorias.php');
define('BUTTONTEXT', 'Cadastrar Categoria');


use \App\Entity\Categoria;

//busca
$busca = filter_input(INPUT_GET, 'busca');

//Filtro status
$FiltroStatus = filter_input(INPUT_GET, 'status');
$FiltroStatus = in_array($FiltroStatus,['s','n']) ? $FiltroStatus : '';


//condiçoes sql 
$condicoes = [
   strlen($busca) ? 'nome LIKE "%'.str_replace (' ','%',$busca).'%"' : null,
   strlen($FiltroStatus) ? 'enum = "'.$FiltroStatus.'"' : null 
];

$condicoes = array_filter($condicoes);

 //clausula where
$where = implode(' AND ',$condicoes);

//obetem categoria
$categorias = Categoria::getCategorias($where);

//  echo "<pre>"; print_r($condicoes); echo "</pre>"; exit;

require __DIR__ . '../../INCLUDES/header.php';

require __DIR__ . '../../INCLUDES/listagem_categorias.php';


require __DIR__ . '../../INCLUDES/footer.php';
?>