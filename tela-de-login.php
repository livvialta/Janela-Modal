<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
   <style>
       body{
           font-family: Arial, Helvetica, sans-serif;
           background-image: linear-gradient(45deg, #7339AB, #88F4FF);
       }
       div{
           background-color: rgba(0,0,0,0.9 );
           position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          padding: 80px;
          border-radius: 15px;
          color: white;
       }
       input{
           padding: 15px;
           border: none;
           outline: none;
           font-size: 15px;
       }
       .inputSubmit{
        height: 48px;
        width: 100%;
        padding-left: 8px;
        outline: none;
        position: relative;
        background-image:  linear-gradient(120deg, #7339AB, #00C2CB, #7339AB);
        background-size: 200%;
        margin-bottom: 32px;
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        border: unset;
        border-radius: 4px;
        cursor: pointer;
        transition: 0.5s ease;
       }
       .inputSubmit:hover{
  background-position: right;
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
    <div>
        
    <h1>Login</h1> <style> </style>
    <form action="testLogin.php" method="POST">
            <input type="email" name="email" placeholder="E-mail">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
</div>
</body>
</html>