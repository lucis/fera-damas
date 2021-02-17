<?php include("conexao.php"); ?>
<html>
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"> </script>
    <script>

    </script>


</head>
<?php
    $novo = 1;
    $botao = "Inserir";
    if (isset($_GET['antigo'])) {
        $novo = 0;
        $botao = "Editar";
        $id = $_GET['aluno'];
        $edita = mysql_query("SELECT * FROM enem WHERE id = '$id'") or die(mysql_error());
        if (mysql_num_rows($edita) == 1){
            $row = mysql_fetch_array($edita, MYSQL_ASSOC);
            $insc = $row['inscricao'];
            $sen = $row['senha'];
        }
    }
?>

<body>

        <form action="actionenem.php" method="post">
            <div id="label" style="width: 100%;">
                <label for="inscricao" style="margin-right:115px;">Inscrição</label>
                <label for="senha">Senha</label>
            </div>
            <input type="text" name="inscricao" id="inscricao" value="<?php echo $insc; ?>">
            <input type="text" name="senha" id="senha" value="<?php echo $sen; ?>">
            <input type="hidden" name="aluno" value="<?php echo $_GET['aluno']; ?>">
            <input type="hidden" name="novo" value="<?php echo $novo; ?>">
            <input type="hidden" name="turma" value="<?php echo $_GET['turma'];?>">
            <input type="submit" id="manda" value="<?php echo $botao; ?>">
        </form>

</body>
</html>