<?php
include("conexao.php");
    if (isset($_POST['aluno']) && strlen($_POST['aluno']) <= 2){
        header("Location: busca.php?erro=2");
    }
    if (isset($_POST['mae']) && strlen($_POST['mae']) <= 2){
        header("Location: busca.php?erro=2");
    }
    if (isset($_POST['pai']) &&strlen($_POST['pai']) <= 2){
        header("Location: busca.php?erro=2");
    }
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
        <span ><a href="busca.php" style="float: right; font-family: 'Trebuchet MS'; font-size: 20px; color: #006699; margin: 0 28px 20px 0;">Voltar</a></span>

        <?php
        if (isset($_POST['aluno'])) {
            $aluno = trata(utf8_decode($_POST['aluno']));
            $busca = mysql_query("SELECT * from alunos WHERE nome LIKE '%$aluno%'") or die(mysql_error());
            if (mysql_num_rows($busca) > 0) {?>
                 <table border="1" width="700px" cellspacing=0 cellpadding=2 style="font-familyt: 'Trebuchet MS'; font-variant: small-caps;">
                      <tr>
                         <th>Aluno</td>
                         <th>Turma</td>
                     </tr>
            <?php
                while ($i = mysql_fetch_array($busca)) {
                    $nome = utf8_encode($i['nome']);
                    $serie = $i['serie'];
                    $id = $i['id'];
                    $s = mysql_query("SELECT * FROM turmas WHERE id = '$serie'") or die(mysql_error());
                    while ($b = mysql_fetch_array($s)){
                        $nserie = $b['serie'];
                        $nturma = strtoupper($b['turma']);
                    }
                ?>
                    <tr>
                        <td width="80%" ><a href="aluno.php?aluno=<?php echo $id;?>"><?php echo $nome; ?></a></td>
                        <td align="center"><?php echo $nserie; ?>&ordm; série <?php echo $nturma; ?></td>
                    </tr>
                <?php
                }
            ?> </table><?php
            }else{
                header("Location: busca.php?erro=1");
            }
        }


        ?>

        <?php
        if (isset($_POST['pai'])) {
            $pai = trata(utf8_decode($_POST['pai']));
            $busca = mysql_query("SELECT * from alunos WHERE resp1 LIKE '%$pai%' OR resp2 LIKE '%$pai%'") or die(mysql_error());
            if (mysql_num_rows($busca) > 0) {?>
                <table border="1" width="700px" cellspacing=0 cellpadding=2 style="font-familyt: 'Trebuchet MS'; font-variant: small-caps;">
                <tr>
                    <th>Aluno</td>
                    <th>Turma</td>
                </tr>
                <?php
                while ($i = mysql_fetch_array($busca)) {
                    $nome = utf8_encode($i['nome']);
                    $serie = $i['serie'];$id = $i['id'];
                    $s = mysql_query("SELECT * FROM turmas WHERE id = '$serie'") or die(mysql_error());
                    while ($b = mysql_fetch_array($s)){
                        $nserie = $b['serie'];
                        $nturma = strtoupper($b['turma']);
                    }
                    ?>
                    <tr>
                        <td width="80%" ><a href="aluno.php?aluno=<?php echo $id;?>"><?php echo $nome; ?></a></td>
                        <td align="center"><?php echo $nserie; ?>&ordm; série <?php echo $nturma; ?></td>
                    </tr>
                <?php
                }
                ?> </table><?php
            }else{
                header("Location: busca.php?erro=1");
            }
        }


        ?>





    </div>
</div>
</body>
</html>