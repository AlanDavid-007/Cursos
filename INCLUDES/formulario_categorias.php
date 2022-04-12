<!-- adaptar para curso, categoria e professor - criar tres formularios separados -->

<section class="formulario">
    <a href="../Index/index_categorias.php">
        <button class="btn btn-success">Voltar</button>
    </a>

    <h2 class="mt-3"><?php echo TITLE ?></h2>

    <form method="post" class="form-send ">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" required class="form-control" name="nome" value="<?php echo isset($obCategoria->nome) ? $obCategoria->nome : ''; ?>">
        </div>
        <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control" required name="descricao" rows="5"><?php echo isset($obCategoria->descricao) ? $obCategoria->descricao : ''; ?></textarea>
        </div>
          <div class="form-group">
            <label>Ordem</label>
            <textarea class="form-control" required name="ordem" rows="1"><?php echo isset($obCategoria->ordem) ? $obCategoria->ordem : ''; ?></textarea>
        </div>
        <div class="form-group">
            <label>Status</label>
            <div>
                <div class="form-check form-check-inline">

                    <label>
                        <input type="radio" name="status" value="s" <?php echo isset($obCategoria->status) && $obCategoria->status == 's' ? 'checked' : ''; ?>>
                        Ativo
                    </label>

                    <label class="ml-3">
                        <input type="radio" name="status" value="n" <?php echo isset($obCategoria->status) && $obCategoria->status == 'n' ? 'checked' : ''; ?>>
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