<?php
include("conexao.php");
if (isset($_POST['aluno'])){
    $aluno = $_POST['aluno'];
    $data = date("Y-m-d", strtotime($_POST['data']));
    $obs = utf8_decode(trata($_POST['obs']));
    $inserir = mysql_query("INSERT INTO obs (aluno, data, obs) VALUES ('$aluno', '$data', '$obs')") or die("Erro ao incluir. Mande mensagem pra Luciano");
        if ($inserir){
            header("Location: aluno.php?aluno=".$aluno);
        }
    }

?>