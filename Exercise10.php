<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Sequence Generator</title>
</head>
<body>
    <h2>Generate Fibonacci Sequence</h2>
    <form method="post">
        <label>Enter the number of terms (n ≥ 1):</label>
        <input type="number" name="n" min="1" required>
        <input type="submit" value="Generate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = intval($_POST["n"]);
        $fibonacci = [];

        for ($i = 0; $i < $n; $i++) {
            if ($i == 0) {
                $fibonacci[] = 0;
            } elseif ($i == 1) {
                $fibonacci[] = 1;
            } else {
                $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
            }
        }

        echo "<p><strong>Fibonacci sequence up to $n terms:</strong></p>";
        echo implode(", ", $fibonacci);
    }
    ?>
</body>
</html>