<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis PHP</title>
</head>
<body>
    <h1>Tipos de variaveis</h1>
    <?php 
    $var = "Bill Gates";
    $tipo = gettype($var);
        echo "
            <ul>
                <li>$var " . "($tipo)</li>
        ";
    $var = 12;
    $tipo = gettype($var);
            echo "
              <li>$var " . "($tipo)</li>
            ";
    $var = 3.235242;
    $tipo = gettype($var);
        echo "
            
                <li>$var " . "($tipo)</li>
        ";
    $var = true;
    $tipo = gettype($var);
        echo "
                <li>$var " . "($tipo)</li>
            </ul>
        ";
    ?>

    <!-- Verificação das variaveis -->
    <?php
    $var = null;
    if (is_null($var)) {
        echo "$var <br>";
        echo "Variavel \$var" . " é nula/vazia!" . "<br>";
    } 
    $var = "Bill Gates";
    if (is_string($var)) {
        echo "$var <br>";
        echo "Variavel \$var" . " é uma String!" . "<br>";
    }
    $var = 12;
    if (is_int($var)) {
        echo "$var <br>";
        echo "Variavel \$var" . " é inteiro!" . "<br>";
    }
    $var = 3.23242;
    if (is_float($var)) {
        echo "$var <br>";
        echo "Variavel \$var" . " é float/real!" . "<br>";
    }
    $var = true;
    if (is_bool($var)) {
        echo "$var <br>";
        echo "Variavel \$var" . " é booleana!" . "<br>";
    }
    $var = array("Bill gates", 12, 3.252123, true);
    if (is_array($var)) {
        echo var_dump($var) . "<br>";
        echo "Variavel \$var" . " é uma array!" . "<br>";
    }
    ?>

    <h1>Arrays</h1>
    <?php 
        // Array: Definição Direta (sem chave)

        //Aleatoriza valores
        for ($i=0; $i < 7; $i++) { 
            $nota[$i] = rand(0, 10);
        }
        
        //Exibe valores
        for ($i=0; $i < 7; $i++) { 
            echo $i . "° Posição: " . $nota[$i] . "<br>";
        }
        
        //calcular media de notas
        for ($i=0; $i < 7; $i++) { 
            $soma += $nota[$i]; 
        }
        $media = round($soma / 7);

        echo "<p>Média do aluno: $media</p>";

        echo "<br>";
        var_dump($nota)

    ?>
</body>
</html>