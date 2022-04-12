<?php
require __DIR__ . '../../vendor/autoload.php';

define('TITLE', 'Cadastrar Cursos');
define('HREF', '../Cadastrar/cadastrar_cursos.php');
define('BUTTONTEXT', 'Cadastrar Curso');

use App\Entity\Categoria;
use \App\Entity\Curso;
use \App\Entity\Professor;

$obCurso = new Curso;
$obProfessores = new Professor;
$obCategorias = new Categoria;

$listaProfessor = $obProfessores::getProfessores();
$listaCategoria = $obCategorias::getCategorias();

//   echo "<pre>"; print_r($arrayProfessor); echo "</pre>"; exit;
if (isset($_POST['nome'], $_POST['palavra_chave'],$_POST['valor'], $_POST['ordem'],$_POST['professor'],$_POST['categoria'],$_POST['data'], $_POST['status'])) {

    $obCurso->nome = $_POST['nome'];
    $obCurso->palavra_chave = $_POST['palavra_chave'];
    $obCurso->valor = $_POST['valor'];
    $obCurso->ordem = $_POST['ordem'];
    $obCurso->professor = $_POST['professor'];
    $obCurso->categoria = $_POST['categoria'];
    $obCurso->data = $_POST['data'];
    $obCurso->status = $_POST['status'];
    $obCurso->cadastrar();
    // echo "<pre>"; print_r($obCurso); echo "</pre>"; exit; 

    header('location: ../Index/index_cursos.php?status=success');
    exit;
}

require __DIR__ . '../../INCLUDES/header_editar.php';

require __DIR__ . '../../INCLUDES/formulario_cursos.php';

require __DIR__ . '../../INCLUDES/footer.php';