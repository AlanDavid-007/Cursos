<!-- adaptar para exclusão de curso, categoria e professor -->
<section style="margin-top:10%">
    
    <a href="../Index/index_professores.php">
        <button class="btn-header btn-lg">Voltar</button>
    </a>

    <h2 class="mt-5">Excluir <?php echo TEXT ?></h2>
    <form method="post">
        <div class="form-group">
            <p>Você deseja realmente excluir a <?php echo TEXT ?>
                <strong><?php echo $obProfessor->nome; ?></strong>
            </p>
        </div>

        <div class="form-group mt-5">
            <a href="<?php echo HREF2 ?>">
                <button class="btn-header2 btn-lg"><a href="<?php echo HREF2 ?>" style="text-decoration: none; color: white;">Cancelar</a></button>
            </a>
            <button type="submit" name="excluir" class="btn-header3 btn-lg ml-5">Excluir</button>
        </div>
    </form>

</section> 