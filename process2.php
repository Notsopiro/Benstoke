<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Results</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .res-container { display: flex; gap: 40px; background: #f9f9f9; padding: 20px; border: 1px solid #ccc; }
        ul { padding-left: 20px; }
    </style>
</head>
<body>

    <h2>Array Elements</h2>
    <div class="res-container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST['items'];
            $itemsArray = explode(",", $input);
            $itemsArray = array_map('trim', $itemsArray);

            echo "<div>";
            echo "<strong>Foreach Loop:</strong>";
            echo "<ul>";
            foreach ($itemsArray as $item) {
                echo "<li>" . htmlspecialchars($item) . "</li>";
            }
            echo "</ul>";
            echo "</div>";

            echo "<div>";
            echo "<strong>For Loop:</strong>";
            echo "<ul>";
            for ($i = 0; $i < count($itemsArray); $i++) {
                echo "<li>Index $i: " . htmlspecialchars($itemsArray[$i]) . "</li>";
            }
            echo "</ul>";
            echo "</div>";
        }
        ?>
    </div>
    <br>
    <a href="index.html">Back to Form</a>

</body>
</html>