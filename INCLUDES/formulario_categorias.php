<!-- adaptar para curso, categoria e professor - criar tres formularios separados -->

<section>
    <a href="index">
        <button class="btn btn-success">Voltar</button>
    </a>

    <h2 class="mt-3"><?php echo TITLE ?></h2>

    <form method="post" class="form-send">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" required class="form-control" name="Nome" value="<?php echo isset($obNoticia->Nome) ? $obNoticia->Nome : ''; ?>">
        </div>
        <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control" required name="descricao" rows="5"><?php echo isset($obNoticia->descricao) ? $obNoticia->descricao : ''; ?></textarea>
        </div>
          <div class="form-group">
            <label>Ordem</label>
            <textarea class="form-control" required name="Ordem" rows="1"><?php echo isset($obNoticia->Ordem) ? $obNoticia->Ordem : ''; ?></textarea>
        </div>
        <div class="form-group">
            <label>Status</label>
            <div>
                <div class="form-check form-check-inline">

                    <label>
                        <input type="radio" name="status" value="s" <?php echo isset($obNoticia->status) && $obNoticia->status == 's' ? 'checked' : ''; ?>>
                        Ativo
                    </label>

                    <label class="ml-3">
                        <input type="radio" name="status" value="n" <?php echo isset($obNoticia->status) && $obNoticia->status == 'n' ? 'checked' : ''; ?>>
                        Inativo
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>
</section> -->
