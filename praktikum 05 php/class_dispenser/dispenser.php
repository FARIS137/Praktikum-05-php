<?php
require_once 'class_tujuan.php';

$ab1 = new tujuan (1000,5000,250,"Aquo dan frento","Lala");
$ab2 = new tujuan (0,10000,500,"Aquo","Hana");
$ab3 = new tujuan (0,10000,500,"frento","jaya");

echo 'Lala Menjual Minuman 1000ml';
$ab1->cetak();
echo '<hr/>';
echo 'Hana membeli Aquo 500ml';
$ab1->beli($ab2,500);
$ab2->cetak();
echo '<hr/>';
echo 'jaya membeli Frento 500ml';

$ab1->beli($ab3,500);
$ab3->cetak();
echo '<hr/>';
$ab1->cetak();
echo '<hr/>';
echo 'Lala menambah minuman 2000ml';

$ab1->nambah($ab1,2000);
$ab1->cetak();



?>