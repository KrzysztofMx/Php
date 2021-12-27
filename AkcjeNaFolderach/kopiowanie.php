<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="kopiowanie.php" method="post">
        <input type="submit" name="submit"  value="Kopiuj plik tworz_katalog.php" />
        <input type="submit" name="clear"  value="Wyczyść" />
    </form> 
        <br />  
<?php 
    if (!isset($_POST['submit'])) exit; 
        
        if(!copy('tworz_katalog.php','kat1/kat2/tworz_katalog_kopia.php')){
            echo 'Wystąpiły błędy podczas kopiowania pliku';
        }else{
            echo 'Operacja kopiowania zakończona sukcesem';
        }
    
?>
</body>
</html>