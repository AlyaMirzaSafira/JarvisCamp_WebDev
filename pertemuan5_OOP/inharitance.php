<?php 

class Buah
{     
    public $nama;
    public $warna;
    
    public $rasa;
    
    public function __construct($nama, $warna, $rasa)
    {
        this->nama = $nama;
        this->warna = $warna;
    }
    public function jatuh()
    {
        echo"$this->nama jatuh\n";
    }
}



?>