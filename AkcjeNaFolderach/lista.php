<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="lista.php" method="post">
        <input type="submit" name="submit" value="Pokaż pliki" />
        <input type="submit" name="clear"  value="Wyczyść" />
    </form>  
        <br />
<?php
    if (!isset($_POST['submit'])) exit;
        @$pliki=scandir(getcwd());

        if (!$pliki){ 
        echo 'Wystąpiły błędy';
        }else if (count($pliki)===0){ 
        echo 'Brak plików';
        }else{ 
            foreach($pliki as $plik)  
            if($plik != '.' && $plik != '..' )
            echo $plik.'<br />';
        } 
     
?> 


</body>
</html>