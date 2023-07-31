
<html>
<head>
    <title>Electricity Bill Calculator</title>
</head>
<body>
    <h1>Electricity Bill Calculator</h1>
    <form method="post">
        <label for="units">Enter Total Units Consumed:</label>
        <input type="number" name="units" required>
        <input type="submit" value="Calculate">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the input units from the form
            $units = $_POST["units"];

            // Calculate the electricity bill based on the given conditions
            $bill = 0;

            if ($units <= 50) {
                $bill = $units * 3.50;
            } elseif ($units <= 100) {
                $bill = 50 * 3.50 + ($units - 50) * 4.00;
            } elseif ($units <= 150) {
                $bill = 50 * 3.50 + 50 * 4.00 + ($units - 100) * 5.20;
            } else {
                $bill = 50 * 3.50 + 50 * 4.00 + 50 * 5.20 + ($units - 150) * 6.50;
            }

            echo "<p>Total Electricity Bill: Rs. " . number_format($bill, 2) . "</p>";
        }
    ?>
</body>
</html>
