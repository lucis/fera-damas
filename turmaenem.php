<?php
include("conexao.php");

?>

<html>
<head>
    <title><?php echo title(); ?></title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <meta charset="utf-8">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"> </script>
    <script src="jquery.js"></script>
    <script type="text/javascript" src="ibox.js"></script>
    <script type="text/javascript">
        iBox.padding = 50;
        iBox.inherit_frames = false;
        iBox.close_label = "Fechar";
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
                <a href="enem.php">Voltar</a>
            </div>
        </div>

        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $busca = mysql_query("SELECT * from alunos WHERE serie = '$id'") or die(mysql_error());
            if (mysql_num_rows($busca) > 0) {?>
                <table border="1" width="700px" cellspacing=0 cellpadding=2 style="font-familyt: 'Trebuchet MS'; font-variant: small-caps;">
                <tr>
                    <th>Aluno</th>
                    <th>Inscrição</th>
                    <th>Senha</th>
                </tr>
                <?php
                while ($i = mysql_fetch_array($busca)) {
                    $nome = utf8_encode($i['nome']);
                    $serie = $i['serie'];
                    $ida = $i['id'];
                    $e = mysql_query("SELECT * FROM enem WHERE id = '$ida'") or die(mysql_error());
                    $enem1 = mysql_fetch_array($e, MYSQL_ASSOC);
                    $turminha = $_GET['id'];
                    $link = '<a href="cadastraenem.php?aluno='.$ida.'&turma='.$turminha.'" rel="ibox" title="Cadastro de '.$nome.'">CADASTRAR</a>';
                    $inscricao = strlen($enem1['inscricao']) > 0 ? $enem1['inscricao'] : $link;
                    $senha = strlen($enem1['senha']) > 0 ? $enem1['senha'] : $link;
                    $editar = "display: none;";
                    if (strlen($enem1['inscricao']) > 0){
                        $editar = "";
                    }

                    ?>
                    <tr>
                        <td width="60%" ><a href="aluno.php?aluno=<?php echo $ida;?>"><?php echo $nome; ?></a><small style="<?php echo $editar;?>"> - <a href="cadastraenem.php?aluno=<?php echo $ida; ?>&antigo=1&turma=<?php echo $turminha; ?>" rel="ibox">Editar</a></small></td>
                        <td width="20%" ><div class="linkenem"><?php echo $inscricao; ?></div></td>
                        <td width=""><div class="linkenem"><?php echo $senha; ?></div></td>
                    </tr>
                <?php
                }
                ?> </table><?php
            }else{
                header("Location: enem.php?erro=1");
            }
        }


        ?>

    </div>
</div>
</body>
</html>