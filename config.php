

<?php
$dbHost = "localhost";
$dbName = "listagem de usuarios";
$dbUsername = "root";
$dbPassaword = "";

$conn = mysqli_connect($dbHost, $dbUsername, $dbPassaword, $dbName);

if (!$conn) {
    die("ERRO" . mysqli_connect_error());
}
echo "Conexão efetuada com sucesso";

//submit agora.

if(isset($_POST['submit']))
{

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$estado = $_POST['estado'];

$result = mysqli_select_db($conn, "INSERT INTO 'usuarios'('nome','cpf','email','telefone','cep','endereco','numero','complemento','bairro','estado')
Values ('$nome','$cpf','$email','$telefone','$numero','$complemento','$bairro','$estado')"); 
}

$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}

else
{
	echo "Are you a genuine visitor?";
	
}

?>

