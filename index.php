<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador</title>
</head>
<body>
    <div class="menu">
        <form action="index.php" method="POST">
            <h1>Sorteador de Numero</h1>
            <label for="n1">De</label>     
            <input type="text" name="n1" required>
            <label for="n2">Até</label>
            <input type="text" name="n2" required>
            <input type="submit" value="Gerar">
            <br><br><br>
        </form>    
    </div>
    <?php
        $min = isset ($_POST['n1']) ? $_POST['n1'] : 0 ;
        $max = isset ($_POST['n2']) ? $_POST['n2'] : 100;
            
        $result = mt_rand($min,$max);

        echo "<h1>O resultado é $result </h1>";

    ?>
        <button type="button" onClick="recarregarPagina()">Atualizar</button>
    <script>
        function recarregarPagina(){
        window.location.reload();
        } 
    </script>
</body>
</html>
