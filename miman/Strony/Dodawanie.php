<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodawanie gry</title>
    <link rel="stylesheet" href="style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    .login,
    .haslo,
    .email {
        height: 40px;
        width: 300px;
        padding: 7px;
        border-radius: 10px;
        font-size: 24px;
    }

    .opis {
        font-size: 23px;
    }

    h1 {
        text-align: center;
    }

    .subm {
        height: 40px;
        width: 300px;
        border-radius: 10px;
        transition: 0.3s;
        background-color: rgb(40, 167, 69);
        color: white;
        font-size: 22px;
    }

    .subm:hover {
        transition: 0.3s;
        background-color: rgb(33, 136, 56);
        cursor: pointer;
    }

    .okno {
        text-align: center;
        height: 470px;
        width: 400px;
        padding: 20px;
        background-color: white;
        opacity: 95%;
        border-radius: 20px;
    }

    .komunikat p {
        padding: 10px;
    }

    .komunikat {
        text-align: center;
        height: auto;
        width: 400px;
        background-color: white;
        opacity: 95%;
        border-radius: 20px;
        font-size: 18px;
    }
    </style>
</head>

<body>

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
                    <a href="logowanie.php"><button type="button" class="btn btn-primary"
                            value="login">Login</button></a>
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
            <div id="content" class="d-flex align-items-center justify-content-center">
                <div>
                    <div>
                        <div class="col-sm">
                            <div class="okno">
                                <h2>Wprowadzanie Gry</h2>
                                <form method="post">
                                    <p>Nazwa: <input type="text" name="nazwa"></p>
                                    <p>Link: <input type="text" name="link"></p>
                                    <p>Gatunek: <input type="text" name="gatunek"></p>
                                    <p>Ikonka: <input type="text" name="ikonka"></p>
                                    <input type="submit" value="Gotowe">
                                </form><br>
                                <a href="index.php"><input type="button" value="Powrót"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php

        if(isset($_POST['nazwa'])&&isset($_POST['link'])&&isset($_POST['gatunek'])&&isset($_POST['ikonka'])){
            $nazwa = $_POST['nazwa'] ;
            $link = $_POST['link']; 
            $gatunek = $_POST['gatunek'];   
            $ikonka = $_POST['ikonka']; 
            $conn = new mysqli("localhost", "root", "", "miman");
            mysqli_query($conn,"set charset utf8") or die ("Błądzapytania");
            $sql = 'INSERT INTO `gry`(`nazwa`, `link`, `gatunek`, `ikonka`) VALUES ("'.$nazwa.'","<iframe src="'.$link.'" style=width: 100%; height: 100%; frameborder=0></iframe>","'.$gatunek.'","'.$ikonka.'")';
            if($conn->query($sql) === TRUE){
                echo "Pomyślnie dodano gre";
            }else{
                echo "Error: ".$sql."<br>".$conn->error;
            }
        }
    ?>
    </body>

</html>