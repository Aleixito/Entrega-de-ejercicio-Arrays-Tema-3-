<html>
<head>
    <title>PHP Arrays</title>
</head>
<body>
    <?php  
    function tieneCaracter($palabras, $caracter) {
        foreach ($palabras as $palabra) {
        if (strpos($palabra, $caracter) === false) {
        return false;
        }
        }
        return true;
    }

    #Ejemplos
    echo tieneCaracter(["hola", "Php", "Html"], "h"); #true
    echo tieneCaracter(["hola", "Php", "Html"], "l"); #false

    ?>
</body>
</html>