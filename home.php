<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resenhando</title>
    <style>
        body{
            font-family:Arial, Helvetica, sans-serif ;
            background: linear-gradient(to right,rgb(50, 255, 95), rgb(0, 238, 255));
            text-align: center;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0 ,0 , 0, 0.8);
            padding: 50px;
            border-radius: 15px;
        }
        a{
            background-color: dodgerblue;
            text-decoration: none;
            color: white;
            border-radius: 10px;
            padding: 15px;
            font-size: 15px;
            margin: 10px;
            display: block;
        }
        a:hover{
           background-color: deepskyblue;
           transform: scale(1.05);
           transition: .6s;
        }
        h1{
            font-family: cursive;
            font-size: 50px;
        }

    </style>
</head>
<body>
    <h1>Resenhando</h1>
    <h2>Bem-Vindo</h2>
    <div class="box">
        <b><a href="login.php">Entrar</a></b> 
        <b><a href="formulario.php">Registar-se</a></b>
    </div>
    
</body>
</html>