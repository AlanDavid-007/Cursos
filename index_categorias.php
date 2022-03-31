<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Cadastro de Categorias');
define('HREF', 'cadastrar_categorias.php');
define('BUTTONTEXT', 'categoria');


use \App\Entity\Categoria;

$categorias = Categoria::getCategorias();
// echo "<pre>"; print_r($Noticias); echo "</pre>"; exit;

require __DIR__ . '/INCLUDES/header.php';

require __DIR__ . '/INCLUDES/listagem_categorias.php';


require __DIR__ . '/INCLUDES/footer.php';
?>