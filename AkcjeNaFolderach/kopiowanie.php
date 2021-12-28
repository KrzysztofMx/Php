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
        <div class="box-form">
            <form class="grid-in" action="kopiowanie.php" method="post">
                <input class="btn1" type="submit" name="submit"  value="Kopiuj plik tworz_katalog.php" />
                <input class="btn2" type="submit" name="clear"  value="Wyczyść" />
            </form> 
        </div>     
        <?php 
            if (!isset($_POST['submit'])) exit; 
                    echo '<div class="box-wysw"><p>';
                
                if(!copy('tworz_katalog.php','kat1/kat2/tworz_katalog_kopia.php')){
                    echo 'Wystąpiły błędy podczas kopiowania pliku';
                }else{
                    echo 'Operacja kopiowania zakończona sukcesem';
                }
                echo '</p></div>';
        ?>
    </div>
</body>
</html>