<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse a String</title>
</head>
<body>
    <h2>Reverse a String</h2>
    <form method="post">
        <label>Enter a string:</label><br>
        <input type="text" name="inputString" required style="width:300px;"><br><br>
        <input type="submit" value="Reverse">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $original = $_POST["inputString"];
        $reversed = strrev($original); 

        echo "<p><strong>Original:</strong> " . $original . "</p>";
        echo "<p><strong>Reversed:</strong> " . $reversed . "</p>";
    }
    ?>
</body>
</html>