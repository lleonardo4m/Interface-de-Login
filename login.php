<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resenhando|Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(50, 255, 95), rgb(0, 238, 255));
        }
        .login{
            background-color: rgba(0 ,0 , 0, 0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 50px;
            border-radius: 10%;
            color: white;
        
        }
        .usuario{
            padding: 15px;
            border: none; 
            outline: none;
            font-size: 15px;
        }
        .senha{
            padding: 15px;
            border: none; 
            outline: none;
            font-size: 15px;
        }
        .logo{
            text-align: center;
            font-family: cursive;
            font-size: 50px;            
        }
        .InputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            outline: none;
            font-size: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
        }
        .InputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
            transform: scale(1.05);
           transition: .6s;
        }
        .voltar{
            background-color: rgba(0 ,0 , 0, 0.8);
            text-decoration: none;
            padding: 5px;
            border-radius: 5px;
            color: white;
            font-size: 15px;
        }
    </style>
</head>
<body>
    <a href="home.php" class="voltar">Voltar</a>
    <div class="logo">
        <b><p>Resenhando </b></p> 
    </div>
    <div class="login">
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
         <input type="text" name="nome" placeholder="Nome de usuário" style="border-radius: 5px;" class="usuario">
         <br><br>
         <input type="password" name="senha" placeholder="Senha" style="border-radius: 5px;" class="senha">
         <br><br>
         <input class="InputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>