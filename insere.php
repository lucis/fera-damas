<?php
include("conexao.php");
?>
<?php


?>

<html>
<head>
    <title>Sistema FERA - Damas</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estiloform.css">
    <script src="jquery.min.js" type="text/javascript"></script>
    <script src="jquery.maskedinput-1.3.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(function($){

            $("#tel").mask("(83)9999-9999");
            $("#cel").mask("(83)9999-9999");
            $(".telefone").mask("9999-9999");
            $(".cpf").mask("99999999999");
            $(".matricula").mask("99999999");
            $(".data").mask("99/99/9999");

        });
    </script>
</head>
<body>
<div id="content">
    <header id="header">


    </header>
    <div id="sidebar">
        <div id="menu">MENU</div>
        <ul>
            <li><a href="index.php">INICIAL</a></li>
            <li><a href="index.php">LISTAS</a></li>
            <li><a href="agendar.php">AGENDAR</a></li>
            <li><a href="busca.php">BUSCA ALUNO</a></li>
            <li><a href="index.php">ENEM</a></li>
            <li><a href="index.php">HORÁRIO</a></li>
        </ul>
    </div>
    <div id="secao">
        <?php
        $erro = $_GET['erro'];
        if ($erro == 1){
            $print1 = "";
            $print2 = "display: none;";
        }elseif ($erro == 2){
            $print1 = "display: none;";
            $print2 = "";
        }else{
            $print1 = "display: none;";
            $print2 = "display: none;";
        }

        ?>
        <span style="background-color: lightgreen; font-size: 25px; font-family: 'Trebuchet MS'; padding: 3px; margin: 0 0 20px 0; <?php echo $print1; ?>">Cadastro realizado com sucesso</span>
        <span style="background-color: lightsalmon; font-size: 25px; font-family: 'Trebuchet MS'; padding: 3px; float:left;margin: 0 0 20px 0; <?php echo $print2; ?>">Erro de cadastro</span>
        <?php include("single_form.php");?>
    </div>
</div>
</body>
</html>