<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Categoria;

$categorias = Categoria::getCategorias();
// echo "<pre>"; print_r($Noticias); echo "</pre>"; exit;

require __DIR__ . '/INCLUDES/header.php';

require __DIR__ . '/INCLUDES/listagemCategorias.php';

require __DIR__ . '/INCLUDES/footer.php';
?>