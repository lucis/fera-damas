<?php   include("conexao.php");

$id = $_GET['id'];
$aluno = $_GET['aluno'];
$sql = "DELETE FROM obs WHERE id = '$id'";
$inserir = mysql_query($sql)  or die(mysql_error());
if ($inserir){
    header("Location: aluno.php?aluno=".$aluno);
}else {
    header("Location: insere.php?erro=2");
}


?>