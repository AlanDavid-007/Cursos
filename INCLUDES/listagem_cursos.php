


<!-- aqui iremos fazer divs com as cursos(dps de clicar irá aparecer os cursos/cadastro de curso e dentro o de prof)-->

 <?php

$mensagem = '';
if (isset($_GET['status'])) {
    switch ($_GET['status']) {
        case 'success':
            $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
            break;
        case 'error':
            $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
            break;
        default:
            # code...
            break;
    }
}
?>

<?php if ($mensagem != '') { ?>
    <section>
        <?php echo $mensagem; ?>
    </section>
<?php } ?>

<section>

    <?php if (count($cursos) == 0) { ?>
        <div class="alert alert-secondary mt-3">Nenhum Curso encontrado</div>
    <?php } else { ?>
        <table class="table text-light mt-5 " id="table-listagem">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Palavra-Chave</th>
                    <th>Valor</th>
                    <th>Ordem</th>
                    <th>Professor</th>
                    <th>Data</th>
                    <th>Status</th>
                    <th>Ações</th> <!-- Para editar, ver cursos e excluir -->
                </tr>
            </thead>

            <tbody>
                <?php foreach ($cursos as $key => $value) { ?>
                    <tr>
                        <td><?php echo $value->id; ?></td>
                        <td><?php echo $value->nome; ?></td>
                        <td><?php echo $value->palavra_chave; ?></td>
                        <td><?php echo $value->valor; ?></td>
                        <td><?php echo $value->ordem; ?></td>
                        <td><?php echo $value->professor; ?></td>
                        <td><?php echo $value->data; ?></td>
                        <td><?php echo ($value->status == 's' ? 'Ativo' : 'Inativo'); ?></td>
                        <td>
                            <a href="editar_cursos.php?id=<?php echo $value->id; ?>">
                                <button type="button" class="btn btn-primary">Editar</button>
                            </a>

                            <a href="excluir_cursos.php?id=<?php echo $value->id; ?>">
                                <button type="button" class="btn btn-danger">Excluir</button>
                            </a>
                        <?php  
                                if(isset($_POST['professor'])) {
                            
                                if(!empty($_POST['professor'])) {

                                    $obcursos->professor = $_POST['professor'];
                                }

                                if(empty($_POST['professor'])) {

                                    echo '<a href="index_professores.php?id=<?php echo $value->id; ?>">
                                    Não há professor no momento
                                    <button type="button" class="btn btn-success">Cadastrar Professor</button>
                                </a>';
                            }
                    }?>

                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } ?>
</section> 