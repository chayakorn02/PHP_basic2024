<h3>Random Number</h3>

<?php 
echo rand(1, 1000);
?>

<h3>Random Encrypted Hash Code</h3>

<?php 
echo md5(uniqid(rand(), true));
?>