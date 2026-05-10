<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Result</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .result-box { background: #f4f4f4; padding: 15px; border-left: 5px solid #333; }
    </style>
</head>
<body>

    <h2>Submitted Information</h2>
    <div class="result-box">
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = htmlspecialchars($_POST['username']);
                $city = htmlspecialchars($_POST['city']);

                echo "Name: " . $name . "<br>";
                echo "City: " . $city;
            } else {
                echo "No data submitted.";
            }
        ?>
    </div>
    <br>
    <a href="index.html">Go Back</a>

</body>
</html>

