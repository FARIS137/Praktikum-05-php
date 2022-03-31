<?php
require_once 'class_dispenser.php';

class tujuan extends dispenser{
    public $customer;

function __construct($volume,$hargasegelas,$volumegelas,$namaminuman,$customer ){
    parent::__construct($volume, $hargasegelas, $volumegelas, $namaminuman);
    $this->customer = $customer;
}

    public function nambah($ab,$jumlah){
        $ab->isi($jumlah);
    }
    public function beli($ab,$jumlah){
        $ab->isi($jumlah);
        $this->isigelas($jumlah);
       
    }

    public function cetak(){
        parent::cetak();
        echo '<br/>Nama : '.$this->customer;
    }
}


?>