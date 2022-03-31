<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Cadastro de Professores');
define('HREF', 'cadastrar_professores.php');
define('BUTTONTEXT', 'professor');

use \App\Entity\Professor;

$professores = Professor::getProfessores();
// echo "<pre>"; print_r($Noticias); echo "</pre>"; exit;

require __DIR__ . '/INCLUDES/header.php';

require __DIR__ . '/INCLUDES/listagem_professores.php';

require __DIR__ . '/INCLUDES/footer.php';
?>