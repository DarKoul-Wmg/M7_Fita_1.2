<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIta 2 ex2-2</title>
    
</head>
<body>

    <?PHP 
        if(isset($_POST["quantity"])){
            $quantity = $_POST["quantity"];
        }
        echo "<h2>Comandas disponibles:</h2><br/>";
        for ($i = 1; $i <= $quantity; $i++){
            echo "<br/> - <a href='./ex22pagina3.php?comanda=$i'>Comanda $i </a>";
        }

    ?>
</body>
</html>