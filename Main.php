<?php
require_once 'Product.php';
require_once 'CDMusic.php';
require_once 'CDRack.php';

echo "Tugas PHP OOP Inheritance";
echo "<br>";
echo "--------------------------------------------";
echo "<br>";

$myCDMusic = new CDMusic('Qashidah burdah');
$myCDMusic->setPrice(100000);
$myCDMusic->setDiscount(10);
$myCDMusic->setArtist('Habib Hasan bin Alwi Al Kaff');
$myCDMusic->setGenre('Religi');

echo "My CD MUSIC<br>";
echo "Name: ".$myCDMusic->getName()."<br>";
echo "Price: ".$myCDMusic->getPrice()."<br>";
echo "Discount: ".$myCDMusic->getDiscount()."<br>";
echo "Price after discount: ".(100 - $myCDMusic->getDiscount())/100 * $myCDMusic->getPrice()."<br>";
echo "Artist: ".$myCDMusic->getArtist()."<br>";
echo "Genre: ".$myCDMusic->getGenre()."<br>";

$myCDRack = new CDRack('Xiaomi 12 pro');
$myCDRack->setPrice(13000000);
$myCDRack->setDiscount(15);
$myCDRack->setModel('Flagship');
$myCDRack->setCapacity(200);

echo "<br>";
echo "My CD Rack<br>";
echo "Name: ".$myCDRack->getName()."<br>";
echo "Price: ".$myCDRack->getPrice()."<br>";
echo "Discount: ".$myCDRack->getDiscount()."<br>";
echo "Price after discount: ".(100 - $myCDRack->getDiscount())/100 * $myCDRack->getPrice()."<br>";
echo "Model: ".$myCDRack->getModel()."<br>";
echo "Capacity: ".$myCDRack->getCapacity()."<br>";

?>