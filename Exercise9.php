<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Palindrome Number</title>
</head>
<body>
    <h2>Check if a Number is Palindrome</h2>
    <form method="post">
        <label>Enter a number:</label>
        <input type="number" name="number" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $original = strval($number);
        $reversed = strrev($original);

        if ($original === $reversed) {
            echo "<p><strong>" . $number . " is a Palindrome</strong></p>";
        } else {
            echo "<p><strong>" . $number . " is Not a Palindrome</strong></p>";
        }
    }
    ?>
</body>
</html>