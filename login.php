<?php
include_once('config.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {
    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu email";
    }   else if(strlen($_POST['senha']) == 0){
        echo "Preencha sua senha";
    }  else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM formulario_resenhando.usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução co codigo sql" . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

            $usuario = $sql_query->fetc_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: paginatest.php");
        } 
        else {
            echo "Error";
        }
        }
}  # code...
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resenhando|Login</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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
            text-align: center;
            font-family: cursive;
            font-size: 25px;
        }
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
            box-shadow: 1px 0 3px rgba(0, 0, 0, 0.8);
        
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

    <header>
    <p><strong>Resenhando</strong></p>
    </header>
    
    <a href="home.php" class="voltar">Voltar</a>

    <div class="login">
        <h1>Login</h1>
        <br>
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