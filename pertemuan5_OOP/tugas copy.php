<?php 
class Kendaraan {
    //properti
    public $merk;
    public $type;

    //construct
    public function construct($merk, $type){
        $this->merk = $merk;
        $this->type = $type;
    }
    //method
    public function Mobilisasi() {echo "Goes to Surabaya"; }
}

// Inhiritence (class truck yang mewarisi class kendaraan)
class Truck extends Kendaraan {
    //properti baru
    public $merk;
    public $type;

    //Construct masukin prop baru
    public function construct($merk, $type, $jumlahRoda){
     parent::construct($jumlahRoda); 
     $this->merk = $merk;  
     $this->type = $type;
    }

    //method baru
}
?>