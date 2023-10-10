<?php
namespace Htlw3r\Phpoopdemo;
require_once 'vendor/autoload.php';

use Htlw3r\Phpoopdemo\Model\Burger;
use Htlw3r\Phpoopdemo\Model\Pommes;

// Burgerton Inc
$products = array(
    new Burger('Cheeseburger',1.4, 0.25),
    new Burger('Hamburger',1.2, 0.25),
    new Pommes('Superpommes', 5)
);

foreach($products as $product){

}
