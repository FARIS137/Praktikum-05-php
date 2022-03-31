<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table style="width: 50%; border: 2px solid black;">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">No.Rekening</th>
      <th scope="col">Customer</th>
      <th scope="col">Saldo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>C001</td>
      <td>Ahmad</td>
      <td>6.000.000</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>C002</td>
      <td>Budi</td>
      <td>5.350.000</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>C003</td>
      <td>Kurniawan</td>
      <td>2.500.000</td>

    </tr>
  </tbody>
</table>
</body>
</html> <br/>

<?php

require_once 'class_accountbank.php';

$ab1 = new accountbank ("C001", "Ahmad", 6000000);
$ab2 = new accountbank ("C002", "Budi", 5350000);
$ab3 = new accountbank ("C003", "Kurniawan", 2500000);



echo '<hr/> Ahmad nabung uang 1.000.000 <br/>';
$ab1->nabung($ab1,1000000);
$ab1->cetak();
echo '<hr/> Ahmad transfer 1.500.000 ke Kurniawan dan 500.000 ke Budi ';
$ab1->transfer($ab3,1500000);
echo '<br/>';
$ab1->transfer($ab2,500000);
$ab1->cetak();
echo '<hr/>';
$ab2->cetak();
echo '<hr/>';
$ab3->cetak();
echo '<hr/>';
echo 'Budi Narik uang 2.500.000<br/>';
$ab2->tarik($ab2,2500000);
$ab2->cetak();
?>