<?php
require './_app/config.inc.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title><?= $pg_title; ?></title>
        <meta name="description" content="<?= $pg_desc; ?>"/>
        <meta name="robots" content="index, follow"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->

        <link rel="canonical" href="<?= $pg_url; ?>"/>
        <link rel="shortcut icon" href="<?= INCLUDE_PATH; ?>/img/favicon.png"/>
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/boot.css"/>
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/style.css"/>
        <link rel="stylesheet" href="_cdn/shadowbox/shadowbox.css"/>
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">
    </head>
    <body>
        <p class="j_back backtop">Topo</p>

        <!--Menu-->
        <header class="container main_header">
            <div class="content">
                <h1 class="main_logo fl-left fontzero">
                    <a title="<?= $pg_title; ?>" href="<?= HOME; ?>">
                        <?= $pg_title; ?>
                        <img src="<?= INCLUDE_PATH; ?>/img/log.png" alt="[<?= $pg_title; ?>]" title="<?= $pg_title; ?>"/>
                    </a>
                </h1>

                <ul class="main_menu fl-right">
                    <?php require REQUIRE_PATH . '/inc/main_menu.php'; ?>
                </ul>
                <div class="clear"></div>
            </div>
        </header>

        <!--CONTEUDO-->
        <?php
        $Url[1] = (empty($Url[1]) ? NULL : $Url[1]);

        if (file_exists(REQUIRE_PATH . '/' . $Url[0] . '.php')):
            require REQUIRE_PATH . '/' . $Url[0] . '.php';
        elseif (file_exists(REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php')):
            require REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php';
        else:
            require REQUIRE_PATH . '/index.php';
        endif;
        ?>
        <!--CONTEUDO-->

        <!--footer-->
        <footer class="container main_footer">
            <div class="content content-page">
                <h1 class="fontzero">Rodapé do Site</h1>
                <img src="<?= INCLUDE_PATH; ?>/img/favicon.png" title="Manutenção Lira | Suporte Técnico em Informática" alt="[Manutenção Lira | Suporte Técnico em Informática]"/>
                <p>Copyright &copy 2017 - <?= date('Y'); ?> Criado por Cristovão Lira Braga | Manutenção Lira, Todos Os Direitos Reservados!</p>
                <div class="clear"></div>
            </div>
        </footer>

        <script src="_cdn/jquery.js"></script>
        <script src="_cdn/script.js"></script>
    </body>
</html>
