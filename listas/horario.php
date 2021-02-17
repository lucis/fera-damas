<?php
    if (isset($_POST['monmor1'])) {

       foreach($_POST as $key => $valor) {
            if (strlen($valor) > 0){
            eval('$' . $key . ' = "' . $valor . '";');
            }

        }

    }
?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <style>
        table input {
            width: 95%;
        }
        #terca {

            width: 135px;
            height: 200px;
            margin: 0 0 0 170px;
            float: left;
        }
        #quinta {

            width: 135px;
            height: 200px;
            margin: 0 0 0 131px;
            float: left;
        }
    </style>
</head>
<body>
<div id="tabela">
    <form action="" method="post">
    <table border="1" width="700px" cellspacing=0 cellpadding=2>
        <tr>
            <td></td>
            <th>Segunda</th>
            <th>Terça</th>
            <th>Quarta</th>
            <th>Quinta</th>
            <th>Sexta</th>
        </tr>
        <?php for ($i=0; $i < 6; $i++) {?>
        <tr>
            <td width="5%"><?php echo $i + 1;?>&ordf;</td>
            <td width="19%"><input type="text" name="monmor<?php echo $i + 1; ?>"></td>
            <td width="19%"><input type="text" name="tuemor<?php echo $i + 1; ?>"></td>
            <td width="19%"><input type="text" name="wedmor<?php echo $i + 1; ?>"></td>
            <td width="19%"><input type="text" name="thumor<?php echo $i + 1; ?>"></td>
            <td width="19%"><input type="text" name="frimor<?php echo $i + 1; ?>"></td>
        </tr>
        <?php } ?>


    </table>
    <div id="terca">
        <table width="133px">
            <?php for ($r = 0; $r < 6; $r++){?>
            <tr>
                <td><input type="text" name="tueaft<?php echo $r + 1; ?>"></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <div id="quinta">
        <table width="133px">
            <?php for ($r = 0; $r < 6; $r++){?>
                <tr>
                    <td><input type="text" name="thuaft<?php echo $r + 1; ?>"></td>
                </tr>
            <?php } ?>
        </table>
        <input type="submit">
        </form>
    </div>
</div>
</body>
</html>