<?php
    include("conexao.php");
?>
<?php
   /* if (isset($_POST['data'])) {
        $texto = trata(utf8_decode($_POST['texto']));
        $data = implode("-",array_reverse(explode("/",$_POST['data'])));
        $agenda = mysql_query("INSERT INTO agenda (data, texto) VALUES ('$data', '$texto')") or die(mysql_error());

    }*/
if (isset($_POST['data'])){
    if (ValidaData($_POST['data'])) {
        if (strlen($_POST['texto']) > 0 ){
            $texto = utf8_decode(trata($_POST['texto']));
            $data = implode("-",array_reverse(explode("/",$_POST['data'])));
            $agenda = mysql_query("INSERT INTO agenda (data, texto) VALUES ('$data', '$texto')") or die(mysql_error());
            $ok = true;

        }else{
           $erro = "t";
            $textoo = $_POST['texto'];
        }

    }else {
        $erro = "d";
        $dataa = $_POST['data'];
    }
}

?>
<html>
<head>
    <title><?php echo title(); ?></title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css " />
    <script src="http://code.jquery.com/jquery-1.8.2.js "></script>
    <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js "></script>
    <script>
        $(function() {
            $("#calendario").datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'dd/mm/yy',
                dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
                dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
                dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                monthNamesShort: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro']

            });
        });
    </script>



</head>
<body>
<div id="content">
<header id="header">


</header>
    <?php include("menu.html");?>
<div id="secao">
    <form action="" method="post">
    <div class="campo">Data: <input type="text" name="data" id="calendario" value="" /></div>
    <?php if (isset($ok) && $ok == true){ ?><div id="erroAgendar" style="background-color: greenyellow; font-size: 18px;">O evento foi agendado</div> <?php } ?>
    <?php if (isset($erro)){ ?> <div id="erroAgendar"> <?php
        if ($erro == "d"){
            echo "Data inválida";
        }elseif ($erro == "t" ){
            echo "Texto inválido";
        }

   ?></div><?php } ?>
    <div class="campo">O que fazer: <br/> <textarea name="texto"><?php if (isset($textoo)) { echo $textoo; }?></textarea></div>
    <div class="campo"><input type="submit" name="envia" value="Agendar" id="bt"></div>
    </form>


</div>
</div>
</body>
</html>