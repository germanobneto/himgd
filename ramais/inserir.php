<?php
$nome = $_GET["txtNome"];
$ramal = $_GET["txtRamal"];
$cracha = $_GET["txtCracha"];
$departamento = $_GET["departamento1"];
$cargo = $_GET["cargo1"];
$sexo = $_GET["rdSexo"];
$conexao = mysql_connect("localhost", "root", "abc.123");
$banco = mysql_select_db("ramal");
$sql_insert_tb_funcionario = "insert into tb_funcionario  (fun_nome, fun_cracha, fun_sexo,id_dept,id_cargo,id_ram)

                                                                                                values ('$nome',$cracha,'$sexo',$departamento,$cargo,$ramal)";
$resultado = mysql_query($sql_insert_tb_funcionario, $conexao);

if ($resultado)
	{
	$numeroRegistros = mysql_affected_rows($conexao);
	echo "Comando executado com sucesso. ";
	echo "Foram afetados $numeroRegistros registros.";
	}
  else
	{
	echo "Falha ao executar comando.";
	}

mysql_close($conexao);
?>
