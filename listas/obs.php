<?php
include("../conexao.php");
?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../lista.css">
    <title><?php echo title(); ?>s</title>
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
        <?php echo $vetor[1];?>ª série <?php echo strtoupper($vetor[2]);?> - Telefones dos alunos e dos responsáveis
    </div>
    <table border="1" width="1000px" cellspacing=0 cellpadding=2 style="font-family: 'Trebuchet MS'; font-variant: small-caps;">
        <tr>
            <th align="left">MÁTRICULA/DATA</th>
            <th align="left">NOME/OBSERVAÇÃO</th>

        </tr>
        <?php
        $listagem = mysql_query("SELECT * FROM alunos WHERE serie = '$turma' ORDER BY num") or die(mysql_error());
        while ($loop = mysql_fetch_array($listagem, MYSQL_ASSOC)) {
            $id_aluno = $loop['id'];
            $pegaob = mysql_query("SELECT * FROM obs WHERE aluno = '$id_aluno'") or die (mysql_error());
            if (mysql_num_rows($pegaob) > 0) {
            ?>
                <tr>
                    <td width="17%"><?php echo $loop['matricula'] ; ?></td>
                    <td><a target="_blank" style="font-weight: bold; text-transform:uppercase; text-decoration: none; color: #000;" href="../aluno.php?aluno=<?php echo $loop['id'];?>"><?php echo utf8_encode($loop['nome']); ?></a></td>

                </tr>

            <?php
                while ($oo = mysql_fetch_array($pegaob)){
                    $dayy = date("d/m/Y", strtotime($oo['data']));
                    $obs = utf8_encode($oo['obs']);
                    ?>
                    <tr class="resp">
                        <td width="17%"><?php echo $dayy;?></td>
                        <td style="text-transform: uppercase;"><?php echo $obs; ?></td>

                    </tr>
                 <?php
                }
            }
            ?>


        <?php
        }

        ?>
    </table>
</div>
</body>
</html>