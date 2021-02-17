<?php
include("conexao.php");
?>
<?php


?>

<html>
<head>
    <title><?php echo title(); ?></title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <meta charset="utf-8">

</head>
<body>
<div id="content">
    <header id="header">


    </header>
    <?php include("menu.html");?>
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
        <span style="background-color: lightsalmon; font-size: 25px; font-family: 'Trebuchet MS'; padding: 3px; float:left;margin: 0 0 20px 0; <?php echo $print1; ?>">Não há registros. Refaça a busca ou cheque as listas</span>
        <span style="background-color: lightsalmon; font-size: 25px; font-family: 'Trebuchet MS'; padding: 3px; float:left;margin: 0 0 20px 0; <?php echo $print2; ?>">Informe um valor maior que 2 caracteres para o nome</span>
        <form action="aluno_buscado.php" method="post">
            <div class="campoBuscar" id="student" >Nome do aluno: <input type="text" name="aluno" class="nome" value="" />
                <input type="submit" name="envia" value="Buscar" class="busca">
            </div></form><form action="aluno_buscado.php" method="post">
            <div class="campoBuscar" id="father" >Responsável: <input type="text" name="pai" class="nome" value="" style="width: 381px;" />
                <input type="submit" name="envia" value="Buscar" class="busca">
            </div></form><form action="aluno_buscado.php" method="post">

        </form>


    </div>
</div>
</body>
</html>