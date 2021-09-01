<?php
$vsetor = $_POST['setor'];
$vnome = $_POST['nome'];
$vtelefone = $_POST['telefone'];
$vequipamento = $_POST['equipamento'];
$vpatrimonio = $_POST['patrimonio'];
$vrelatado = $_POST['relatado'];
$vtecnico = $_POST['tecnico'];
$vconstatado = $_POST['constatado']; 
$vrealizado = $_POST['realizado'];
$vsituacao = $_POST['situacao'];
$vcriado_em = $_POST['entrada'];
$vfechado_em = $_POST['saida'];

$idConsulta = $_GET['id'];

//instância
$db = new PDO("sqlite:banco.db");

//insere os dados
$sqlI = "UPDATE os SET setor='$vsetor', nome='$vnome', telefone='$vtelefone', equipamento='$vequipamento', patrimonio='$vpatrimonio', relatado='$vrelatado', tecnico='$vtecnico', constatado='$vconstatado', realizado='$vrealizado', situacao='$vsituacao', criado_em='$vcriado_em', fechado_em='$vfechado_em' WHERE id='$idConsulta'";

$stmt = $db->exec($sqlI);

echo "<h1>Atualizado com sucesso!</h1> <br><br><A HREF='./consultar_os.php'><B> >>> Clique aqui para Voltar <<<</B></A>";


?>