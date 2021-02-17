<!--conexão com o banco de dados-->
<?php
date_default_timezone_set('America/Recife');
$conexao = mysql_connect("localhost", "root", "") or die(mysql_error());
$db = mysql_select_db("fera", $conexao) or die(mysql_error());
?>
<!-- funlão para conseguir os aniversariantes do dia-->
<?php
function aniversariantes(){
    $hoje = date('m-d');
    $query = mysql_query("SELECT * FROM alunos");
    while($i = mysql_fetch_array($query)){
        $birth = $i['nascimento'];
        $birth = substr($birth, 5);
        if ($birth == $hoje){?> <li> <?php
            echo utf8_encode($i['nome']) .  " - ";
            $idTurma = $i['serie'];
            $qturma = mysql_query("SELECT * FROM turmas WHERE id = '$idTurma'");
            while ($s = mysql_fetch_array($qturma)){
                echo $s['serie'] . "&ordm;" . ucfirst($s['turma']);

            }?> </li><?php
        }
    }}
?>
<!-- função para recuperar a agenda do dia atual-->
<?php
function agenda(){
    $today = date("Y-m-d");
    $consulta = mysql_query("SELECT * FROM agenda WHERE data = '$today'") or die(mysql_error());
    while ($bia = mysql_fetch_array($consulta)) {
        echo "<li>" . utf8_encode($bia['texto']) . "</li>";
    }}
?>
<?php
function trata($string){

    $string = trim($string);
    $string =str_replace("'","",$string);//aqui retira aspas simples <'>
    $string =str_replace("\\","",$string);//aqui retira barra invertida<\\>
    $string =str_replace("UNION","",$string);//aqui retiro  o comando UNION <UNION>

    $banlist = array(" insert", " select", " update", " delete", " distinct", " having", " truncate", "replace"," handler", " like", " as ", "or ", "procedure ", " limit", "order by", "group by", " asc", " desc","'","union all", "=", "'", "(", ")", "<", ">", " update", "-shutdown",  "--", "'", "#", "$", "%", "¨", "&", "'or'1'='1'", "--", " insert", " drop", "xp_", "*", " and");
    // ---------------------------------------------


    return $string;

}
?>
<!-- função para validar data -->
<?php function ValidaData($dat){
    $data = explode("/","$dat"); // fatia a string $dat em pedados, usando / como referência
    $d = $data[0];
    $m = $data[1];
    $y = $data[2];
    if (strlen($dat) > 0 && $y >= "2015") {
        $res = checkdate($m, $d, $y);
        if ($res == 1) {
            return true;
        } else {
            return false;
        }
    }
}
?>
<!-- impressão do aniversariantes-->
<?php
$hoje = date('m-d');
$query = mysql_query("SELECT * FROM alunos");
$rr = 0;
while($i = mysql_fetch_array($query)) {
    $birth = $i['nascimento'];
    $birth = substr($birth, 5);
    if ($birth == $hoje) {
        $rr = 1;
    }
}
$today = date("Y-m-d");
$cons = mysql_query("SELECT * FROM agenda");
$hh = 0;
while($i = mysql_fetch_array($cons)) {
    $data = $i['data'];
    if ($data == $today) {
        $hh = 1;
    }
}


/* $numerocgama = $id_aluno;
$num = utf8_encode($aluno['num']);
$nome = utf8_encode($aluno['nome']);
$matricula = utf8_encode($aluno['matricula']);
$serie = utf8_encode($aluno['serie']);
$nascimento = utf8_encode($aluno['nascimento']);
$rua = utf8_encode($aluno['rua']);
$numero = utf8_encode($aluno['numero']);
$bairro = utf8_encode($aluno['bairro']);
$cidade = utf8_encode($aluno['cidade']);
$cel1 = utf8_encode($aluno['cel2']);
$cel2 = utf8_encode($aluno['cel2']);
$fixo = utf8_encode($aluno['fixo']);
$email = utf8_encode($aluno['email']);
$cpf = utf8_encode($aluno['cpf']);
$rg = utf8_encode($aluno['rg']);
$orgrg = utf8_encode($aluno['orgrg']);
$datarg = utf8_encode($aluno['datarg']);
$titulo = utf8_encode($aluno['titulo']);
$zone = utf8_encode($aluno['zona']);
$secao = utf8_encode($aluno['secao']);
$parentesco1 = utf8_encode($aluno['parentesco1']);
$parentesco2 = utf8_encode($aluno['parentessco2']);
$resp1 = utf8_encode($aluno['resp1']);
$emailresp1 = utf8_encode($aluno['emailresp1']);
$cel1resp1 = utf8_encode($aluno['cel1resp1']);
$cel2resp1 = utf8_encode($aluno['cel2resp1']);
$resp2 = utf8_encode($aluno['resp2']);
$emailresp2 = utf8_encode($aluno['emailresp2']);
$cel1resp2 = utf8_encode($aluno['cel1resp2']);
$cel2resp2 = utf8_encode($aluno['cel2resp2']);
$curso1 = utf8_encode($aluno['curso1']);
$curso2 = utf8_encode($aluno['curso2']);
$curso3 = utf8_encode($aluno['curso3']);
$lingua = utf8_encode($aluno['lingua']);
$lingua = $lingua == 1 ? "Inglês" : "Espanhol" ;
echo $lingua ;*/

?>
<?php
function agora()
{
    $i = date("H:i");

    $dia = strtolower(date('D'));
    if ($i > "07:00" && $i < "12:15") {
        $turno = "mor";
    } elseif ($i > "13:50" && $i <= "19:10") {
        $turno = "aft";
    } else {
        $turno = 0;
    }


    if ($turno == "mor" && !$dia == 'sat' && !$dia == 'sun') {
        if ($i > "07:00" && $i <= "07:50") {
            $aula = "1";
        } elseif ($i > "07:50" && $i <= "08:40") {
            $aula = "2";
        } elseif ($i > "08:40" && $i <= "09:30") {
            $aula = "3";
        } elseif ($i > "09:30" && $i <= "09:50") {
            $aula = "i";
        } elseif ($i > "09:50" && $i <= "10:40") {
            $aula = "4";
        } elseif ($i > "10:40" && $i <= "11:30") {
            $aula = "5";
        } elseif ($i > "11:30" && $i <= "12:15") {
            $aula = "6";
        }
    } elseif ($turno == "aft" && $dia == 'tue' or $dia == 'thu') {
        if ($i > "13:50" && $i <= "14:40") {
            $aula = "1";
        } elseif ($i > "14:40" && $i <= "15:30") {
            $aula = "2";
        } elseif ($i > "15:30" && $i <= "16:20") {
            $aula = "3";
        } elseif ($i > "16:20" && $i <= "16:40") {
            $aula = "i";
        } elseif ($i > "16:40" && $i <= "17:30") {
            $aula = "4";
        } elseif ($i > "17:30" && $i <= "18:20") {
            $aula = "5";
        } elseif ($i > "18:20" && $i <= "19:10") {
            $aula = "6";
        }
    } else {
        $aula = 0;
    }
    //ja tem turno, se é manha = "mor", se é tarde = "aft", se o horario nao for horario de aula, $turno = 0.
    //ja tem a aula (1,2,3,4,5,6) ou (i), no caso de intervalo, para ambos os turnos

    if (!$turno == 0 && !$aula == 0) {
        if ($aula == 'i') {
            return "i";
        }else {
            return $dia . '-' . $turno . '-' . $aula;
        }
    } else {
        return "non";
        //  return $dia . '-' . $turno . '-' . $aula;
    }
}

?>
<?php
function title(){
    return 'Sistema C-GAMA - Damas';
}
?>