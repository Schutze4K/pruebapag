<html>
<head>
    <title>Hola</title>
</head>
<body>
<h1>Fecha: <?= date(date"d.m.y")?></h1>
<?php
    if (date ("d") % 2 == 0) {
        echo "Hoy es día par";
    } else {
        echo "Hoy es un día impar";
    }
?>
</body>
</html>
