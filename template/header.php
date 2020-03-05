<?php
require_once('core/config.php');
require_once('core/functions.php');
$conn = connect ();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="shortcut icon" href="./image/Lightning.png" type="image/png">
    <title>Electro-Ug</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>   
    <div class="main">
        <header>
            <div class="container-fluid">
            <div class="navbar-fixed">
                    <nav>
                        <div class="nav-wrapper #4db6ac teal lighten-2">
                        <a href="./"><img class="header__logo__img" src="./image/Light_bulb.png" alt=""></a>
                            <a href="./" class="brand-logo header__logo">Electro-Ug</a>				
                            <a href="./" data-target="mobile-demo" class="sidenav-trigger"><i class="large material-icons">menu</i></a>
                            <ul class="right hide-on-med-and-down">
                                <li class="header__contacts">8 (918) 159 93 93</li>
                                <li><a href="./about.php">О нас</a></li>
                                <li><a href="./portfolio.php">Наши работы</a></li>
                                <li class="send__app">Оставить заявку</li>
                                <li><a href="#"><img class="header__link" src="./image/Instagram.png" alt=""></a></li>
                            </ul>                    
                        </div>
                    </nav>    
                </div>
                <ul class="sidenav" id="mobile-demo">
                    <li><a href="./" >Electro-Ug</a></li>
                    <li><a href="#">8 (918) 159 93 93</a></li>
                    <li><a href="./about.php">О нас</a></li>
                    <li><a href="./portfolio.php">Наши работы</a></li>
                    <li><a href="./form-mob.php" class="send__app-mob">Оставить заявку</a></li>
                    <li><a href="#"><img class="header__link" src='./image/Instagram.png' alt=''></a></li>
                </ul>	
            </div>
        </header>            
        <div class="container-fluid #eceff1 blue-grey lighten-5">
            <div class="col l12">
                <div class="container center-align"> 
                    <p class="header-info">Выполним любые виды работ по электрике в Краснодаре и Краснодаском крае!</p>  
                </div>         
            </div>         
        </div>

        