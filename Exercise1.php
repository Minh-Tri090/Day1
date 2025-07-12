<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra chẵn lẻ</title>
</head>
<body>
    <h2>Nhập một số:</h2>
    <form method="post">
        <input type="number" name="number" required>
        <input type="submit" value="Kiểm tra">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        if (is_numeric($number)) {
            if ($number % 2 == 0) {
                echo "<p><strong>Kết quả:</strong> Even </p>";
            } else {
                echo "<p><strong>Kết quả:</strong> Odd </p>";
            }
        } else {
            echo "<p>Vui lòng nhập một số hợp lệ.</p>";
        }
    }
    ?>
</body>
</html>
