<?php include("conexao.php"); ?>
<html>
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"> </script>
    <script>

    </script>



</head>
<?php

if (isset($_GET['aluno'])) {
    $aluno = $_GET['aluno'];
}
?>

<body>

<form action="actionobs.php" method="post">

    <label for="data" style="display: block">Data<br/>
    <input type="date" name="data" id="data" value="">
    </label>
    <label for="obs">Observação<br/>
    <textarea style="width: 400px; height: 100px;" name="obs" id="obs"></textarea><br/>
    </label>
    <input type="hidden" name="aluno" value="<?php echo $aluno; ?>">
    <input type="submit" id="manda" value="Enviar">
</form>

</body>
</html>