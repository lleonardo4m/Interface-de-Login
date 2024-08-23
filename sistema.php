<?php
session_start();
//print_r($_SESSION);
if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true))
{
    unset($_SESSION['nome']);
            unset($_SESSION['senha']);                
    header('location: login.php');
}
$logado = $_SESSION['nome'];
?>

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
        }

        a{
            color: black;
            text-decoration: none;
            transition: 0.3s;
        }

        a:hover{
            opacity: 0.7;
        }

        .logo{
            font-size: 24px;
            text-transform: uppercase;
            font-family: cursive;
        }

        nav{
            display: flex;
            justify-content: space-around;
            align-items: center;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            height: 8vh;
            border: solid, 1px,rgb(50, 255, 95);
        }
        .nav-list{
            list-style: none;
            display: flex;
        }
        .nav-list li{
            letter-spacing: 3px;
            margin-left: 32px;
        }
        .mobile-menu div{
            width: 32px;
            height: 2px;
            background: black;
            margin: 8px;
            cursor: pointer;
        }
        @media (max-width: 999px){
            body{
                overflow-x: hidden;
            }
            .nav-list{
                position: absolute;
                top: 8vh;
                right: 0;
                width: 50vw;
                height: 92vh;
                flex-direction: column;
                align-items: center;
                justify-content: space-around;
                transform: translateX(100%);
        }

        .nav-list li {
            margin-left: 0;
            opacity: 0;
        }

        .mobile-menu {
            display: block;
        }

        .nav-list.active {
            transform: translateX(0);
        }

        }
    </style>
</head>
<body>

<header>
    <nav>
        <a class="logo" href="/">Resenhando</a>
        
        <div class="mobile-menu">

            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>

        </div>
        
        <ul class="nav-list">
            <li><a href="/">Inicio</a></li>
            <li><a href="/">Sobre</a></li>
            <li><a href="/">Projetos</a></li>
            <li><a href="/">Contato</a></li>

        </ul>

    </nav>

</header>

<script src="mobile-navbar.js"></script>

</body>

</html>