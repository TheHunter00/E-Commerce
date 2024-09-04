<?php
ob_start();
// include header.php file 
include("header.php");
?>

<?php
//include banner-area
include("Template/_banner-area.php");
//End include banner-area

//include top-sale
include("Template/_top-sale.php");
//End include top-sale

//include special price
include("Template/_special-price.php");
//End include special price

//include banner adds
include("Template/_banner-adds.php");
//End include banner adds

//include new phones
include("Template/_new-phones.php");
//End include new phones

//include blogs
include("Template/_blogs.php");
//End include blogs
?>

<?php
// include footer.php file 
include("footer.php");
?>
   