<h3>Class and Constructor</h3>

<?php 
class Product
{
    public $name;
    public $price;

    function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}

$product = new Product("Product 1", 100);

echo $product->name;
echo "<br>";
echo $product->price;
?>