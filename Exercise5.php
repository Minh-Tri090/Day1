<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Vowels in a String</title>
</head>
<body>
    <h2>Count Vowels in a String</h2>
    <form method="post">
        <label>Enter a string:</label><br>
        <input type="text" name="inputString" required style="width:300px;">
        <br><br>
        <input type="submit" value="Count Vowels">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = $_POST["inputString"];
        $vowelCount = 0;
        $str = strtolower($str);

        for ($i = 0; $i < strlen($str); $i++) {
            if (in_array($str[$i], ['a', 'e', 'i', 'o', 'u'])) {
                $vowelCount++;
            }
        }
        echo "<p><strong>Number of vowels:</strong> " . $vowelCount . "</p>";

    }
    ?>
</body>
</html>