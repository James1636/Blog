<?php 
  //Inicia a sessão
  session_start();  
?>
<!DOCTYPE html>
  <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>

        <!-- Google Icon Font -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- materialize.css -->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!-- CSS Customizado -->
        <link rel="stylesheet" href="css/customizado.css">
        
        <!-- viewport para mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
    body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

    main {
    flex: 1 0 auto;
  }
  h1 {
    text-align: center;
    margin-left: 10%;
  }

  h2 {
    text-align: center;
  }


    </style>
    </head>

    <body>
        <header>
  <nav class="blue">
        <div class="nav-wrapper">
            <a href="inicial.html" class="brand-logo"> KT Dogs</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="b_index.php">Inicial</a></li>
                <li><a href="b_sobre.php">Sobre</a></li>
                <li><a href="b_login.php">Logar</a></li>
            </ul>
        </div>
    </nav>
</header>