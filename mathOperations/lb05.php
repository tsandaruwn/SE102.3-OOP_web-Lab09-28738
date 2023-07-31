
<html>
<head>
    <title>Fruits Array</title>
</head>
<body>
    <?php
        // Create the 'fruits' array
        $fruits = array('Apple', 'Banana', 'Orange', 'Mango', 'Grapes');

        // Print each element of the array using foreach loop
        echo "<h1>Fruits List</h1>";
        echo "<ul>";
        foreach ($fruits as $fruit) {
            echo "<li>$fruit</li>";
        }
        echo "</ul>";
    ?>
</body>
</html>
