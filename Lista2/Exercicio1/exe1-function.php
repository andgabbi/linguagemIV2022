<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Exercícios </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<div>
    <?php

        for ($i=1; $i<=10; $i++) {
            $vetor[$i] = $_POST["valor$i"];
        }

        $posicao = 0;
        $maior = 0;

        foreach ($vetor as $chave => $maior){
            echo "Posição do vetor: $chave e seu valor é $valor";
            echo "<br>";
            if ($valor > $maior){
                $maior = $valor;
                $posicao = $chave;
            }
        }


    ?>
    </br>
    <a href="exercicio1.php"> Voltar </a>

</body>
</html>