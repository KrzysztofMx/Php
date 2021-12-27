<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="usun_plik.php" method="post">
        <input type="submit" name="submit"  value="Usuń plik tworz_katalog_kopia.php" />
        <input type="submit" name="clear"  value="Wyczyść" />
    </form>
    <br />
<?php 
    if (!isset($_POST['submit']))exit;
    
        if (!file_exists('kat1/kat2/tworz_katalog_kopia.php')){
            echo'plik nie istnieje!';

        }else if (!unlink('kat1/kat2/tworz_katalog_kopia.php')){
            echo 'Wystąpiły błędy podczas usuwania pliku';

        }else{ 
            echo 'Plik został usunięty'; 
        }
    
?> 
        
</body>
</html>