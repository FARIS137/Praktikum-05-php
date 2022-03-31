<?php
require_once 'class_account.php';

class accountbank extends account{
    public $customer;
    static $biaya_admin = 6500;

    function __construct($nomor, $customer, $saldo){
        parent::__construct($nomor,$saldo);
        $this->customer = $customer;
    }
    
    public function transfer($ab,$uang){
        $ab->deposit($uang);
         $this->narik($uang);
         $this->narik(self::$biaya_admin);
        
    }
    public function tarik($ab,$uang){
        $ab->narik($uang);
        
    }
    public function nabung($ab,$uang){
        $ab->deposit($uang);
    }
    
    public function cetak(){
        parent::cetak();
        echo '<br/>Pemilik : '.$this->customer;
        echo '<br/> Biaya admin : 6500 (Hanya untuk Transfer)';
    }


}
?>