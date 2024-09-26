<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita 2 ex2-3</title>
</head>
<body>
    <?PHP
    if(isset($_GET['comanda'])) {
        $comanda = $_GET['comanda'];
        echo"<h1>Inicar comanda $comanda</h1>";
    }
    ?>
    
</body>
</html>