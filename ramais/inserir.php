<?php

$nome = $_GET["txtNome"];
$ramal = $_GET["txtRamal"];
$cracha = $_GET["txtCracha"];
$departamento = $_GET["txtDepartamento"];
$cargo = $_GET["txtCargo"];
$sexo = $_GET["rdSexo"];

$conexao = mysql_connect("localhost","root","abc.123");
$banco = mysql_select_db("ramal");


	$sql_insert_tb_funcionario = "insert into tb_funcionario  (fun_nome, fun_cracha, fun_sexo)

														values ('$nome',$cracha,'$sexo')";


	$sql_insert_tb_departamento = "insert into tb_departamento  (nome_dept)

														values ('$departamento')";


			$sql_insert_tb_cargo = "insert into tb_cargo  (car_nome)


									values ('$cargo')";


$resultado = mysql_query($sql_insert_tb_funcionario,$conexao);
if ($resultado){
	$numeroRegistros = mysql_affected_rows($conexao);
	echo "Comando executado com sucesso. ";
	echo "Foram afetados $numeroRegistros registros.";
}else{
  echo "Falha ao executar comando.";
}

$resultado2 = mysql_query($sql_insert_tb_departamento,$conexao);
if ($resultado){
	$numeroRegistros = mysql_affected_rows($conexao);
	echo "Comando executado com sucesso. ";
	echo "Foram afetados $numeroRegistros registros.";
}else{
  echo "Falha ao executar comando.";
}




$resultado3 = mysql_query($sql_insert_tb_cargo,$conexao);
if ($resultado){
	$numeroRegistros = mysql_affected_rows($conexao);
	echo "Comando executado com sucesso. ";
	echo "Foram afetados $numeroRegistros registros.";
}else{
  echo "Falha ao executar comando.";
}









mysql_close($conexao);
?>
