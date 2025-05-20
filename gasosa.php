<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $distancia = $_POST['distancia'];
    $combustivel = $_POST['combustivel'];

    $consumo_medio = $distancia / $combustivel;

    if ($consumo_medio <= 8) {
        $classificacao = "Alto consumo";
    } elseif ($consumo_medio >= 8.1 && $consumo_medio <= 14) {
        $classificacao = "Consumo moderado";
    } else {
        $classificacao = "Bom consumo";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Consumo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #1f1f1f;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.5);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }

        h1 {
            color: #ffffff;
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
            color: #d0d0d0;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            background-color: #e0e0e0;
            color: #111;
        }

        input[type="submit"] {
            background-color: #444;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #666;
        }

        .resultado {
            margin-top: 20px;
            font-size: 18px;
        }

        .resultado p {
            margin: 10px 0;
            font-weight: bold;
        }

        .classificacao {
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora de Consumo</h1>
        <form method="POST" action="">
            <label for="nome">Nome do Condutor:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="distancia">Distância (km):</label>
            <input type="number" id="distancia" name="distancia" step="0.1" required>

            <label for="combustivel">Combustível (litros):</label>
            <input type="number" id="combustivel" name="combustivel" step="0.1" required>

            <input type="submit" value="Calcular">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo "<div class='resultado'>";
            echo "<p>Olá, $nome! Seu consumo médio foi de " . number_format($consumo_medio, 2) . " km/l.</p>";
            echo "<p class='classificacao'>Classificação: $classificacao</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
