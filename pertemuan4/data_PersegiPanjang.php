<?php
require_once "class_PersegiPanjang.php";
$persegipanjang1 = new PersegiPanjang (18,9);
$persegipanjang2 = new persegipanjang (6,3);

echo "luas persegi panjang 1 : ".$persegipanjang1->getluas();
echo "<br/>keliling persegi panjang 1 : ".$persegipanjang1->getkeliling();
echo "<br/>";
echo "<br/>luas persegi panjang 2 : ".$persegipanjang2->getluas();
echo "<br/>keliling persegi panjang 2 : ".$persegipanjang2->getkeliling();
?>