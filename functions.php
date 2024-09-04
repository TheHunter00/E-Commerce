<?php 
//require MySql Connection
require('database/DBController.php');

//require Product class
require('database/product.php');

// require Cart Class
require ('database/Cart.php');


//DBController object
$db = new DBController();

// Product object
$product = new Product($db);
$product_shuffle =$product->getData() ;

//Cart object
$Cart = new Cart($db);