<?php 

if(isset($_POST['submit']))
{

include_once('config.php');

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$estado = $_POST['estado'];


$result = mysqli_query($conexao, "INSERT INTO usuarios(nome,cpf,email,senha,telefone,cep,endereco,numero,complemento,bairro,estado)
VALUES ('$nome','$cpf','$email','$senha','$telefone','$cep','$endereco','$numero','$complemento','$bairro','$estado')");

header('location: tela-de-login.php');

}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="formulario.js"></script>
    <script type="text/php" src="config.php"></script>
    <title>Formulário</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, #0C7BB3, #F2BAE8);
        }
        
        .box {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        
        fieldset {
            border: 3px solid dodgerblue;
        }
        
        legend {
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        
        .inputBox {
            position: relative;
        }
        
        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        
   
        #submit{
            background-image: linear-gradient(to right, #0C7BB3, #F2BAE8);
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 18px;
            cursor: pointer;
            border-radius: 10px;
            transition: 0.5s ease;
        }
        
        #submit:hover{
            background-image: linear-gradient(to right, whitesmoke, dodgerblue);
        }
        
        a{
       color: whitesmoke;
       font-size:20px;
       text-decoration:underline;
    font-family: fantasy;
}
       
    </style>
</head>

<body>
<a href="tela-de-inicio.php">Voltar </a>
    <div class="box">
        <form method="post" action="formulario.php" >
            <fieldset>
                <legend><b> Formulário </b> </legend> <br>

                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome">Nome Completo</label>

                </div>
                <br> <br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" maxlength="11" onblur="TestaCPF(this.value)" class="inputUser" required>
                    <label for="cpf">CPF</label>

                </div>
                <br> <br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" onblur="validarEmail()" onfocus="redefinirMsg()" required />
                    <label for="email">E-mail</label>
                    <span id="error-email"></span>

                    <br> <br> <br>
                <div class="inputBox">
                    <input type="passaword" name="senha" id="senha" class="inputUser" required>
                    <label for="senha">Senha</label>

                </div>
                <br> <br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone">Telefone</label>

                </div>
                <br> <br>
                <div class="inputBox">
                    <input type="text" name="cep" id="cep" class="inputUser" required/>
                    <label for="cep">CEP</label>

                </div>
                <br> <br>
                <div>
                    <input type="text" name="endereco" id="endereco" class="inputUser" required/>
                    <label for="endereco">Endereço</label>

                </div>
                <br> <br>
                <div>
                    <input type="text" name="numero" id="numero" class="inputUser" required/>
                    <label for="numero">Número</label>

                </div>
                <br> <br>
                <div>
                    <input type="text" name="complemento" id="complemento" class="inputUser" />
                    <label for="complemento">Complemento</label>

                </div>
                <br> <br>
                <div>
                    <input type="text" name="bairro" id="bairro" type="text" class="inputUser" required/>
        <label for="bairro ">Bairro</label>

    </div>
    <br> <br>
    <div> 
    <input type="text" name="estado" id="estado" type="text" class="inputUser" required/>
        <label for="estado ">Estado</label>
		
    </div>
<br><br>

          <input type="submit" name="submit" id="submit">
            </fieldset>

        </fieldset>
    </form>
    </div>
 


</body>

</html>