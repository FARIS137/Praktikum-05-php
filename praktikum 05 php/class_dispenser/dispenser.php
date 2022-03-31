<?php
require_once 'class_tujuan.php';

$ab1 = new tujuan (1000,5000,250,"Aquo dan frento","Lala",0);
$ab2 = new tujuan (0,5000,250,"Aquo","Hana",10000);
$ab3 = new tujuan (0,5000,250,"frento","jaya",10000);

echo 'Lala Menjual Minuman 1000ml<br/>';
$ab1->cetak();
echo '<hr/>';
echo 'Hana membeli Aquo 500ml<br/>';
$ab1->beli ($ab2,500);
$ab1->uang($ab2,10000);
$ab2->cetak();

echo '<hr/>';
echo 'jaya membeli Frento 500ml<br/>';
$ab1->beli($ab3,500);
$ab1->uang($ab3,10000);
$ab3->cetak();
echo '<hr/>';
$ab1->cetak();
echo '<hr/>';
echo 'Lala menambah minuman 2000ml<br/>';

$ab1->nambah($ab1,2000);
$ab1->bayar($ab1,10000);
$ab1->cetak();



?>
