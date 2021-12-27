<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tworz_katalog.php" method="post">
        <input type="submit" name="submit"  value="Utwórz katalogi" />
        <input type="submit" name="clear"  value="Wyczyść" />
    </form>   
        <br /> 

    <?php 
        if(!isset($_POST['submit'])) exit;{
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
?>
</body>
</html>