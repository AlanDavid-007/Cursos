<?php
//adaptar
require __DIR__ . '/vendor/autoload.php';


define('OB', '$obProfessor->nome;');
define('HREF2', 'index_professores.php');
define('TEXT', 'Professor');

use \App\Entity\Professor;

//Validação do ID
if (!isset($_GET['id'])  || !is_numeric($_GET['id'])) {
    header('location: index_professores.php?status=error');
    exit;
}

//Consulta Professor
$obProfessor = Professor::getProfessor($_GET['id']);
// echo "<pre>"; print_r($obProfessor); echo "<pre>"; exit;

//Validação da Professor
if (!$obProfessor instanceof Professor) {
    header('location: index_professores.php?status=error');
    exit;
}
//Validação do POST
if (isset($_POST['excluir'])) {

    $obProfessor->excluir();

    header('location: index_professores.php?status=success');
    exit;
}

require __DIR__ . '/INCLUDES/header.php';
require __DIR__ . '/INCLUDES/confirmarExclusao.php';
require __DIR__ . '/INCLUDES/footer.php';
