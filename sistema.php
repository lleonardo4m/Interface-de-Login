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

        box-sizing: border-box;
    }

    header{
        width: 100%;
        height: 50px;

        background: linear-gradient(to right,#32ff5f, rgb(0, 238, 255));
        
        display: flex;
        justify-content: center;
        box-shadow: 1px 0 3px rgba(0, 0, 0, 0.4);
    }

    body{       
        background: #fbfbfb;
        font-family: "roboto";

        -webkit-font-smoothing: antialiased !important;
    }

    li{
        list-style: none;
    }

    .btnImg {
        height: 20px;
    }

    .main{
        max-width: 900px;
        margin: 0 auto;
    }

    div.newPost{
        width: 100%;
        height: 240px;

        display: flex;
        flex-direction: column;
        align-items: flex-start;
        margin: 50px 0;
        padding: 25px;

        background: #fff;
        border-radius: 10px;
        box-shadow: 1px 0 3px rgba(0, 0, 0, 0.2);
    }

    div.inforUser {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    div.imgUser {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        background: #333;
    }

    .nameAndHour_me{
        font-size: 16px;

        color:#727272;
        margin-left: 10px;
    }

    h1{
        font-family: cursive;
    }

    .formPost{
        display: flex;
        flex-direction: column;
        width: 100%;
    }
    .formPost textarea{
        height: 90px;
        background: #fbfbfb;
        margin: 15px 0;
        padding: 25px;
        border-radius: 10px;
        resize: none;
        border: 0;
        outline: none;
        box-shadow: 1px 0 3px rgba(0, 0, 0, 0.4);
        
        font-weight: bold;
        font-family: 'roboto';
        color: #727272;
    }

    .iconsAndButton{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .icons{
        width: 50px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    div.icons button{
        display: flex;
        align-items: center;
        justify-content: center;
        outline: none;
        border: none;
        margin-right: 15px;

        background: #fff;
        cursor: pointer;
    }

    .btnSubmitForm{
        background: #32ff5f;
        padding: 10px 50px;
        color: #fff;
        font-weight: bold;
        outline: none;
        cursor: pointer;
        border: none;
        border-radius: 10px;
        box-shadow: 1px 0 3px rgba(0, 0, 0, 0.4);
    }

    .btnSubmitForm:hover{
        background-color:rgb(30, 229, 73);
        transform: scale(1.05);
        transition: .6s;
    }

    li.post{
        margin-bottom: 50px;
        background: #fff;
        border-radius: 10px;
        padding: 25px;
        width: 100%;
        box-shadow: 1px 0 3px rgba(0, 0, 0, 0.1);
    }

    .inforUserPost{
        display: flex;
        align-items: center;
    }

    .nameAndHour{
        margin-left: 10px;
    }

    .imgUserPost{
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: #727272;
    }

    .nameAndHour_user{
        color: #727272;
    }

    .nameAndHour p{
        color: #D1D1D1;
        font-size: 12px;
    }

    .comentario{
        width: 100%;
        margin: 20px 0;
        font-weight: bold;
        color: #727272;
    }

    .filesPost{
        box-shadow: 1px 0 3px rgba(0, 0, 0, 0.4);
        border: none;
        outline: none;
        cursor: pointer;
        margin-right: 10px;
        padding: 5px 20px;
        border-radius: 10px;
        font-size: 16px;
        font-weight: bold;
        transition: background 0.2s;
        color: #fff;
    }

    .like{
        background-color:#fd4747;
    }

    .like:hover{
        background-color:#9c0101;
    }

    .coment{
        background: #ffc320 ;
    }

    .coment:hover{
        background:#cc9500 ;
    }

    .share{
        background: #23A0ff;
    }

    .share:hover{
        background:#0091ff;
    }
    </style>
</head>
<body>

    <header>
        <h1>Resenhando</h1>
    </header>
    
    <main class="main">

        <div class="newPost">
            <div class="inforUser">
                <div class="imgUser"></div>
                <strong class="nameAndHour_me">Leonardo</strong>
            </div>

            <form action="" class="formPost">
                
                <textarea name="textarea" placeholder="O que você esta pensando?"></textarea>
                <div class="iconsAndButton">
                    <div class="icons">
                        <button class="btnFileForm"><img src="img/img.png" alt="Adicionar uma imagem" class="btnImg"></button>
                        <button class="btnFileForm"><img src="img/cam.png" alt="Adicionar um video" class="btnImg"></button>
                    </div>

                    <button type="submit" class="btnSubmitForm">Publicar</button>
                </div>
            </form>
        </div>

        <ul class="posts">
            <li class="post">
                <div class="inforUserPost">
                   <div class="imgUserPost"></div> 

                   <div class="nameAndHour">
                    <strong class="nameAndHour_user">Usuario</strong>
                    <p>21h</p>
                   </div>
                </div>

                <p class="comentario">
                    TEXTO ALEATORIO
                </p>

                <div class="actionBtnPost">
                    <button type="button" class="filesPost like">curtir</button>
                    <button type="button" class="filesPost coment">comentar</button>
                    <button type="button" class="filesPost share">compartilhar</button>
                </div>
            </li>

            <li class="post">
                <div class="inforUserPost">
                   <div class="imgUserPost"></div> 

                   <div class="nameAndHour">
                    <strong class="nameAndHour_user">Usuario</strong>
                    <p>21h</p>
                   </div>
                </div>

                <p class="comentario">
                    TEXTO ALEATORIO TEXTO ALEATORIO TEXTO ALEATORIO TEXTO ALEATORIO TEXTO ALEATORIO
                </p>

                <div class="actionBtnPost">
                    <button type="button" class="filesPost like">curtir</button>
                    <button type="button" class="filesPost coment">comentar</button>
                    <button type="button" class="filesPost share">compartilhar</button>
                </div>
            </li>

            <li class="post">
                <div class="inforUserPost">
                   <div class="imgUserPost"></div> 

                   <div class="nameAndHour">
                    <strong class="nameAndHour_user">Usuario</strong>
                    <p>21h</p>
                   </div>
                </div>

                <p class="comentario">
                    TEXTO ALEATORIO TEXTO ALEATORIO TEXTO ALEATORIO TEXTO ALEATORIO TEXTO ALEATORIO TEXTO ALEATORIO
                    TEXTO ALEATORIO TEXTO ALEATORIO TEXTO ALEATORIO TEXTO ALEATORIO TEXTO ALEATORIO
                </p>

                <div class="actionBtnPost">
                    <button type="button" class="filesPost like">curtir</button>
                    <button type="button" class="filesPost coment">comentar</button>
                    <button type="button" class="filesPost share">compartilhar</button>
                </div>
            </li>
        </ul>
    </main>
</body>
</html>