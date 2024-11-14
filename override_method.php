<h3>Override Method</h3>

<?php 
class ParentClass
{
    function getInfo()
    {
        return "Parent Class";
    }
}
class Product extends ParentClass
{
    function getInfo()
    {
        return "Product";
    }
}
$product = new Product();
echo $product->getInfo();
?>