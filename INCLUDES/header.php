<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="../CSS/styles.css">
  <script src="JS/body.js"></script>
  <title>Cursos</title>

</head>

<body class="text-light">
  <div class="container m-auto">
  <header class="header">
            <a href="../index.php" class="header__logo"></a>

            <ion-icon name="menu-outline" class="header__toggle" id="nav-toggle"></ion-icon>

            <nav class="nav " id="nav-menu">
                <div class="nav__content bd-grid">

                    <ion-icon name="close-outline" class="nav__close" id="nav-close"></ion-icon>
    
                    <div class="nav__perfil">
                        <div class="nav__img">
                            <img src="assets/img/perfil.png" alt="">
                        </div>
                        
                        <div>
                            <a href="../index.php" class="nav__name" style="text-decoration: none;">CURSOS</a>
                        </div>
                    </div>
    
                    <div class="nav__menu">
                        <ul class="nav__list">
                            <li class="nav__item"><a href="../Index/index_categorias.php" class="nav__link">Categorias</a></li>
                            <li class="nav__item"><a href="../Index/index_cursos.php" class="nav__link">Cursos</a></li>
                            <li class="nav__item"><a href="../Index/index_professores.php" class="nav__link">Professores</a></li>
                        </ul>
                    </div>
    
                    <div class="nav__social">
                        <a href="https://github.com/AlanDavid-007/Cursos/" class="nav__social-icon"><ion-icon name="logo-github"></ion-icon></a>
                    </div>
                </div>
            </nav>
        </header>
  <div class="hr">
        <hr>
        <hr>
        <hr>
        <hr>
        <hr>
        <hr>
        <hr>
        <hr>
        <hr>
</div>
        <section class="header2 m-auto d-flex p-2 bd-highlight" >
      <div class="texts">
        <h1><?php echo TITLE ?></h1>
        <p>Formulário criado para cadastro de Cursos, categorias e professores</p>
      </div>

      <a class="m-auto" href="<?php echo HREF ?>" style="padding:20px; margin-left:30%;">
        <button class="btn btn-success btn-lg"><?php echo BUTTONTEXT ?></button>
      </a>
    </section> 

        <!-- ===== IONICONS ===== -->
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

        <!--===== MAIN JS =====-->
        <script src="JS/navbar.js"></script>