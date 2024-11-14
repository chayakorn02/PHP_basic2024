<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <div class="bg-white p-6 rounded-lg shadow-lg w-80">
        <h2 class="text-2xl font-bold mb-4 text-center">PHP Calculator</h2>

        <?php
            $num1 = $num2 = $result = "";
            $operator = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operator = $_POST['operator'];

                if (is_numeric($num1) && is_numeric($num2)) {
                    switch ($operator) {
                        case "add":
                            $result = $num1 + $num2;
                            break;
                        case "subtract":
                            $result = $num1 - $num2;
                            break;
                        case "multiply":
                            $result = $num1 * $num2;
                            break;
                        case "divide":
                            $result = $num2 != 0 ? $num1 / $num2 : "Cannot divide by zero";
                            break;
                        default:
                            $result = "Invalid operation";
                            break;
                    }
                } else {
                    $result = "Please enter valid numbers";
                }
            }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="space-y-4">
            <input type="number" name="num1" value="<?php echo $num1;?>" placeholder="First Number" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>

            <select name="operator" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                <option value="add" <?php if($operator == "add") echo 'selected'; ?>>Add (+)</option>
                <option value="subtract" <?php if($operator == "subtract") echo 'selected'; ?>>Subtract (-)</option>
                <option value="multiply" <?php if($operator == "multiply") echo 'selected'; ?>>Multiply (*)</option>
                <option value="divide" <?php if($operator == "divide") echo 'selected'; ?>>Divide (/)</option>
            </select>

            <input type="number" name="num2" value="<?php echo $num2;?>" placeholder="Second Number" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>

            <button type="submit" class="w-full bg-indigo-500 text-white py-2 rounded-lg hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500">Calculate</button>

            <?php if ($result !== ""): ?>
                <div class="mt-4 p-4 bg-gray-100 rounded-lg text-center">
                    <p class="text-lg font-semibold">Result: <?php echo $result; ?></p>
                </div>
            <?php endif; ?>
        </form>
    </div>

</body>
</html>
