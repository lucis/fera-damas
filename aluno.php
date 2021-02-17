<?php
include("conexao.php");
?>
<?php
$id_aluno = (isset($_GET['aluno'])) ? (trata($_GET['aluno'])) : ("erro");
?>

<html>
<head>
    <title><?php echo title(); ?></title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"> </script>
    <script src="jquery.js"></script>
    <script type="text/javascript" src="ibox.js"></script>
    <script type="text/javascript">
        iBox.padding = 50;
        iBox.inherit_frames = false;
        iBox.close_label = "Fechar";
    </script>

</head>
<body>
<div id="content">
    <header id="header">


    </header>
    <?php include("menu.html");?>

    <div id="secao">
        <div id="nav">
            <div class="nota">
                <a href="formnota.php?aluno=<?php echo $id_aluno; ?>" rel="ibox">Adicionar observação</a>
            </div>
            <div class="voltar">
                <a href="javascript:history.back()">Voltar</a>
            </div>
            <div class="editar">
                <a href="edicao_aluno.php?aluno=<?php echo $id_aluno; ?>">Editar</a>
            </div>

        </div>

        <?php
            if ($id_aluno == "erro"){
                echo "não foi recebido";
            }else{
                if (strlen($id_aluno) == 0){
                    echo "erro";
                }
                else{
                    $single = mysql_query("SELECT * FROM alunos WHERE id = '$id_aluno'") or die(mysql_error());
                    $aluno = mysql_fetch_array($single, MYSQL_ASSOC);

                    if (mysql_num_rows($single) == 1){

                        foreach($aluno as $key => $valor){
                            if (strlen($valor) > 0) {
                                eval('$' . $key . ' = "' . utf8_encode($valor) . '";');
                            }else{
                                eval('$' . $key . ' = "N/I";');
                            }
                        }
                        $enem_query = mysql_query("SELECT * FROM enem WHERE id = '$id'") or die(mysql_error());
                        $enem_vetor = mysql_fetch_array($enem_query, MYSQL_ASSOC);
                        $inscricao = strlen($enem_vetor['inscricao']) > 0 ? $enem_vetor['inscricao'] : "N/I";
                        $senha = strlen(utf8_encode($enem_vetor['senha'])) > 0 ? utf8_encode($enem_vetor['senha']) : "N/I";
                        $nascimento = date('d/m/Y', strtotime($nascimento));
                        $datarg = date('d/m/Y', strtotime($datarg));
                        $lingua = $lingua == 1 ? "Inglês" : "Espanhol";
                        $pegaturma = mysql_query("SELECT * FROM turmas WHERE id = '$serie'");
                        $linha = mysql_fetch_array($pegaturma);
                        $serieexibir = $linha[1];
                        $turmaexibir = strtoupper($linha[2]);
                        include("single.php");
                    }else{
                        echo "erro";

                    }
                }
            }

        ?>
    </div>
</div>
</body>
</html>