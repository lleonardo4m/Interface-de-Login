<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resenhando</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
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
            box-shadow: 1px 0 3px rgba(0, 0, 0, 0.8);
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
            color: white;
            font-family: cursive;
            font-size: 25px;
        }
        header{
            width: 100%;
            height: 50px;

            background-color: black;
    
            display: flex;
            justify-content: center;
            box-shadow: 1px 0 3px rgba(0, 0, 0, 0.4);
        }

        p{
            color: white;
            font-family:Arial, Helvetica, sans-serif ;
        }

    </style>
</head>
<body>
    
    <header>
    <h1>Resenhando</h1>
    </header>

    <div class="box">
        <b><a href="login.php">Entrar</a></b>
        <p>ou</p> 
        <b><a href="formulario.php">Registar-se</a></b>
    </div>
    
</body>
</html>