<?php
include("conexao.php");
?>
<?php


?>

<html>
<head>
    <title><?php echo title(); ?></title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <meta charset="utf-8">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"> </script>
    <script src="jquery.js"></script>
    <script type="text/javascript" src="ibox.js"></script>
    <script type="text/javascript">
        iBox.padding = 50;
        iBox.inherit_frames = false;
    </script>


</head>
<body>
<div id="content">
    <header id="header">


    </header>
    <?php include("menu.html");?>
    <div id="secao">
      <!--  <a href="teste.php?id=1" rel="ibox" title="Loading External HTML File using AJAX"
            >ibox-ajax-test.html</a>-->
        <div id="turmas">
            <ul>
                <?php
                    $q = mysql_query("SELECT * FROM turmas") or die(mysql_error());
                    while ($turma = mysql_fetch_array($q))     {
                       ?>
                        <li onclick="location.href='turmaenem.php?id=<?php echo $turma['id']; ?>';"><div class="t"><?php echo $turma['serie'];?>&ordm; série <?php echo strtoupper($turma['turma']); ?></div></li>
                        <?php
                    }
                ?>


            </ul>
        </div>

    </div>
</div>
</body>
</html>