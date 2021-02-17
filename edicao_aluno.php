<?php
include("conexao.php");
?>
<?php
    if (isset($_GET['aluno'])) {
        $idaluno = $_GET['aluno'];
        $pega = mysql_query("SELECT * FROM alunos WHERE id = '$idaluno'") or die(mysql_error());
        $vetoraluno = mysql_fetch_array($pega, MYSQL_ASSOC);
        foreach($vetoraluno as $key => $valor){
            eval('$' . $key . ' = "' . utf8_encode($valor) . '";');
        }
        $nascimento = date("d/m/Y", strtotime($nascimento));
        $datarg = date("d/m/Y", strtotime($datarg));

    }
?>

<html>
<head>
    <title><?php echo title(); ?></title>
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
    <?php include("menu.html");?>
    <div id="secao">
        <div id="nav">
            <div class="voltar">
                <a href="aluno.php?aluno=<?php echo $idaluno; ?>">Voltar</a>
            </div>

        </div>

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
        <span style="background-color: lightgreen; font-size: 25px; font-family: 'Trebuchet MS'; padding: 3px; margin: 0 0 20px 0; <?php echo $print1; ?>">
            Edição realizada com sucesso
        </span>
        <span style="background-color: lightsalmon; font-size: 25px; font-family: 'Trebuchet MS'; padding: 3px; float:left;margin: 0 0 20px 0; <?php echo $print2; ?>">
            Erro de edição
        </span>
        <?php include("edicao_form.php");?>
    </div>
</div>
</body>
</html>