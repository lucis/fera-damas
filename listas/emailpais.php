<?php
include("../conexao.php");
?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../lista.css">
    <title><?php echo title(); ?> - Por: Luciano Júnior</title>
</head>
<body>
<div id="a4">
    <div id="cabeca">
        <h1>SISTEMA C-GAMA</h1>
    </div>
    <div id="title">
        <?php
        $turma = $_GET['turma'];
        $titulo = mysql_query("SELECT * FROM turmas WHERE id = '$turma'") or die(mysql_error());
        $vetor = mysql_fetch_row($titulo);

        ?>
        <?php echo $vetor[1];?>ª série <?php echo strtoupper($vetor[2]);?> - E-mail's dos alunos e dos responsáveis
    </div>
    <table border="1" width="1000px" cellspacing=0 cellpadding=2 style="font-family: 'Trebuchet MS'; font-variant: small-caps;">
        <tr>
            <th align="left">N&ordm;</th>
            <th align="left">MATRÍCULA</th>
            <th ALIGN="left">NOME</th>
            <th ALIGN="left">E-MAIL</th>
        </tr>
        <?php
        $listagem = mysql_query("SELECT * FROM alunos WHERE serie = '$turma' ORDER BY num") or die(mysql_error());
        while ($loop = mysql_fetch_array($listagem, MYSQL_ASSOC)) {
            ?>
            <tr>
                <td width="5%"><?php echo $loop['num'] ; ?></td>
                <td width="8%"><?php echo $loop['matricula']; ?></td>
                <td width="37%"><a target="_blank" style="font-weight: bold; text-transform:uppercase; text-decoration: none; color: #000;" href="../aluno.php?aluno=<?php echo $loop['id'];?>"><?php echo utf8_encode($loop['nome']); ?></a></td>
                <td width="30%"><?php echo $loop['email']; ?></td>
            </tr>
            <tr class="resp">
                <td width="5%">1&ordm;</td>
                <td width="8%" >--------</td>
                <td width="37%" style="text-transform: uppercase;"><?php echo utf8_encode($loop['resp1']); ?></td>
                <td width="30%"><?php echo $loop['emailresp1']; ?></td>
            </tr>
            <tr class="resp">
                <td width="5%">2&ordm;</td>
                <td width="8%" >--------</td>
                <td width="37%" style="text-transform: uppercase;"><?php echo utf8_encode($loop['resp2']); ?></td>
                <td width="30%"><?php echo $loop['emailresp2']; ?></td>
            </tr>
        <?php
        }

        ?>
    </table>
</div>
</body>
</html>