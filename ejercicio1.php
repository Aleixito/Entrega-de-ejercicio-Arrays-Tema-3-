<html>
<head>
    <title>PHP Arrays</title>
</head>
<body>
    <?php  
    
    $numeros = array();
    
    for ($i = 0; $i < 5; $i++) {
        $numeros[] = $i + 1;
    }
    
    foreach ($numeros as $numero) {
        echo $numero . "\n";
    }

    ?>
</body>
</html>