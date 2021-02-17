<?php
    include("conexao.php");
?>
<html>
<head>
    <title><?php echo title(); ?></title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="60">
</head>
<body>
<div id="content">
<header id="header">


</header>
    <?php include("menu.html");?>
<div id="secao">
<!-- if (selecte nome from alunos where nascimento == date(hoje)) > 0{
    echo "hoje tem aniversariantes"
    while ($i = mysql_fetch_array(query)) {
        echo $i['nome']; -->
    <h1>Hoje é
    <?php
    $data = date('D');
    $mes = date('M');
    $dia = date('d');
    $ano = date('Y');

    $semana = array(
        'Sun' => 'Domingo',
        'Mon' => 'Segunda-Feira',
        'Tue' => 'Terca-Feira',
        'Wed' => 'Quarta-Feira',
        'Thu' => 'Quinta-Feira',
        'Fri' => 'Sexta-Feira',
        'Sat' => 'Sábado'
    );

    $mes_extenso = array(
        'Jan' => 'Janeiro',
        'Feb' => 'Fevereiro',
        'Mar' => 'Marco',
        'Apr' => 'Abril',
        'May' => 'Maio',
        'Jun' => 'Junho',
        'Jul' => 'Julho',
        'Aug' => 'Agosto',
        'Nov' => 'Novembro',
        'Sep' => 'Setembro',
        'Oct' => 'Outubro',
        'Dec' => 'Dezembro'
    );

    echo "<spam style='color: red;'>" .$semana["$data"] . "</spam>, {$dia} de " . $mes_extenso["$mes"] . " de {$ano}"; ?></h1>
<div id="niver">
    <?php if ($rr) {?><div id="aniversariantes"><b>ANIVERSARIANTES</b></div><?php } ?>
    <ul>
        <?php aniversariantes(); ?>

    </ul>
</div>
    <div id="agenda">
        <?php if ($hh) {?><div id="hoje"><b>PRA HOJE</b></div><?php } ?>
        <ul>
            <?php agenda(); ?>
        </ul>
    </div>
    <?php

        $agora = agora();
        $ve = explode("-", $agora);
        $turno = $ve[1];
        $aula = $ve[2];
        switch ($aula):
            case "1":
                $exibir = "Primeira aula da ";
                break;
            case "2":
                $exibir = "Segunda aula da ";
                break;
            case "3":
                $exibir = "Terceira aula da ";
                break;
            case "4":
                $exibir = "Quarta aula da ";
                break;
            case "5":
                $exibir = "Quinta aula da ";
                break;
            case "6":
                $exibir = "Sexta aula da ";
                break;
            case "i":
                $exibir = "Intervalo da ";
                break;
            default:
                $exibir = "Fora do horário de aula";
        endswitch;
        if ($turno == "mor"){
            $exibir .= 'manhã';
        }elseif ($turno == "aft"){
            $exibir .= 'tarde';
        }else {
            
        }
    ?>
    <div id="horario">
        <h1 style="font-size: 25px; color: #75787f"><?php echo $exibir; ?></h1>

        <ul class="turma1">
            <li>3ª série A</li>
            <li>3ª série B</li>
            <li>3ª série C</li>
            <li>3ª série D</li>
        </ul>
        <ul>
            <?php
            $consulta = mysql_query("SELECT * FROM horario") or die(mysql_error());

            while ($now = mysql_fetch_array($consulta)){
            ?>
            <li><input type="text" value="<?php echo utf8_encode($now[$agora]); ?>"
            <?php if ($agora == "non"){?>style="color: #ff0000;"<?php }elseif ($agora == "i") {?> style="color: #75787f;" <?php }?>></li>
            <?php
            }
            ?>
        </ul>
    </div>

</div>
</div>
</body>
</html>