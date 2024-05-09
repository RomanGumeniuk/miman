<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja - Miman</title>
    <link rel="stylesheet" href="style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="script.js"></script>
    <style>
        .login, .haslo, .email{
            height: 40px;
            width: 300px;
            padding: 7px;
            border-radius: 10px;
            font-size: 24px;
        }
        .opis{
            font-size: 23px;
        }
        h1{
            text-align: center;
        }
        .subm{
            height: 40px;
            width: 300px;
            border-radius: 10px;
            transition: 0.3s;
            background-color: rgb(40,167,69);
            color: white;
            font-size: 22px;
        }
        .subm:hover{
            transition: 0.3s;
            background-color: rgb(33,136,56);
            cursor: pointer;
        }

        .okno{
            text-align: center;
            height: 470px;
            width: 400px;
            padding: 20px;
            background-color: white;
            opacity: 95%;
            border-radius: 20px;
        }

        .komunikat p{
            padding: 10px;            
        }

        .komunikat{
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
                    <input class="form-control mr-sm-2" type="search" name="szukaj" placeholder="Search"
                        aria-label="Search">
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

        </div>

        <div id="content" class="d-flex align-items-center justify-content-center">
            <div>
                <div >
                    <div  class="col-sm">
                        <div class="okno">
                            <form action="rejestracja.php" method="post">
                                <h1>Rejestracja</h1><br>
                                <input type="text" name="login" class=login placeholder="Login"><br><br>
                                <input  type="email" name="email" class=email placeholder="Email"><br><br>
                                <input type="password" name="haslo" class=haslo placeholder="Hasło"><br><br>
                                <input type="submit" value="Zarejestruj" class="subm" name="button"><br><br>
                            </form>
                            <p class="opis">Kontynuuj jako <a href="index.php">Gość</a>.<br>Masz już konto?
                            <a href="logowanie.php">Zaloguj się!</a></p>
                        </div><br>
                        <div class='komunikat'>
                        <b>
                        <?php
                        if(isset($_POST['button'])){

                            if(isset($_POST['login'])&&isset($_POST['email'])&&isset($_POST['haslo'])&&!empty($_POST['login'])&&!empty($_POST['email'])&&!empty($_POST['haslo'])){
                                $login = $_POST['login'];
                                $email = $_POST['email'];
                                $haslo = $_POST['haslo'];
                                $conn = new mysqli("localhost", "root", "", "miman");
                                $sql = "SELECT login FROM uzytkownicy WHERE login='{$login}'";
                                $result = mysqli_query($conn,$sql) or die("Query unsuccessful");
                                if (mysqli_num_rows($result) > 0) {
                                    echo "<p>Użytkownik już istnieje</p>";
                                } else {
                                    mysqli_query($conn,"set charset utf8") or die ("Błądzapytania");
                                    $sql = 'INSERT INTO `uzytkownicy`(`login`, `haslo`, `email`, `ranga`) VALUES ("'.$login.'","'.$haslo.'","'.$email.'",0)';
                                    if($conn->query($sql) === TRUE){
                                    echo "<p>Zarejestrowano pomyślnie, <br>teraz możesz się zalogować!<p>";
                                    }else{
                                    echo "Error: ".$sql."<br>".$conn->error;
                                    }
                                
                                }
                            }
                        }
                        ?>
                        </b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer"></div>


    </body>

</html>

</body>

</html>