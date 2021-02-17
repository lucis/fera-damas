<?php include("conexao.php");
function agora1()
{
    $i = date("H:i");
    $sem = date('D');
    $dia = strtolower($sem);
    if ($i > "07:00" && $i <= "12:15") {
        $turno = "mor";
    } elseif ($i > "13:50" && $i <= "19:10") {
        $turno = "aft";
    } else {
        $turno = 0;
    }
    if ($dia == 'sat' || $dia == 'fri'){
        return 'non';

    }else{
        if ($turno == 'aft' && $dia != 'tue'){
            $ee = 1;
        }
        if ($turno == 'aft' && $dia != 'thu'){
            $ee++;
        }
        if ($ee == 2){
            return "non";
        }else {



    if ($turno == "mor") {
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
    } elseif ($turno == "aft") {
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
            echo "i";
        } else {
            echo $dia . '-' . $turno . '-' . $aula;
        }
    } else {
        echo "non";
        //  return $dia . '-' . $turno . '-' . $aula;
    }
    }}
}


agora1();

?>
