<h3>Class and Object</h3>

<?php 
class product 
{
    public $name;
    public $price;
}
$product = new product();
$product->name = "product 1";
$product->price = 100;

echo $product->name;
echo "<br>";
echo $product->price;

?>