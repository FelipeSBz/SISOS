<?php
//instância
$db = new PDO("sqlite:banco.db");

//cria a tabela
$sqlC = "CREATE TABLE colunistas ( id INTEGER PRIMARY KEY, nome TEXT)";
$db->exec($sqlC);

//insere os dados
$sqlI = "INSERT INTO colunistas (id, nome) VALUES (NULL, 'Júlio César Martini')";
$stmt = $db->exec($sqlI);

//visualiza
foreach ($db->query("SELECT id, nome FROM colunistas") as $row) {
print_r($row);
echo "<br>";
}
?>