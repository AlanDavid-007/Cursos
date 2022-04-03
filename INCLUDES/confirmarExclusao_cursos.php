<!-- adaptar para exclusão de curso, categoria e professor -->
<section>
    <a href="index_cursos.php">
        <button class="btn btn-success">Voltar</button>
    </a>

    <h2 class="mt-3">Excluir <?php echo TEXT ?></h2>
    <form method="post">
        <div class="form-group">
            <p>Você deseja realmente excluir o <?php echo TEXT ?>
                <strong><?php echo $obCurso->nome; ?></strong>
            </p>
        </div>

        <div class="form-group">
            <a href="<?php echo HREF2 ?>">
                <button class="btn btn-secondary"><a href="<?php echo HREF2 ?>" style="text-decoration: none; color: white;">Cancelar</a></button>
            </a>
            <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
        </div>
    </form>

</section> 