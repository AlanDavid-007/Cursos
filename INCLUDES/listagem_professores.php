<!-- aqui iremos fazer divs com as categorias(dps de clicar irá aparecer os cursos/cadastro de curso e dentro o de prof)-->

<section class="header2 position-absolute m-auto d-flex p-2 bd-highlight">
    <div class="texts">
        <h1><?php echo TITLE ?></h1>
        <p>Formulário criado para cadastro de Cursos, categorias e professores</p>
    </div>
    <div class="wrap" style="padding:20px; margin-left:20%;">
        <a class="m-auto" href="<?php echo HREF ?>">
            <button class="btn btn-header btn-lg"><?php echo BUTTONTEXT ?></button>
        </a>
    </div>
</section>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<section>
    <form method="get">
        <div class="row">
            <div class="col">
                <label>Filtrar Nome</label>
                <input type="text" name="busca" class="form-control" value="<?= $busca ?>">
            </div>
            <div class="col d-flex align-items-end">
                <button type="submit" class="btn btn-primary">filtrar</button>
            </div>
        </div>
    </form>
</section>

<section>

    <?php

    $mensagem = '';
    if (isset($_GET['status'])) {
        switch ($_GET['status']) {
            case 'success':
                $mensagem = '<div class="alert alert-success mt-3">Ação executada com sucesso!</div>';
                break;
            case 'error':
                $mensagem = '<div class="alert alert-danger mt-3">Ação não executada!</div>';
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

        <?php if (count($professores) == 0) { ?>
            <div class="alert alert-secondary mt-3">Nenhum Professor encontrado</div>
        <?php } else { ?>
            <?php foreach ($professores as $key => $value) { ?>

                <div class="card bg-dark mt-3" id="table-listagem">
                    <h5 class="card-header"><?php echo $value->nome; ?> <?php echo $value->sobrenome; ?></h5>
                    <div class="card-body" id="myTable">
                        <h5 class="card-title">Id:<?php echo $value->id; ?></h5>
                        <p class="card-text">Descrição:<?php echo $value->id; ?>
                            Cpf:<?php echo $value->cpf; ?> <br>
                            Formação:<?php echo $value->formacao; ?><br>
                            Telefone:<?php echo $value->telefone; ?><br>
                            Endereço:<?php echo $value->endereco; ?><br>
                            E-mail:<?php echo $value->email; ?><br>
                            Ordem:<?php echo $value->ordem; ?><br>
                            Status:<?php echo ($value->status == 's' ? 'Ativo' : 'Inativo'); ?>
                        </p>
                        <a href="../Editar/editar_professores.php?id=<?php echo $value->id; ?>" style="margin-right:10px;">
                            <button type="button" class="neon-bt3 "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" style="margin-left:43%;" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                </svg>
                                <span></span>

                                <span></span>

                                <span></span>

                                <span></span>
                            </button>
                        </a>

                        <a href="../Excluir/excluir_professores.php?id=<?php echo $value->id; ?>" style="margin-right:10px;">
                            <button type="button" class="neon-bt2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" style="margin-left:43%;" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                </svg>

                                <span></span>

                                <span></span>

                                <span></span>

                                <span></span></button>
                        </a>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </section>