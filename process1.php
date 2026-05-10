<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manipulation Results</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .res-box { background: #f9f9f9; padding: 20px; border: 1px solid #ccc; display: inline-block; }
    </style>
</head>
<body>

    <h2>Results</h2>
    <div class="res-box">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $str = $_POST['user_string'];
            $start = (int)$_POST['start'];
            $len = (int)$_POST['len'];

            echo "<b>Original:</b> " . htmlspecialchars($str) . "<br>";
            echo "<b>Length:</b> " . strlen($str) . "<br>";
            echo "<b>Reversed:</b> " . strrev($str) . "<br>";
            echo "<b>Extracted:</b> " . substr($str, $start, $len);
        }
        ?>
    </div>
    <br><br>
    <a href="index.html">Try Again</a>

</body>
</html>