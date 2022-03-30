<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Curso;

$cursos = Curso::getCursos();
// echo "<pre>"; print_r($Noticias); echo "</pre>"; exit;

require __DIR__ . '/INCLUDES/header.php';

require __DIR__ . '/INCLUDES/listagemCursos.php';

require __DIR__ . '/INCLUDES/footer.php';
?>