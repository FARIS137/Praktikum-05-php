<?php
class dispenser{
  protected $volume;
  protected $hargasegelas;
  private $volumegelas;
  public $namaminuman;
  
  

  function __construct($volume, $hargasegelas,$volumegelas,$namaminuman){
    $this->volume = $volume;
    $this->volumegelas = $volumegelas;
    $this->hargasegelas = $hargasegelas;
    $this->namaminuman = $namaminuman;
    
  }

  public function isi($jumlah){
    $this->volume = $this -> volume + $jumlah;
  }

  public function harga($jumlah){
    $this->hargasegelas = $this-> hargasegelas + $jumlah;
  }

  public function isigelas($jumlah){
    $this->volume = $this-> volume - $jumlah;

  }

  public function Nama($uang){
    $this->sisauang = $this->sisauang + $uang;
  }
    public function cetak(){
      echo '<br/>Sisa Air  : '.$this->volume;
      echo ' ml';
      echo '<br/> Harga Segelas : '.$this->hargasegelas;
      echo ' Rupiah';
      echo '<br/> Harga Bayar: '.$this->hargasegelas*2;
      echo ' Rupiah';
      echo '<br/>isi gelas   :' .$this->volumegelas;
       echo ' ml';
      echo '<br/> Nama Minuman : '.$this->namaminuman;
     
     

    
  }

}
?>
