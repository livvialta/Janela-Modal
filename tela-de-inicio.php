<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style> 

    body{ 
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(to right, #00FFED,#A32CDF);
        text-align:center;
     
    }
   .box{
       position: absolute;
       top: 50%;
       left: 50%;
       transform: translate(-50%,-50%);
       background-color: rgba(0,0,0,0.9);
       padding: 30px;
       border-radius: 10PX;
      
   }
   
   a{
       text-decoration: none;
       color: whitesmoke;
       border: 3px solid  #0C7BB3;
       padding: 7px;
       border-radius: 10px;
       
   }

   a:hover{
      background-color: dodgerblue;
   }

   .voltar{
    
       color: whitesmoke;
       font-size:20px;
    
   }


       

    </style>
</head>
<body>

    <div class="box">
        <a href="tela-de-login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>
</body>
</html>