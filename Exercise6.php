<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle Perimeter Calculator</title>
</head>
<body>
    <h2>Calculate the Perimeter of a Triangle</h2>
    <form method="post">
        <label>Enter side a:</label>
        <input type="number" name="a" step="any" min="0" required><br><br>

        <label>Enter side b:</label>
        <input type="number" name="b" step="any" min="0" required><br><br>

        <label>Enter side c:</label>
        <input type="number" name="c" step="any" min="0" required><br><br>

        <input type="submit" value="Calculate Perimeter">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = floatval($_POST["a"]);
        $b = floatval($_POST["b"]);
        $c = floatval($_POST["c"]);

        if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
            $perimeter = $a + $b + $c;
            echo "<p><strong>Perimeter of the triangle is: " . $perimeter . "</strong></p>";
        } else {
            echo "<p style='color:red;'>The provided sides do not form a valid triangle.</p>";
        }
    }
    ?>
</body>
</html>