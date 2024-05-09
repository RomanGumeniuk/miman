<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodawanie komentarzy</title>
    <link rel="stylesheet" href="style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div id="navbar">
        </nav>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="index.php">
                <img src="logo.png" width="40" height="40" class="d-inline-block align-top" alt="">
                iman
            </a>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Szukaj" aria-label="Search"
                    id="szukanie">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Szukaj</button>
            </form>
        </nav>

    </div>
    <div id="logo"></div>
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                </div>
            </div>
        </div>
    </div>
    <h2>Wprowadzanie komentarza</h2>
    <form method="post">
        <p>id_gry: <input type="text" name="id_gry"></p>
        <p>id_usera: <input type="text" name="id_usera"></p>
        <p>komentarz: <input type="text" name="komentarz"></p>
        <p>ilosc_lajkow: <input type="text" name="ilosc_lajkow"></p>
        <input type="submit" value="Gotowe">
    </form><br>
    <a href="index.php"><input type="button" value="Powrót"></a>
    <?php

        if(isset($_POST['id_gry'])&&isset($_POST['id_usera'])&&isset($_POST['komentarz'])&&isset($_POST['ilosc_lajkow'])){
            $id_gry = $_POST['id_gry'] ;
            $id_usera = $_POST['id_usera']; 
            $komentarz = $_POST['komentarz'];   
            $ilosc_lajkow = $_POST['ilosc_lajkow']; 
            $conn = new mysqli("localhost", "root", "", "miman");
            mysqli_query($conn,"set charset utf8") or die ("Błądzapytania");
            $sql = "INSERT INTO komentarze(id_gry,id_usera,komentarz,ilosc_lajkow) VALUES ($id_gry,$id_usera,'$komentarz',$ilosc_lajkow)";
            if($conn->query($sql) === TRUE){
                echo "Pomyślnie dodano komentarz";
            }else{
                echo "Error: ".$sql."<br>".$conn->error;
            }
        }
    ?>

</body>

</html>