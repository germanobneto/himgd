<?php

$nome = $_GET["txtNome"];
$ramal = $_GET["txtRamal"];
$cracha = $_GET["txtCracha"];
$departamento = $_GET["txtDepartamento"];
$cargo = $_GET["txtCargo"];
$sexo = $_GET["rdSexo"];

$conexao = mysql_connect("localhost","root","root");
$banco = mysql_select_db("ramal");


$sql_insert_tb_funcionario = "insert into tb_funcionario  (fun_nome, fun_cracha, fun_sexo)

														values ('$nome',$cracha, '$sexo')";






$resultado = mysql_query($sql_insert_tb_funcionario,$conexao);
if ($resultado){
	$numeroRegistros = mysql_affected_rows($resultado);
	echo "Comando executado com sucesso. ";
	echo "Foram afetados $numeroRegistros registros.";
}else{
  echo "Falha ao executar comando.";
}

mysql_close($conexao);
?>