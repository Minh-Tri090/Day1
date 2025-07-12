<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Area of a Circle</title>
</head>
<body>
    <h2>Area of a Circle</h2>
    <form method="post">
        <label>Enter the radius:</label>
        <input type="number" name="radius" step="any" min="0" required>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $radius = floatval($_POST["radius"]);
        $area = pi() * pow($radius, 2);

        echo "<p><strong>Radius:</strong> " . $radius . "</p>";
        echo "<p><strong>Area of the circle:</strong> " . number_format($area, 2) . "</p>";
    }
    ?>
</body>
</html>