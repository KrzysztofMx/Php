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
            <a href="kopiowanie.php"><p>Kopiowanie</p></a>
            <a href="lista.php"><p>Lista Plików</p></a>
            <a href="usun_plik.php"><p>Usuń Plik</p></a>
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
            <form class="grid-in" action="tworz_katalog.php" method="post">
                <input class="btn1" type="submit" name="submit"  value="Utwórz katalogi" />
                <input class="btn2" type="submit" name="clear"  value="Wyczyść" />
            </form>
        </div>   
         

    <?php 
        if(!isset($_POST['submit'])) exit;{
            echo '<div class="box-wysw"><b>';

            if (file_exists('kat1')){
                echo 'Katalog kat1 już istnieje';

            }else if (!mkdir('kat1')){
                echo 'Tworzenie katalogu kat1 nie powiodło się';
                    exit; 
            }else{
                echo 'Katalog kat1 został utworzony';

            }if (file_exists('kat1/kat2')){
                echo '<br />Katalog kat2 już istnieje';

            }else if (!mkdir('kat1/kat2')){
                echo '<br />Tworzenie katalogu kat2 nie powiodło się';

            }else {
                echo '<br />Katalog kat2 został utworzony';
            }
        }
        echo '</b></div>';
?>
</body>
</html>