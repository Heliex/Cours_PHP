<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping List</title>
</head>
<body>
<h1>My Shopping List</h1>
<ul>
    <?php
    $shopping_list = ["Milk", "Bread", "Eggs", "Butter", "Cheese"];

    foreach ($shopping_list as $item) {
        echo "<li>" . $item . "</li>";
    }
    ?>
</ul>
</body>
</html>
