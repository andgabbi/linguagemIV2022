<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Exercícios </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<div>
    <h3> Exercício 1 </h3>
    <form action="exe1-function.php" method="post">

     <?php
        for ($i=1; $i<=10; $i++){

    ?>
     
        <label for="valor<?= $i ?>"> Digite o valor <?= $i ?>:  </label>
        <input type="text" id="valor" name="valor"/>

        <?php } ?>

        <button type="submit"> Verificar </button>

    </form>
</div>

</body>
</html>











