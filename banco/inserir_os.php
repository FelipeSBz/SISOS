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

//instância
$db = new PDO("sqlite:banco.db");

//insere os dados
$sqlI = "INSERT INTO os (setor, nome, telefone, equipamento, patrimonio, relatado, tecnico, constatado, realizado, situacao, criado_em, fechado_em, cancelado) 
		VALUES ('$vsetor', '$vnome', '$vtelefone', '$vequipamento', '$vpatrimonio', '$vrelatado', '$vtecnico', '$vconstatado', '$vrealizado', '$vsituacao', '$vcriado_em', '$vfechado_em', 0 )";
$stmt = $db->exec($sqlI);

echo "Cadastrado com sucesso!";
?>