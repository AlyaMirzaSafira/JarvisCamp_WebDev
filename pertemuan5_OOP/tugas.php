<?php
// Definisikan class Kendaraan
class Kendaraan {
    // Properti
    public $merk;
    public $tipe;

    // Konstruktor
    public function __construct($merk, $tipe) {
        $this->merk = $merk;
        $this->tipe = $tipe;
    }

    // Metode untuk menampilkan informasi kendaraan
    public function infoKendaraan() {
        return "Merk: " . $this->merk . ", Tipe: " . $this->tipe;
    }
}

// Definisikan class Mobil yang mewarisi class Kendaraan
class Truck extends Kendaraan {
    // Properti baru
    public $jumlahRoda;

    // Konstruktor
    public function __construct($merk, $tipe, $jumlahRoda) {
        // Panggil konstruktor parent class
        parent::__construct($merk, $tipe);
        // Inisialisasi properti baru
        $this->jumlahRoda = $jumlahRoda;
    }

    // Metode untuk menampilkan informasi mobil
    public function infoTruck() {
        return $this->infoKendaraan() . ", Jumlah Roda: " . $this->jumlahRoda;
    }
}

// Contoh pembuatan objek dari class Mobil
$truck1 = new Truck("Mitsubshi", "Canter", 12);
echo $truck1->infoTruck(); // Output: Merk: Mitsubishi, Tipe: canter, Jumlah Roda:12
?>
