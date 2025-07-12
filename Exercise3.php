<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Factorial</title>
</head>
<body>
    <h2>Find Factorial of a Number</h2>
    <form method="post">
        <label>Enter a number:</label>
        <input type="number" name="number" min="0" required>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["number"];

        if (is_numeric($n) && $n >= 0) {
            $factorial = 1;
            for ($i = 1; $i <= $n; $i++) {
                $factorial *= $i;
            }

            echo "<p><strong>Factorial of " . $n . " is " . $factorial . "</strong></p>";
        } else {
            echo "<p>Please enter a valid non-negative integer.</p>";
        }
    }
    ?>
</body>
</html>
