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
    <title>Miman Games</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico">
    <Style>
    body {
        background-image: url('https://i.pinimg.com/originals/87/7c/c3/877cc368116f3acb5993d70513a115a5.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    #tak,
    #komentarz {
        font-size: 25px;
    }

    #tez {
        font-size: 20px;
    }

    #uzytkownik {
        font-weight: bold;
        padding-left: 72px;
    }

    #data {
        color: gray;
        font-size: 16px;
        font-weight: 400;
        padding-left: 42px;
    }

    #komentar {
        padding-left: 50px;

    }

    #koment {
        padding: 20px;
        padding-top: 10px;
        background-color: rgba(241, 250, 250, 0.671);
        font-size: 25px;
        border-radius: 80px;
    }

    #profile {
        width: 40px;
        height: 40px;
        margin-right: 7px;

    }
    </Style>
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
        <div id="logo"></div>
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <?php
                        $id=$_GET['id'];
                        $conn = new mysqli("localhost", "root", "", "miman");
                        $sql = 'SELECT * FROM `gry` WHERE `id_gry` ="'.$id.'"';
                        $wynik = mysqli_query($conn,$sql);

                        while($tab=mysqli_fetch_assoc($wynik)){
                            echo "<div>".$tab['link']."</div>";

                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
            <br><br><br><br><br>
            
        </div>
        <div id="koment">
        <?php 
        if (isset($_SESSION['zalogowany'])&&!empty($_SESSION['zalogowany'])){
        ?><br>
            <form class="form-inline" method="post">
                <p id="tak">Dodaj komentarz</p>
                <div id="komentarz" class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2" class="sr-only">Komentarz</label>
                    <input type="text" class="form-control" id="inputPassword2" name="komentarz"
                        placeholder="Komentarz">
                </div>
                <button type="submit" id="tez" class="btn btn-primary mb-2">Dodaj komentarz</button>
            </form>
            <?php
        }else{
            echo "<br><a href='logowanie.php'>Zaloguj się</a> lub <a href='rejestracja.php'>Zarejestruj</a> aby wstawić komentarz.<br>";}

             if(isset($_POST['komentarz'])){
                $komentarz = $_POST['komentarz'];
                $id_usera=$_GET['idusera'];
                $id=$_GET['id'];
                $ilosc_lajkow = 0; 
            
                $conn = new mysqli("localhost", "root", "", "miman");
                $sql = "SELECT komentarz FROM komentarze WHERE id_gry='{$id}' and komentarz='{$komentarz}'";
                $result = mysqli_query($conn,$sql) or die("Query unsuccessful");
                    if (mysqli_num_rows($result) > 0) {
                        echo "<p>Dodałeś już komentarz o tej treści</p>";
                    } else {
                        
                        mysqli_query($conn,"set charset utf8") or die ("Błądzapytania");
                        $datetime = date_create()->format('Y-m-d H:i:s');
                        $sql = "INSERT INTO komentarze(id_gry,id_usera,komentarz,ilosc_lajkow,data) VALUES ($id,$id_usera,'$komentarz',$ilosc_lajkow,'$datetime')";
                        if($conn->query($sql) === TRUE){
                            header('Location:  gra.php?id='.$id.'&idusera='.$id_usera);
                        }else{
                            echo "Wystąpił błąd";
                        }
                    }
            }
    $conn = new mysqli("localhost", "root", "", "miman")  ;
    $sql = "SELECT * FROM uzytkownicy inner join komentarze on uzytkownicy.id_usera=komentarze.id_usera  WHERE id_gry = '$id' order by id_komentarza DESC";
    
    $wynik = mysqli_query($conn,$sql) or die("Query unsuccessful");

    while($tab=mysqli_fetch_assoc($wynik)){
        $data = $tab['data'];
        echo "<br><div><img id='profile' src='https://www.freeiconspng.com/uploads/am-a-19-year-old-multimedia-artist-student-from-manila--21.png'<p id='uzytkownik'>".$tab['login']."<p id='data'>".$data."</p></p><p id='komentar'>".$tab['komentarz']."</div></p><br>";
    }
       
        ?>
        </div>
        <header></header>
        </div>
    </body>

</html>