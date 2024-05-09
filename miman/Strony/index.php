<?php
session_start();
if (isset($_GET['akcja']) && $_GET['akcja'] == 'wyloguj') { //sprawdzanie czy kliknięto "wyloguj"
	unset($_SESSION['zalogowany']); //rozłaczenie sesji
}
//łączenie

$conn = new mysqli("localhost", "root", "", "miman");
    $sql = 'SELECT * FROM uzytkownicy';
    $wynik = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miman</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico">
    <style>
    body{
        background-image: url('https://i.pinimg.com/originals/87/7c/c3/877cc368116f3acb5993d70513a115a5.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    #content img {
        width: 200px;
        height: 200px;
        margin: 7px;
        border-radius: 10px;
        opacity: 0.89;
    }

    #content img:hover {
        opacity: 0.95;
    }
    </style>
</head>

<body class="bg-image"> 
    <div id="navbar">
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="index.php">
                <img src="logo.png" width="40" height="40" class="d-inline-block align-top" alt="">
                iman
            </a>
            <form class="form-inline" method="post" action="szukanie.php">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"
                    name="szukaj">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>


            </form>
            <?php 
                if (!isset($_SESSION['zalogowany'])) { //wyświetlenie przycisków do logowania, gdy nikt nie jest zalogowany
            ?>
            <div>
                <a href="logowanie.php"><button type="button" class="btn btn-primary" value="login">Login</button></a>
                <a href="rejestracja.php"><button type="button" class="btn btn-success"
                        value="Register">Register</button></a>
            </div>
            <?php
            } else {
                echo "<div>";
                echo "Zalogowano jako: ".$_SESSION['zalogowany']."  ";
                if($_SESSION['ranga']>=1){
                echo "<a href='Dodawanie.php'><input type='button' class='btn btn-outline-dark' value='Dodaj grę'></a>";
                }
                echo "<a href='logowanie.php?akcja=wyloguj'><input type='button' class='btn btn-outline-danger' value='Wyloguj'></a>";
                echo "</div>";
            }
            ?>
        </nav>
    </div>
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <?php 
                    $sql = 'SELECT * FROM gry order by id_gry DESC';
                    $wynik = mysqli_query($conn,$sql);
                    if(isset($_SESSION['zalogowany'])&&!empty($_SESSION['zalogowany'])){
                        while($tab=mysqli_fetch_assoc($wynik))
                        {
                            echo "<a href='gra.php?id=".$tab['id_gry'] ."&idusera=".$_SESSION['id']."'><img id='ikonka' src='".$tab['ikonka']."' id='".$tab['id_gry']."'></a>";
                        }}
                    else
                    {
                        while($tab=mysqli_fetch_assoc($wynik))
                        {
                            echo "<a href='gra.php?id=".$tab['id_gry']."'><img id='ikonka' src='".$tab['ikonka']."' id='".$tab['id_gry']."'></a>";
                        } 
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div id="footer"></div>
    <header></header>

</body>
</html>