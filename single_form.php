<!-- <html>
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
    <script src="http://cloud.github.com/downloads/digitalBush/jquery.maskedinput/jquery.maskedinput-1.3.min.js" type="text/javascript"></script>
    <title>Sistema Fera - DAMAS</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estiloform.css">
    <script type="text/javascript">
        jQuery(function($){

            $("#tel").mask("(83)9999-9999");
            $("#cel").mask("(83)9999-9999");
            $(".telefone").mask("9999-9999");
            $(".cpf").mask("99999999999");
            $(".matricula").mask("99999999");
            $(".data").mask("99/99/9999");

        });
    </script>


</head>

<body>
-->
<form action="testareditor.php" method="post">
<div id="alunoform">
    <div class="conjunto">
        <div class="titulo"><span style="width: 530px;">Nome</span><span style="float: right; margin-right:73px;">Turma</span></div>
        <div class="bloco"><input type="text" id="nome" name="nome" value="<?php echo $nome; ?>">
            <select id="turma" name="turma">
                <?php
                    $turmas = mysql_query("SELECT * FROM turmas") or die(mysql_error());
                    while ($single = mysql_fetch_array($turmas, MYSQL_ASSOC)){
                        $ids = $single['id'];
                        $series =  $single['serie'];
                        $turmaa = strtoupper($single['turma']);
                    ?>
                        <option value="<?php echo $ids; ?>"><?php echo $series; ?>&ordm; série <?php echo $turmaa; ?></option>
                    <?php
                    }
                ?>

            </select></div>
    </div>
    <div class="conjunto">
        <div class="titulo">
            <span>Matrícula</span>
            <span style="float: right; margin: 0 62px 0 0;">Número C-GAMA</span>
            <span style="float: right; margin: 0 60px 0 0;">Data de Nascimento</span>
            <span style="float: right; margin: 0 30px 0 0;">Chamada</span>
        </div>
        <div class="bloco" style="">
            <div id="matricula">
                <input class="matricula" type="text" name="matricula" value="<?php echo $matricula; ?>">
            </div>
            <div id="chamada">
                <input name="chamada" type="number" value="<?php echo $num;?>">
            </div>
            <div id="nascimento">
                <input type="text" class="data" name="nascimento" value="<?php echo $nascimento; ?>">
            </div>
            <div id="id">
                <input type="text" name="id"readonly="readonly" value="<?php echo $id; ?>">
            </div>
        </div>
    </div>
    <div class="conjunto" >
        <div class="titulo"><span>Curso pretendido</span><span style="float: right; margin: 0 120px 0 0;">Senha</span><span style="float: right; margin: 0 44px 0 0;">Inscrição ENEM</span></div>
        <div class="bloco"><div id="curso1"><input type="text" name="curso1" value="<?php echo $curso1; ?>"></div><div id="inscricao"><input type="text" name="inscricao" readonly="readonly" value="*Módulo ENEM<?php echo $inscricao; ?>"></div><div id="senha"><input type="text" readonly="readonly" value="*Módulo ENEM<?php echo $senha; ?>"></div></div>
    </div>
    <div class="conjunto" >
        <div class="titulo"><span>Endereço</span><span style="float: right; margin: 0 33px 0 0;">Número</span></div>
        <div class="bloco"><div id="rua"><input type="text" name="rua" value="<?php echo $rua; ?>"></div><div id="numero"><input type="text" name="numero" value="<?php echo $numero; ?>"></div></div>
    </div>
    <div class="conjunto" >
        <div class="titulo"><span>Bairro</span><span style="float: right; margin: 0 155px 0 0;">Telefone:</span><span style="float: right; margin: 0 176px 0 0;">Cidade</span></div>
        <div class="bloco"><div id="bairro"><input type="text" name="bairro" value="<?php echo $bairro; ?>"></div><div id="cidade"><input type="text" name="cidade" value="<?php echo $cidade; ?>"></div><div id="fixo"><input class="telefone" type="text" name="fixo" value="<?php echo $fixo; ?>"></div></div>
    </div>
    <div class="conjunto" >
        <div class="titulo"><span>Celular(1)<small style="color: gray;"></small></span><span style="float: right; margin: 0 194px 0 0;">CPF:</span><span style="float: right; margin: 0 150px 0 0;">Celular(2)</span></div>
        <div class="bloco"><div id="cel1"><input class="telefone" type="text" name="cel1" value="<?php echo $cel1; ?>"></div><div id="cel2"><input class="telefone" type="text" name="cel2" value="<?php echo $cel2; ?>"></div><div id="cpf"><input type="text" class="cpf" name="cpf" value="<?php echo $cpf; ?>"></div></div>
    </div>
    <div class="conjunto" >
        <div class="titulo">
            <div style=" width: 70px; float: left; margin-right: 332px;">E-mail</div>
            <div style=" float: left;  margin-right: 32px;">Título de eleitor</div>
            <div style="float: left;  margin-right: 19px;">Zona</div>
            <div style="float: left; ">Seção</div>
        </div>
        <div class="bloco"><div id="email"><input type="email" name="email" value="<?php echo $email; ?>"></div><div id="titulo"><input type="number" name="titulo" value="<?php echo $titulo; ?>"></div><div id="zona"><input type="number" name="zona" value="<?php echo $zona; ?>"></div><div id="secaoe"><input type="number" name="secao" value="<?php echo $secao; ?>"></div></div>
    </div>
    <div class="conjunto" >
        <div class="titulo">
            <div style=" width: 70px; float: left; margin-right: 164px;">RG</div>
            <div style=" float: left;  margin-right: 84px;">Órgão de emissão</div>
            <div style="float: left;  margin-right: 19px;">Data de emissão</div>
        </div>
        <div class="bloco"><div id="rg"><input type="number" name="rg" value="<?php echo $rg; ?>"></div><div id="orgrg"><input type="text" name="orgrg" value="<?php echo $orgrg; ?>"></div><div id="datarg"><input type="text" class="data" name="datarg" value="<?php echo $datarg; ?>"></div></div>
    </div>
    <div id="blocopai">
        <div class="conjunto" >
            <div class="titulo">
                <div style=" width: 450px; float: left; ">
                    Nome do 1º responsável
                    <select id="parentesco1" name="parentesco1">
                        <option value="mãe">mãe</option>
                        <option value="pai">pai</option>
                        <option value="tio">tio</option>
                        <option value="tia">tia</option>
                        <option value="avó">avó</option>
                        <option value="avô">avô</option>
                        <option value="primo">primo</option>
                        <option value="outro">outro</option>
                    </select>
                </div>
                <div style=" float: right;  margin-right: 116px;">Celular(1)</div>
            </div>
            <div class="bloco"><div id="resp1"><input type="text" name="resp1" value="<?php echo $resp1; ?>"></div><div id="cel1resp1"><input class="telefone" type="text" name="cel1resp1" value="<?php echo $cel1resp1; ?>"></div></div>
        </div>
        <div class="conjunto" >
            <div class="titulo">
                <div style=" width: 450px; float: left; ">Email do 1º responsável</div>
                <div style=" float: right;  margin-right: 116px;">Celular(2)</div>
            </div>
            <div class="bloco"><div id="emailresp1"><input type="email" name="emailresp1" value="<?php echo $emailresp1; ?>"></div><div id="cel2resp1"><input class="telefone" type="text" name="cel2resp1" value="<?php echo $cel2resp1; ?>"></div></div>
        </div>
    </div>
    <div id="blocomae">
        <div class="conjunto" >
            <div class="titulo">
                <div style=" width: 450px; float: left; ">
                    Nome do 2º responsável
                    <select id="parentesco2" name="parentesco2">
                        <option value="mãe">mãe</option>
                        <option value="pai">pai</option>
                        <option value="tio">tio</option>
                        <option value="tia">tia</option>
                        <option value="avó">avó</option>
                        <option value="avô">avô</option>
                        <option value="primo">primo</option>
                        <option value="outro">outro</option>
                    </select>
                </div>
                <div style=" float: right;  margin-right: 116px;">Celular(1)</div>
            </div>
            <div class="bloco"><div id="resp2"><input type="text" name="resp2" value="<?php echo $resp2; ?>"></div><div id="cel1resp2"><input class="telefone" type="text" name="cel1resp2" value="<?php echo $cel1resp2; ?>"></div></div>
        </div>
        <div class="conjunto" >
            <div class="titulo">
                <div style=" width: 450px; float: left; ">Email do 2º responsável</div>
                <div style=" float: right;  margin-right: 116px;">Celular(2)</div>
            </div>
            <div class="bloco"><div id="emailresp2"><input type="email" name="emailresp2" value="<?php echo $emailresp2; ?>"></div><div id="cel2resp2"><input class="telefone" type="text" name="cel2resp2" value="<?php echo $cel2resp2; ?>"></div></div>
        </div>
    </div>
    <div class="conjunto" >
        <div class="titulo">
            <div style=" width: 250px; float: left; margin-right: 164px;">Outros cursos pretendidos</div>
            <div style=" float: right;  margin-right: 72px;">Lingua E.</div>
        </div>
        <div class="bloco">
            <div id="curso2">
                <input type="text" name="curso2" value="<?php echo $curso2; ?>">
            </div>
            <div id="curso3">
                <input type="text" name="curso3" value="<?php echo $curso3; ?>">
            </div>
            <div id="lingua">
                <select name="lingua">
                    <option value="1">Inglês</option>
                    <option value="2">Espanhol</option>
                </select></div></div>
    </div>

<input type="submit" value="Enviar" style="float: right; margin: 10 20px 0 0;">
</div>
</form><!--
</body>
</html>-->