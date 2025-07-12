<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Prime Number</title>
</head>
<body>
    <h2>Check if a Number is Prime</h2>
    <form method="post">
        <label>Enter a number (integer ≥ 2):</label>
        <input type="number" name="number" min="2" required>
        <input type="submit" value="Check">
    </form>

    <?php
    function isPrime($n) {
        if ($n < 2) return false;
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) return false;
        }
        return true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["number"];

        if (filter_var($n, FILTER_VALIDATE_INT) && $n >= 2) {
            if (isPrime($n)) {
                echo "<p><strong>" . $n . " is Prime</strong></p>";
            } else {
                echo "<p><strong>" . $n . " is Not Prime</strong></p>";
            }
        } else {
            echo "<p>Please enter an integer greater than or equal to 2.</p>";
        }
    }
    ?>
</body>
</html>
