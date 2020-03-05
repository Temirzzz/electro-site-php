<?php 
require_once('core/config.php');
require_once('core/functions.php');
$conn = connect();
$data = select($conn);
require_once('template/check.php');
$countPage = pagination_count ($conn);
close ($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="shortcut icon" href="./image/Lightning.png" type="image/png">
    <title>Electro-Ug</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>   

    <body>
    <div class="wrapper">
        <div class="content">
            <header class="container-fluid header">
                <div class="row">
                    <div class="container nav__container">
                        <nav class="navbar navbar-expand-lg navbar-dark header__nav">
                            <ul class="nav header__ul">                                
                                <li class="nav-item">
                                    <a href="./admin-create.php"><button class="btn btn-success">Добавить запись</button></a>
                                </li>
                                <li class="nav-item">
                                    <a href="./logout.php"><button class="btn btn-info">Выйти</button></a>
                                </li>
                            </ul>                            
                        </nav>
                    </div>
                </div>   
            </header>            
        </div>
    </div>