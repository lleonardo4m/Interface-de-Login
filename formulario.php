<?php

if(isset($_POST['submit']))
{
    // print_r("Nome: ". $_POST['nome']);
    // print_r("<br>");
    // print_r("Email: ". $_POST['email']);
    // print_r("<br>");
    // print_r("Telefone: ". $_POST['telefone']);
    // print_r("<br>");
    // print_r("Sexo: ". $_POST['genero']);
    // print_r("<br>");
    // print_r("Data de nascimento: ". $_POST['data_nascimento']);
    // print_r("<br>");
    // print_r("Cidade: ". $_POST['cidade']);
    // print_r("<br>");
    // print_r("Estado: ". $_POST['estado']);
    // print_r("<br>");
    // print_r("Endereço: ". $_POST['endereco']);
    // print_r("<br>");

    include_once('config.php');
    
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,genero,data_nasc)
    VALUES ('$nome','$senha','$email','$telefone','$genero','$data_nasc')");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resenhando | Formulário</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(50, 255, 95), rgb(0, 238, 255));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
        border: 3px solid rgb(50, 255, 95);
        }
        legend{
            border: 1px solid rgb(50, 255, 95);
            padding: 10px;
            text-align: center;
            background-color: rgb(50, 255, 95);
            border-radius: 8px;
        }
        h1{
            text-align: center;
            font-size: 50px;
            font-family: cursive;
        }
        .voltar{
            background-color: rgba(0 ,0 , 0, 0.8);
            text-decoration: none;
            padding: 5px;
            border-radius: 5px;
            color: white;
            font-size: 15px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right, rgb(50, 255, 95), rgb(0, 238, 255));
            width: 100%;
            border: none;
            padding: 15px;
            border-radius: 8px;
            color: white;
            font-size: 15px;
        } 
        #submit:hover{
            background-image: linear-gradient(to right, rgb(45, 218, 82), rgb(4, 197, 211));
            cursor: pointer;
            transform: scale(1.05);
           transition: .6s;
        }
    </style>
</head>
<body>
    <a href="home.php" class="voltar">Voltar</a>
    <h1>Resenhando</h1>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Registar-se</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome de usuário</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" class="data_nascimento" required>
                <br><br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>