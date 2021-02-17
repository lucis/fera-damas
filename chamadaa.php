<?php include("conexao.php");
    if (isset($_POST['num'])){
        $num = $_POST['num'];
        $matricula = $_POST['matricula'];
        $muda = "UPDATE `alunos` SET `num` = '$num' WHERE matricula = '$matricula' ";
        $mudaa = mysql_query($muda) or die(mysql_error());
    }
?>
<html>
    <head>
        <title>Edita número de chamada</title>
    </head>
    <body>
        <form action="" method="post">
            <label for="matricula">matricula</label>
            <input name="matricula" id="mattricula" type="text">
            <label for="num">Chamada</label>
            <input name="num" id="num" type="text">
            <input type="submit">
        </form>
    </body>
</html>