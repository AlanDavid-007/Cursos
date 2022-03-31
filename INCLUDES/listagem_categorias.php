


<!-- aqui iremos fazer divs com as categorias(dps de clicar irá aparecer os cursos/cadastro de curso e dentro o de prof)-->

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

    <?php if (count($categorias) == 0) { ?>
        <div class="alert alert-secondary mt-3">Nenhuma Categoria encontrada</div>
    <?php } else { ?>
        <table class="table text-light mt-3 " id="table-listagem">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Ordem</th>
                    <th>Status</th>
                    <th>Ações</th> <!-- Para editar, ver cursos e excluir -->
                </tr>
            </thead>

            <tbody>
                <?php foreach ($categorias as $key => $value) { ?>
                    <tr>
                        <td><?php echo $value->id; ?></td>
                        <td><?php echo $value->nome; ?></td>
                        <td><?php echo $value->descricao; ?></td>
                        <td><?php echo $value->ordem; ?></td>
                        <td><?php echo ($value->status == 's' ? 'Ativo' : 'Inativo'); ?></td>
                        <td>
                            <a href="editar.php?id=<?php echo $value->id; ?>">
                                <button type="button" class="btn btn-primary">Editar</button>
                            </a>

                            <a href="excluir.php?id=<?php echo $value->id; ?>">
                                <button type="button" class="btn btn-danger">Excluir</button>
                            </a>

                            <a href="index_cursos.php?id=<?php echo $value->id; ?>">
                                <button type="button" class="btn btn-success">Ver Cursos</button>
                            </a>

                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } ?>
</section> 