<!--
COM231 - BANCO DE DADOS II
Atividade SQL Injection
Flávio Mota Gomes - 2018005379
Rafael Antunes Vieira - 2018000980
-->
<?php
// Inicia a sessão.
session_start();

// Pegando os dados de login enviados.
$usuario = $_POST['user'];
$senha = $_POST['pass'];

/* Conectando com o banco de dados para cadastrar registros */

$datasource = 'pgsql:host= COLOQUE O HOST; port=COLOQUE A PORTA ;dbname=sqlinjection';
$user = 'COLOQUE O USUARIO';
$pass = 'COLOQUE A SENHA';
$db = new PDO($datasource, $user, $pass);
	
$query = "SELECT * FROM cliente WHERE nome='$usuario' AND senha='$senha'";
$stm = $db->prepare($query);
$stm->execute();

if($stm->rowCount()>0){
    //Login efetuado com sucesso
    print "<p> Login efetuado com sucesso </p>";
    print "<a href='index.php'>Voltar</a>";
} else {
	// Caso usuário ou senha estejam incorretos.
	print "<p>Usuario e/ou Senha Invalidos!</p>";
	print "<a href='index.php'>Voltar</a>";
}

?>
