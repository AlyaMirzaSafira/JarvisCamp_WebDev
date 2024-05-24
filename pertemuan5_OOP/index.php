<?php 
class Buah
{     //class for karakteristik
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
        echo"$this->nama jatuh";
    }
}


class Mobil
{
    public $warna;
    public $merk;



    public function berjalan()
    {
        echo "mobil $this->merk berjalan \n";
    }
    public function mengerem()
    {
        echo "mobil $this->merk mengerem \n";
    }
}

//$jeruk = new Buah();
//$jeruk->jatuh();
//$jeruk->nama = "Jeruk";
//$jeruk->warna = "Orange";
//$jeruk->rasa = "manis & asam";
//$jeruk->jatuh();
//echo "Ini adalah $jeruk->nama";
//echo "$jeruk"; 

$toyota = new Mobil();
$toyota->merk = "Toyota";
$toyota->warna = "Silver";
$toyota->berjalan();
$toyota->mengerem();
echo "Mobil $toyota->merk berwarna $toyota->warna";
?>