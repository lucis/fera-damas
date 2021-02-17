<?php
    include("conexao.php");
    if (isset($_POST['aluno'])){
        $novo = $_POST['novo'];
        $aluno = $_POST['aluno'];
        $inscricao = $_POST['inscricao'];
        $senha = $_POST['senha'];

        if ($novo == 1){
            $inserir = mysql_query("INSERT INTO enem (id, inscricao, senha) VALUES ('$aluno', '$inscricao', '$senha')") or die("Erro ao incluir. Mande mensagem pra Luciano");
            if ($inserir){
                header("Location: turmaenem.php?id=".$_POST['turma']);
            }
        }elseif ($novo == 0){

             $editando = mysql_query("UPDATE enem SET inscricao='$inscricao', senha='$senha' WHERE id = '$aluno'") or die("Erro. Chame Luciano");
             if ($editando){
                 header("Location: turmaenem.php?id=".$_POST['turma']);
             }
        }
    }

?>