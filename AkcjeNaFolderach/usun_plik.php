<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="box">
        <div class="box-menu">
            <a href="tworz_katalog.php"><p>Utwóż Katalog</p></a>
            <a href="lista.php"><p>Lista Plików</p></a>
            <a href="kopiowanie.php"><p>Kopiowanie</p></a>
        </div>
        <div class="box-inst">
            <b>INSTRUKCJA</b>
            <ol class="box-list">
                <li><p></p>Utworz Katalog</p></li>
                <li><p>Kopiuj Plik</p></li>
                <li><p>Usun Plik</p></li>
            </ol>
        </div>
        <div class="box-form">
            <form class="grid-in" action="usun_plik.php" method="post">
                <input class="btn1" type="submit" name="submit"  value="Usuń plik tworz_katalog_kopia.php" />
                <input class="btn2" type="submit" name="clear"  value="Wyczyść" />
            </form>
        </div>
<?php 
    if (!isset($_POST['submit']))exit;
            echo '<div class="box-wysw"><p>';
        if (!file_exists('kat1/kat2/tworz_katalog_kopia.php')){
            echo'plik nie istnieje!';

        }else if (!unlink('kat1/kat2/tworz_katalog_kopia.php')){
            echo 'Wystąpiły błędy podczas usuwania pliku';

        }else{ 
            echo 'Plik został usunięty'; 
        }
        echo '</div></p>';
?> 
        
</body>
</html>