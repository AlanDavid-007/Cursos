<!-- adaptar para curso, Curso e professor - criar tres formularios separados -->

<section class="formulario">
    <a href="index_cursos.php">
        <button class="btn btn-success">Voltar</button>
    </a>

    <h2 class="mt-3"><?php echo TITLE ?></h2>

    <form method="post" class="form-send ">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" required class="form-control" name="nome" value="<?php echo isset($obCurso->nome) ? $obCurso->nome : ''; ?>">
        </div>

        <div class="form-group">
            <label>Palavra-Chave</label>
            <textarea class="form-control" required name="palavra_chave" rows="5"><?php echo isset($obCurso->palavra_chave) ? $obCurso->palavra_chave : ''; ?></textarea>
        </div>

          <div class="form-group">
            <label>Valor</label>
            <textarea class="form-control" required name="valor" rows="1"><?php echo isset($obCurso->valor) ? $obCurso->valor : ''; ?></textarea>
        </div>

        <div class="form-group">
            <label>Ordem</label>
            <textarea class="form-control" required name="ordem" rows="1"><?php echo isset($obCurso->ordem) ? $obCurso->ordem : ''; ?></textarea>
        </div>

        <div class="form-group">
            <label>Professor</label>
            <textarea class="form-control" required name="professor" rows="1"><?php echo isset($obCurso->professor) ? $obCurso->professor : ''; ?></textarea>
        </div>

        <div class="form-group">
            <label>Data</label>
            <input type="date" required class="form-control" name="data" value="<?php echo isset($obCurso->data) ? date('Y-m-d',strtotime($obCurso->data)) : ''; ?>">     
        </div>

        <div class="form-group">
            <label>Status</label>
            <div>
                <div class="form-check form-check-inline">

                    <label>
                        <input type="radio" name="status" value="s" <?php echo isset($obCurso->status) && $obCurso->status == 's' ? 'checked' : ''; ?>>
                        Ativo
                    </label>

                    <label class="ml-3">
                        <input type="radio" name="status" value="n" <?php echo isset($obCurso->status) && $obCurso->status == 'n' ? 'checked' : ''; ?>>
                        Inativo
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>
</section> 