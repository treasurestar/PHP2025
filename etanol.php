<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparador de Combustíveis</title>
</head>
<body>
    <h1>Comparador de Etanol e Gasolina</h1>
    <form method="post"> 
        <label for="preco-etanol">Informe o preço do Etanol (R$):</label><br>
        <input type="number" id="preco-et" name="preco-et" step="0.01" required><br><br>

        <label for="preco-gasolina">Informe o preço da Gasolina (R$):</label><br>
        <input type="number" id="preco-gas" name="preco-gas" step="0.01" required><br><br>
        
        <input type="submit" value="Calcular">
        <hr>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $preco_et = $_POST['preco-et'];
            $preco_gas = $_POST['preco-gas'];

            if ($preco_et <= $preco_gas * 0.7){
                echo "<p>Resultado: O Etanol é a melhor opção neste caso!</p>";
            } else {
                echo "<p>Resultado: A Gasolina é a melhor escolha para você.</p>";
            }
        }
    ?>
</body>
</html>
