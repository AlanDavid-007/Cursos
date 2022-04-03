<!-- adaptar para Professor, Professor e professor - criar tres formularios separados -->

<section class="formulario">
    <a href="index_professores.php">
        <button class="btn btn-success">Voltar</button>
    </a>

    <h2 class="mt-3"><?php echo TITLE ?></h2>

    <form method="post" class="form-send ">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" required class="form-control" name="nome" value="<?php echo isset($obProfessor->nome) ? $obProfessor->nome : ''; ?>">
        </div>

        <div class="form-group">
            <label>Sobrenome</label>
            <textarea class="form-control" required name="sobrenome" rows="5"><?php echo isset($obProfessor->sobrenome) ? $obProfessor->sobrenome : ''; ?></textarea>
        </div>

          <div class="form-group">
            <label>Cpf</label>
            <textarea class="form-control" required name="cpf" rows="1"><?php echo isset($obProfessor->cpf) ? $obProfessor->cpf : ''; ?></textarea>
        </div>

        <div class="form-group">
            <label>Formação</label>
            <textarea class="form-control" required name="formacao" rows="1"><?php echo isset($obProfessor->formacao) ? $obProfessor->formacao : ''; ?></textarea>
        </div>

        <div class="form-group">
            <label>Telefone</label>
            <textarea class="form-control" required name="telefone" rows="1"><?php echo isset($obProfessor->telefone) ? $obProfessor->telefone : ''; ?></textarea>
        </div>

        <div class="form-group">
            <label>Endereço</label>
            <textarea class="form-control" required name="endereco" rows="1"><?php echo isset($obProfessor->endereco) ? $obProfessor->endereco : ''; ?></textarea>
        </div>

        <div class="form-group">
            <label>Email</label>
            <textarea class="form-control" required name="email" rows="1"><?php echo isset($obProfessor->email) ? $obProfessor->email : ''; ?></textarea>
        </div>

        <div class="form-group">
            <label>Ordem</label>
            <textarea class="form-control" required name="ordem" rows="1"><?php echo isset($obProfessor->ordem) ? $obProfessor->ordem : ''; ?></textarea>
        </div>

        <div class="form-group">
            <label>Status</label>
            <div>
                <div class="form-check form-check-inline">

                    <label>
                        <input type="radio" name="status" value="s" <?php echo isset($obProfessor->status) && $obProfessor->status == 's' ? 'checked' : ''; ?>>
                        Ativo
                    </label>

                    <label class="ml-3">
                        <input type="radio" name="status" value="n" <?php echo isset($obProfessor->status) && $obProfessor->status == 'n' ? 'checked' : ''; ?>>
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