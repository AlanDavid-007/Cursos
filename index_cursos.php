<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Cadastro de Cursos');
define('HREF', 'cadastrar_cursos.php');
define('BUTTONTEXT', 'curso');

use \App\Entity\Curso;

$cursos = Curso::getCursos();
// echo "<pre>"; print_r($Noticias); echo "</pre>"; exit;

require __DIR__ . '/INCLUDES/header.php';

require __DIR__ . '/INCLUDES/listagem_cursos.php';

require __DIR__ . '/INCLUDES/footer.php';
?>