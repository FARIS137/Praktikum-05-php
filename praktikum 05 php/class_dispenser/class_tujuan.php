<?php
require_once 'class_dispenser.php';

class tujuan extends dispenser{
    public $customer;
    public $sisauang;

function __construct($volume,$hargasegelas,$volumegelas,$namaminuman,$customer,$sisauang ){
    parent::__construct($volume, $hargasegelas, $volumegelas, $namaminuman);
    $this->customer = $customer;
    $this->sisauang = $sisauang;
}

    public function sisa($uang){
        $this->sisauang = $this->sisauang - $uang;
    
    public function nambah($ab,$jumlah){
        $ab->isi($jumlah);
    }
    public function beli($ab,$jumlah){
        $ab->isi($jumlah);
        $this->isigelas($jumlah);
    }
        function uang($ab,$uang){
        $ab->sisa($uang);
        $this->Nama($uang);
    }
    function bayar($ab,$uang){
        $ab->sisa($uang);
    }

    public function cetak(){
        parent::cetak();
        echo '<br/>Nama : '.$this->customer;
        echo '<br/> Sisa uang : '.$this->sisauang;
    }
}


?>
