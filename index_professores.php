<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Professor;

$professores = Professor::getProfessores();
// echo "<pre>"; print_r($Noticias); echo "</pre>"; exit;

require __DIR__ . '/INCLUDES/header.php';

require __DIR__ . '/INCLUDES/listagemProfessores.php';

require __DIR__ . '/INCLUDES/footer.php';
?>