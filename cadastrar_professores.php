<?php
require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Cadastrar Professores');
define('HREF', 'cadastrar_professores.php');
define('BUTTONTEXT', 'professor');

use \App\Entity\Professor;

$obProfessor = new Professor;

// echo "<pre>"; print_r($_POST['descricao']); echo "</pre>"; exit;
if (isset($_POST['nome'],$_POST['sobrenome'],$_POST['cpf'],$_POST['formacao'],$_POST['telefone'], $_POST['endereco'], $_POST['email'], $_POST['ordem'], $_POST['status'])) {

    $obProfessor->nome = $_POST['nome'];
    $obProfessor->sobrenome = $_POST['sobrenome'];
    $obProfessor->cpf = $_POST['cpf'];
    $obProfessor->formacao = $_POST['formacao'];
    $obProfessor->telefone = $_POST['telefone'];
    $obProfessor->endereco = $_POST['endereco'];
    $obProfessor->email = $_POST['email'];
    $obProfessor->ordem = $_POST['ordem'];
    $obProfessor->status = $_POST['status'];
    $obProfessor->cadastrar();
    // echo "<pre>"; print_r($obProfessor); echo "</pre>"; exit; 

    header('location: index_professores.php?status=success');
    exit;
}

require __DIR__ . '/INCLUDES/header.php';

require __DIR__ . '/INCLUDES/formulario_professores.php';

require __DIR__ . '/INCLUDES/footer.php';