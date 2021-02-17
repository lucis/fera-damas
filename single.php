    	<div id="aluno">
        	<div class="conjunto">
        	<div class="titulo"><span style="width: 530px;">Nome</span><span style="float: right; margin-right: 50px; ">Nº</span><span style="float: right; margin-right:46px;">Turma</span></div>
			<div class="bloco"><div id="nome"><?php echo $nome; ?></div>
                <div id="turma">
                    <?php echo $serieexibir; ?>&ordm; série <?php echo $turmaexibir; ?>
                </div>
                <div id="num">
                    <?php echo $num; ?>
                </div>
            </div>
            </div>
            <div class="conjunto">
            <div class="titulo"><span>Matrícula</span><span style="float: right; margin: 0 62px 0 0;">Número C-GAMA</span><span style="float: right; margin: 0 84px 0 0;">Data de Nascimento</span></div>
            <div class="bloco" style=""><div id="matricula"><?php echo $matricula; ?></div><div id="nascimento"><?php echo $nascimento; ?></div><div id="id"><?php echo $id; ?></div></div>
            </div>
            <div class="conjunto" >
                <div class="titulo"><span>Curso pretendido</span><span style="float: right; margin: 0 139px 0 0;">Senha</span><span style="float: right; margin: 0 24px 0 0;">Inscrição ENEM</span></div>
                <div class="bloco"><div id="cursos"><?php echo $curso1; ?></div><div id="inscricao"><?php echo $inscricao; ?></div><div id="senha"><?php echo $senha; ?></div></div>
            </div>
            <div class="conjunto" >
                <div class="titulo"><span>Endereço</span><span style="float: right; margin: 0 33px 0 0;">Número</span></div>
                <div class="bloco"><div id="rua"><?php echo $rua; ?></div><div id="numero"><?php echo $numero; ?></div></div>
            </div>
            <div class="conjunto" >
                <div class="titulo"><span>Bairro</span><span style="float: right; margin: 0 155px 0 0;">Telefone:</span><span style="float: right; margin: 0 176px 0 0;">Cidade</span></div>
                <div class="bloco"><div id="bairro"><?php echo $bairro; ?></div><div id="cidade"><?php echo $cidade; ?></div><div id="fixo"><?php echo $fixo; ?></div></div>
            </div>
            <div class="conjunto" >
                <div class="titulo"><span>Celular(1)</span><span style="float: right; margin: 0 194px 0 0;">CPF:</span><span style="float: right; margin: 0 150px 0 0;">Celular(2)</span></div>
                <div class="bloco"><div id="cel1">(83)<?php echo $cel1; ?></div><div id="cel2"><?php echo $cel2; ?></div><div id="cpf"><?php echo $cpf; ?></div></div>
            </div>
            <div class="conjunto" >
                <div class="titulo">
                    <div style=" width: 70px; float: left; margin-right: 332px;">E-mail</div>
                    <div style=" float: left;  margin-right: 32px;">Título de eleitor</div>
                    <div style="float: left;  margin-right: 19px;">Zona</div>
                    <div style="float: left; ">Seção</div>
                </div>
                <div class="bloco"><div id="email"><?php echo $email; ?></div><div id="titulo"><?php echo $titulo; ?></div><div id="zona"><?php echo $zona; ?></div><div id="secaoe"><?php echo $secao; ?></div></div>
            </div>
            <div class="conjunto" >
                <div class="titulo">
                    <div style=" width: 70px; float: left; margin-right: 164px;">RG</div>
                    <div style=" float: left;  margin-right: 84px;">Órgão de emissão</div>
                    <div style="float: left;  margin-right: 19px;">Data de emissão</div>
                </div>
                <div class="bloco"><div id="rg"><?php echo $rg; ?></div><div id="orgrg"><?php echo $orgrg; ?></div><div id="datarg"><?php echo $datarg; ?></div></div>
            </div>
            <div id="blocopai">
                <div class="conjunto" >
                    <div class="titulo">
                        <div style=" width: 450px; float: left; ">Nome do 1º responsável (<?php echo $parentesco1; ?>)</div>
                        <div style=" float: right;  margin-right: 116px;">Celular(1)</div>
                    </div>
                    <div class="bloco"><div id="resp1"><?php echo $resp1; ?></div><div id="cel1resp1"><?php echo $cel1resp1; ?></div></div>
                </div>
                <div class="conjunto" >
                    <div class="titulo">
                        <div style=" width: 450px; float: left; ">Email do 1º responsável</div>
                        <div style=" float: right;  margin-right: 116px;">Celular(2)</div>
                    </div>
                    <div class="bloco"><div id="emailresp1"><?php echo $emailresp1; ?></div><div id="cel2resp1"><?php echo $cel2resp1; ?></div></div>
                </div>
            </div>
            <div id="blocomae">
                <div class="conjunto" >
                    <div class="titulo">
                        <div style=" width: 450px; float: left; ">Nome do 2º responsável (<?php echo $parentesco2; ?>)</div>
                        <div style=" float: right;  margin-right: 116px;">Celular(1)</div>
                    </div>
                    <div class="bloco"><div id="resp2"><?php echo $resp2; ?></div><div id="cel1resp2"><?php echo $cel1resp2; ?></div></div>
                </div>
                <div class="conjunto" >
                    <div class="titulo">
                        <div style=" width: 450px; float: left; ">Email do 2º responsável</div>
                        <div style=" float: right;  margin-right: 116px;">Celular(2)</div>
                    </div>
                    <div class="bloco"><div id="emailresp2"><?php echo $emailresp2; ?></div><div id="cel2resp2"><?php echo $cel2resp2; ?></div></div>
                </div>
            </div>
            <div class="conjunto" >
                <div class="titulo">
                    <div style=" width: 250px; float: left; margin-right: 164px;">Outros cursos pretendidos</div>
                    <div style=" float: right;  margin-right: 72px;">Lingua E.</div>
                </div>
                <div class="bloco"><div id="outroscursos"><?php echo $curso2.'; '.$curso3; ?></div><div id="lingua"><?php echo $lingua; ?></div></div>
            </div>
            <div class="conjunto" >
                <?php
                    $pega = mysql_query("SELECT * FROM obs WHERE aluno = '$id_aluno' ORDER BY data") or die(mysql_error());
                    if (mysql_num_rows($pega) > 0){

                ?>
                <div class="titulo">
                    <div style="float: left; display: block;">Observações</div>
                </div>
                <div class="bloco">
                    <div id="notas">
                        <ul style="float: left; margin-top: 3px; width: 700px;">
                            <?php
                                while ($linha = mysql_fetch_array($pega, MYSQL_ASSOC)){
                                    $day = date("d/m/Y", strtotime($linha['data']));
                                    $nota = utf8_encode($linha['obs']);
                            ?>
                            <li><?php echo $day.' - '.$nota; ?><a href="apaga.php?id=<?php echo $linha['id'];?>&aluno=<?php echo $id_aluno; ?>"><img style="margin-top: 3px; " src="excluir.png" alt="Excluir" title="Excluir nota" width="16px"></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <?php } ?>
            </div>


        </div>
