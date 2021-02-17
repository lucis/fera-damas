<?php
include("conexao.php");
?>

<html>
<head>
    <title><?php echo title(); ?></title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">

</head>
<body>
<div id="content">
    <header id="header">


    </header>
    <?php include("menu.html");?>

    <div id="secao">
        <ul id="listas">
            <li>
                Listas por turma
                <ul>
                    <li><a href="porturma.php?lista=alfa.php">Lista por ordem alfabética (número, nome e matrícula)</a></li>
                    <li><a href="porturma.php?lista=chamada.php">Lista por ordem de chamada (número, nome e matrícula)</a></li>
                    <li><a href="porturma.php?lista=telefonealunos.php">Lista com telefones dos alunos</a></li>
                    <li><a href="porturma.php?lista=telresp.php">Lista com nome e telefone dos responsáveis</a></li>
                    <li><a href="porturma.php?lista=emailalunos.php">Lista com e-mail dos alunos</a></li>
                    <li><a href="porturma.php?lista=emailpais.php">Lista com e-mail dos pais</a></li>
                    <li><a href="porturma.php?lista=endereco.php">Lista com endereço dos alunos</a></li>
                    <li><a href="porturma.php?lista=listaenem.php">Lista com inscrição e senha do ENEM</a></li>
                    <li><a href="porturma.php?lista=cursos.php">Lista com cursos pretendidos</a></li>
                    <li><a href="porturma.php?lista=ingles.php">Lista com alunos que cursam Inglês</a></li>
                    <li><a href="porturma.php?lista=espanhol.php">Lista com alunos que cursam Espanhol</a></li>
                    <li><a href="porturma.php?lista=obs.php">Lista com observações dos alunos</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
</body>
</html>