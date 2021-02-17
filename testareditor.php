<?php   include("conexao.php");
    foreach($_POST as $key => $valor){
        eval('$' . $key . ' = "' . utf8_decode($valor) . '";');
    }
    $nascimento = str_replace("/","-",$nascimento);
    $datarg = str_replace("/","-",$datarg);
    $datarg = date("Y-m-d", strtotime($datarg));
    $nascimento = date("Y-m-d", strtotime($nascimento));
    $num = $chamada;
    echo $turma;
    $sql = "INSERT INTO `alunos` (`id`, `num`, `nome`, `matricula`, `serie`, `nascimento`, `rua`, `numero`, `bairro`, `cidade`, `cel1`, `cel2`, `fixo`, `email`, `cpf`, `rg`, `datarg`, `orgrg`, `titulo`, `zona`, `secao`, `parentesco1`, `parentesco2`, `resp1`, `emailresp1`, `cel1resp1`, `cel2resp1`, `resp2`, `emailresp2`, `cel1resp2`, `cel2resp2`, `curso1`, `curso2`, `curso3`, `lingua`) VALUES (NULL, '$num', '$nome', '$matricula', '$turma', '$nascimento', '$rua', '$numero', '$bairro', '$cidade', '$cel1', '$cel2', '$fixo', '$email', '$cpf', '$rg', '$datarg', '$orgrg', '$titulo', '$zona', '$secao', '$parentesco1', '$parentesco2', '$resp1', '$emailresp1', '$cel1resp1', '$cel2resp1', '$resp2', '$emailresp2', '$cel1resp2', '$cel2resp2', '$curso1', '$curso2', '$curso3', '$lingua')";
    $inserir = mysql_query($sql)  or die(mysql_error());
    if ($inserir){
        header("Location: insere.php?erro=1");
    }else {
        header("Location: insere.php?erro=2");
    }


?>