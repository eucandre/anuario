<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title> Anuário Estatístico 2017 </title>

    </head>
    <body>
        <header class="header2">
        </header>

        <header class="header1">
            <div class="espacoLateral"><?php include 'head1.php'; ?></div>
        </header>

        <div id="banner">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="inicio.php">Início</a></li>
                <li class="breadcrumb-item"><a href="2_CaracteristicasDemograficas.php"> 2 - CARACTERÍSTICAS DEMOGRÁFICAS</a></li>  
                <li class="breadcrumb-item"><a href="2_10_JUSTICA_E_SEGURANCALinkTabelas.php">2.10.1 - Movimento Eleitoral</a></li>
                <li class="breadcrumb-item active">2.10.1.1 - Número de eleitores inscritos</li>
            </ol>
            
        </div>
        <div id="container">


            <div id="quadroConteudo">
                <div id="menu">
                    <?php include 'menu.php'; ?>
                </div>

                <div id="conteudo">
                    <div id="texto">

                        <?php include '2_10_1_1_N_eleitoresHTM.php'; ?>

                    </div>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>

    </body>
</html>