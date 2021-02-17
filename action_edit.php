<?php   include("conexao.php");
foreach($_POST as $key => $valor){
    eval('$' . $key . ' = "' . utf8_decode($valor) . '";');
}
$nascimento = str_replace("/","-",$nascimento);
$datarg = str_replace("/","-",$datarg);
$datarg = date("Y-m-d", strtotime($datarg));
$nascimento = date("Y-m-d", strtotime($nascimento));
$num = $chamada;

$sql = "UPDATE `alunos` SET `num` = '$num', `nome` = '$nome', `nascimento` = '$nascimento', `matricula` = '$matricula', `serie` = '$turma', `rua` = '$rua', `numero` = '$numero', `bairro` = '$bairro', `cidade` = '$cidade', `cel1` = '$cel1', `cel2` = '$cel2', `fixo` = '$fixo', `email` = '$email', `cpf` = '$cpf', `rg` = '$rg', `datarg` = '$datarg', `orgrg` = '$orgrg', `titulo` = '$titulo', `zona` = '$zona', `secao` = '$secao', `parentesco1` = '$parentesco1', `parentesco2` = '$parentesco2', `resp1` = '$resp1', `emailresp1` = '$emailresp1', `cel1resp1` = '$cel1resp1', `cel2resp1` = '$cel2resp1', `resp2` = '$resp2', `emailresp2` = '$emailresp2', `cel1resp2` = '$cel1resp2', `cel2resp2` = '$cel2resp2', `curso1` = '$curso1', `curso2` = '$curso2', `curso3` = '$curso3', `lingua` = '$lingua' WHERE id = '$id' ";
$inserir = mysql_query($sql)  or die(mysql_error());

if ($inserir){
    header("Location: edicao_aluno.php?erro=1&aluno=".$id);
}else {
    header("Location: edicao_aluno.php?erro=2");
}


?>