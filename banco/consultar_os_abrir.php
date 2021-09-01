<?php
//instância
$db = new PDO("sqlite:banco.db");

$idConsulta = $_GET['id'];

//visualiza
foreach ($db->query("SELECT id, setor, nome, telefone, equipamento, patrimonio, relatado, tecnico, constatado, realizado, situacao, criado_em, fechado_em  FROM os WHERE id='$idConsulta'") as $row) {
$setor = $row[1];
$funcionario = $row[2];
$telefone = $row[3];
$equipamento = $row[4];
$patrimonio = $row[5];
$relatado = $row[6];
$tecnico = $row[7];
$constatado = $row[8];
$realizado = $row[9];
$situacao = $row[10];
$criado_em = $row[11];
$fechado_em = $row[12];

            
echo "<html>";
echo "<head>";
echo "<meta http-equiv='pragma' content='no-cache'> <meta http-equiv='expires' content='-1'>";
echo "<meta charset='UTF-8'>";
echo "<style type='text/css'>";
echo ".style1 {";
echo "	text-align: left;";
echo "}";
echo "</style>";

echo "</head>";

echo "<body>";



echo "<form method='POST' action='./atualizar_os.php?id=$idConsulta'>";
echo "<div align='center'>";
echo "<table width='100%'>";
echo "<tr>";

echo "<input type='hidden' name='data_inicio' value='03.01.2009'>";

echo "<p>ORDEM DE SERVIÇO Nº $idConsulta</p>";
echo "<td width='10%' bgcolor='#02679C'><div align='center'>";
echo "	<font face='Arial, Helvetica, sans-serif' size='2' color='#FFFFFF'>*Setor</font></div></td>";
echo "<td width='40%' bgcolor='#CCCCCC'>";
echo "<input type='text' size='42' name='setor' maxlength='42' value='$setor'>&nbsp;&nbsp;</td>";
echo "<td bgcolor='#02679C'><div align='center'>";
echo "	<font face='Arial, Helvetica, sans-serif' size='2' color='#FFFFFF'>Telefone:</font></div></td>";
echo "<td bgcolor='#CCCCCC'>";
echo "<input type='text' size='42' name='telefone' maxlength='12' value='$telefone'></td>";
echo "</tr>";
echo "<tr>";
echo "<td bgcolor='#02679C'><div align='center'>";
echo "	<font face='Arial, Helvetica, sans-serif' size='2' color='#FFFFFF'>*Funcionário:</font></div></td>";
echo "<td bgcolor='#CCCCCC'>";
echo "<input type='text' size='42' name='nome' maxlength='60' value='$funcionario'></td>";
echo "<td bgcolor='#02679C'><div align='center'>";
echo "	<font face='Arial, Helvetica, sans-serif' size='2' color='#FFFFFF'>*Patrimonio:</font></div></td>";
echo "<td bgcolor='#CCCCCC'=>";
echo "<input type='text' size='42' name='patrimonio' maxlength='12' value='$patrimonio'></td>";
echo "</tr>";
echo "<tr>";

echo "<td bgcolor='#02679C'><div align='center'>";
echo "	<font face='Arial, Helvetica, sans-serif' size='2' color='#FFFFFF'>";
echo "	Equipamento:</font></div></td>";
echo "<td bgcolor='#CCCCCC'>";
echo "<input type='text' size='42' name='equipamento' maxlength='60' value='$equipamento'></td>";
echo "<td bgcolor='#02679C'><div align='center'>";
echo "	<font face='Arial, Helvetica, sans-serif' size='2' color='#FFFFFF'>Tecnico:</font></div></td>";
echo "<td bgcolor='#CCCCCC'>";
echo "<input type='text' size='42' name='tecnico' maxlength='12' value='$tecnico'></td>";
echo "</tr>";
echo "<tr>";
echo "<td bgcolor='#02679C'><div align='center'>";
echo "	<font face='Arial, Helvetica, sans-serif' size='2' color='#FFFFFF'>Situação:</font></div></td>";
echo "<td bgcolor='#CCCCCC'>";
echo "<input type='text' size='42' name='situacao' maxlength='20' value='$situacao'></td>";
echo "<td bgcolor='#02679C'><div align='center'>";
echo "	<font color='#FFFFFF' size='2' face='Arial, Helvetica, sans-serif'>Data de Entrada:</font></div></td>";
echo "<td bgcolor='#CCCCCC'><input type='text' size='42' name='entrada' maxlength='50' value='$criado_em'></td>";
echo "</tr>";
echo "<tr>";
echo "<td width='10%' bgcolor='#02679C'><div align='center'>";
echo "	<font color='#FFFFFF' size='2' face='Arial, Helvetica, sans-serif'>*Data Saída:</font></div></td>";

echo "<td width='40%' bgcolor='#CCCCCC'>";
echo "<input type='text' size='42' name='saida' maxlength='20' value='$fechado_em'></td>";
echo "<td width='10%' bgcolor='#CCCCCC'><div align='center'><font color='#FFFFFF' size='2' face='Arial, Helvetica, sans-serif'></font></div></td>";
echo "<td width='40%' bgcolor='#CCCCCC'></td>";
echo "</tr>";
echo "</table>";
echo "<table width='100%'>";
echo "<tr>";
echo "<td width='10%' bgcolor='#02679C'><div align='center'><font color='#FFFFFF' size='2' face='Arial, Helvetica, sans-serif'>";
echo "	*Problema Informado(s):</font></div></td>";
echo "<td width='90%' bgcolor='#CCCCCC'><textarea name='relatado' rows='5' cols='59' >$relatado</textarea></td>";
echo "</tr>";
echo "<td width='10%' bgcolor='#02679C'><div align='center'><font color='#FFFFFF' size='2' face='Arial, Helvetica, sans-serif'>";
echo "	*Problema constatado(s):</font></div></td>";
echo "<td width='90%' bgcolor='#CCCCCC'>";
echo "<textarea name='constatado' rows='5' cols='59'>$constatado</textarea></td>";
echo "</tr>";
echo "<td width='10%' bgcolor='#02679C'><div align='center'><font color='#FFFFFF' size='2' face='Arial, Helvetica, sans-serif'>";
echo "	*Serviço executado(s):</font></div></td>";
echo "<td width='90%' bgcolor='#CCCCCC'><textarea name='realizado' rows='5' cols='59'>$realizado</textarea></td>";
echo "</tr>";

echo "</table>";
echo "<table width='100%'>";
echo "<tr>";
echo "	<td width='10%' bgcolor='#003366'><div align='center'><input type='button' value='Voltar' onClick='history.go(-1)'></div></td>";
echo "<td width='40%' bgcolor='#003366'></td>";
echo "<td width='10%' bgcolor='#003366'><div align='center'><input type='submit' name='atualizar' value='Atualizar'></div></td>";
echo "<td width='40%' bgcolor='#003366'></td>";
echo "<td width='20%'><div align='center'><a href=''>Encerrar OS</a></div></td>";
echo "<td width='40%' bgcolor='#003366'></td>";
echo "</tr>";
echo "</table>";
echo "</div>";

echo "</form>";


echo "<hr>";

echo "</body>";
echo "</html>";


echo "</TABLE>";
}
?>