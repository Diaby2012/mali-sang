<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="site donneur de sang du mali, hôpital Gabriel Touré">
    <meta name="author" content="mali sang">
    <META NAME="keywords" CONTENT="don de sang, sang, mali, transfusion sanguin, groupe saguin, groupe A-,A+,B-,B+, AB-, AB, O-, O+, Hôpital gabriel touré, ministère de la santé du mali ">
    <link rel="icon" href="img/favicon.ico" />
    <title>Mali-Sang</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/freelancer.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script type="text/javascript" src="js/general.js"></script>
</head>
<body id="page-top" class="index">
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Mali-Sang</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <?php
                if (isset($_SESSION['numero_mobile']))
                {
                ?>
                <li class="page-scroll">
                        <a href="forum.php">Forum</a>
                </li>
                <li class="page-scroll">
                    <a href="profil.php">Profil</a>
                </li>
                    <button type="button" class="btn btn-default" aria-label="Align center">
                        <a href="logout.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span></a>
                    </button>
                <?php
                }
                else
                {
                ?>
                <li class="page-scroll">
                   <a href="#inscription">Inscription</a>
                </li>
                <button type="button" class="btn btn-default" aria-label="Align center">
                    <a href="login.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
                </button>
                <?php
                }
                ?>
                <li class="page-scroll">
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
