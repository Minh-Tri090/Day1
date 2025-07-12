<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert Celsius to Fahrenheit</title>
</head>
<body>
    <h2>Convert Celsius to Fahrenheit</h2>
    <form method="post">
        <label>Enter temperature in Celsius:</label>
        <input type="number" name="celsius" step="any" required>
        <input type="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $celsius = $_POST["celsius"];
        $fahrenheit = ($celsius * 9 / 5) + 32;

        echo "<p><strong>" . $celsius . "&deg;C = " . $fahrenheit . "&deg;F</strong></p>";
    }
    ?>
</body>
</html>
