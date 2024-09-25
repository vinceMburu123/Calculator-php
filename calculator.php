<!DOCTYPE html>
<html>
<head>
    <title>Basic Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Basic Calculator</h2>

    <form method="post">
        <label>Enter First Number:</label>
        <input type="number" name="num1" required><br><br>

        <label>Enter Second Number:</label>
        <input type="number" name="num2"><br><br>

        <label>Select Operation:</label>
        <select name="operator" required>
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="division">Division</option>
            <option value="exponentiate">Exponentiation</option>
            <option value="percentage">Percentage</option>
            <option value="sqrt">Square Root (of first number)</option>
            <option value="log">Logarithm (of first number)</option>
        </select><br><br>

        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = isset($_POST['num2']) ? $_POST['num2'] : null;
        $operator = $_POST['operator'];

        switch ($operator) {
            case 'add':
                $result = $num1 + $num2;
                echo "<h3>Result: $num1 + $num2 = $result</h3>";
                break;
            case 'subtract':
                $result = $num1 - $num2;
                echo "<h3>Result: $num1 - $num2 = $result</h3>";
                break;
            case 'multiply':
                $result = $num1 * $num2;
                echo "<h3>Result: $num1 * $num2 = $result</h3>";
                break;
            case 'division':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    echo "<h3>Result: $num1 / $num2 = $result</h3>";
                } else {
                    echo "<h3>Error: Division by zero!</h3>";
                }
                break;
            case 'exponentiate':
                $result = pow($num1, $num2);
                echo "<h3>Result: $num1 ^ $num2 = $result</h3>";
                break;
            case 'percentage':
                $result = ($num1 * $num2) / 100;
                echo "<h3>Result: $num1 is $result% of $num2</h3>";
                break;
            case 'sqrt':
                $result = sqrt($num1);
                echo "<h3>Result: √$num1 = $result</h3>";
                break;
            case 'log':
                if ($num1 > 0) {
                    $result = log($num1);
                    echo "<h3>Result: log($num1) = $result</h3>";
                } else {
                    echo "<h3>Error: Logarithm of a non-positive number is undefined!</h3>";
                }
                break;
            default:
                echo "<h3>Error: Invalid operation</h3>";
        }
    }
    ?>

</body>
</html>
