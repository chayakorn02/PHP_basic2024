<h3>Calculator</h3>

<?php 
 if (isset($_POST["operator"])) {
    $operator = $_POST["operator"];
    $x = $_POST["x"];
    $y = $_POST["y"];
 }



if (isset($operator)) {
    if ($operator == "+"){
        $result = $x + $y;
    } elseif ($operator == "-") {
        $result = $x - $y;
    } elseif ($operator == "*") {
        $result = $x * $y;
    } elseif ($operator == "/") {
        $result = $x / $y;
    } elseif ($operator == "%") {
        $result = $x % $y;
    }
    echo "$x $operator $y = $result";
}

?>

<form action="calculator.php" method="post">
    <input type="number" name="x" placeholder="x">
    <input type="number" name="y" placeholder="y">
    <input type="submit" name="operator" value="+">
    <input type="submit" name="operator" value="-">
    <input type="submit" name="operator" value="*">
    <input type="submit" name="operator" value="/">
    <input type="submit" name="operator" value="%">

</form>