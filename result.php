<?php 


$testo = $_GET["text"];

$badw = $_GET["badword"];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Il tuo testo è: <br><br> <?php echo $testo ?> </h2>
<h3>ed è lungo <?php echo strlen($testo) ?> caratteri </h3>

<h2>Il tuo nuovo testo è: <br><br> <?php echo str_replace($badw, '***' ,$testo )  ?> </h2>
<h3>ed è lungo <?php echo strlen($testo) ?> caratteri </h3>
</body>
</html>
