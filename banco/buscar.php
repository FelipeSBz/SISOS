<?php
//instância
$db = new PDO("sqlite:banco.db");

$vpatrimonio = $_POST['patrimonio'];

//visualiza
echo "<h1>Ordem de Serviços Abertas do Equipamento: $vpatrimonio</h1>";
echo "<BR>";
echo "<TABLE BORDER=1 WIDTH=98% >";
echo "	<TR VALIGN=top ALIGN=CENTER Width=75%>";
echo "		<TD>";
echo "OS";
echo "		</TD>";
echo "		<TD>";
echo "Setor";
echo "		</TD>";
echo "		<TD>";
echo "Entrada";
echo "		</TD>";
echo "		<TD>";
echo "Equipamento";
echo "		</TD>";
echo "		<TD>";
echo "Ações";
echo "		</TD>";
echo "	</TR>";

foreach ($db->query("SELECT id, setor, criado_em, equipamento, patrimonio FROM os WHERE patrimonio = '$vpatrimonio'") as $row) {

echo "		<TD>";
				print_r($row[0]);
echo "		</TD>";
echo "		<TD>";
				print_r($row[1]);
echo "		</TD>";
echo "		<TD>";
				print_r($row[2]);
echo "		</TD>";
echo "		<TD>";
				print_r($row[3]);
echo "		</TD>";
echo "		<TD>";
echo "		<a href='./consultar_os_fechada.php?id=$row[0]'> Abrir OS </a> ";
echo "		</TD>";
echo "	</TR>";

}
echo "</TABLE>";
echo "<br><input type='button' value='Voltar' onClick='history.go(-1)'>";
?>