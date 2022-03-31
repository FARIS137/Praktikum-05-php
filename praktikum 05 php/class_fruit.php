<?php

class buah{
    public $nama;
    protected $warna;
    public function __construct($nama, $warna){
        $this->nama = $nama;
        $this->warna = $warna;
    }
    public function intro(){
        echo " the fruit is ($this->nama) and the color is ($this->warna).";

    }
    }
    



?>