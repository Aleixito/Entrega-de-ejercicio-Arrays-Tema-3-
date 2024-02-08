<html>
<head>
    <title>PHP Arrays</title>
</head>
<body>
    <?php  

$X = array(10, 20, 30, 40, 50, 60);
echo "El tamaño del array antes de eliminar un elemento: " . count($X) . "\n";

unset($X[3]);

$X = array_values($X);

echo "El tamaño de la matriz tras eliminar un elemento y volver a indexar: " . count($X) . "\n";

    ?>
</body>
</html>