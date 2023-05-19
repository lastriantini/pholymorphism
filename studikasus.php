<?php
interface minuman{
    public function jenis();
} 

abstract class kopi{
    abstract public function roastTime();
}

class robusta extends kopi implements minuman{
    public $rasa, $kepekatan, $asal, $nama;

    public function jenis(){
        return "Kopi Robusta";
    }
    public function __construct($rasa, $kepekatan, $asal, $nama) {
        $this->rasa = $rasa;
        $this->kepekatan = $kepekatan;
        $this->asal = $asal;
        $this->nama = $nama;
    }
    public function roastTime(){
        return "10 menit";
    }
}

class arabica extends kopi implements minuman{
    public $rasa, $kepekatan, $asal, $nama;

    public function jenis(){
        return "Kopi Arabica";
    }
    public function __construct($rasa, $kepekatan, $asal, $nama) {
        $this->rasa = $rasa;
        $this->kepekatan = $kepekatan;
        $this->asal = $asal;
        $this->nama = $nama;
    }
    public function roastTime(){
        return "15 menit";
    }
}

$kopiLampung = new robusta("Pahit", "Sangat Pekat", "Lampung", "Kopi Lampung");
$kopiKintamani = new arabica("Asam", "Tidak Pekat", "Bali", "Kopi Kintamani");

echo "Nama : ".$kopiLampung->nama;
echo "<br> Jenis : ".$kopiLampung->jenis();
echo "<br> asal : ".$kopiLampung->asal;
echo "<br> rasa : ".$kopiLampung->rasa;
echo "<br> kepekatan : ".$kopiLampung->kepekatan;
echo "<br> Waktu Pembakaran : ".$kopiLampung->roastTime();
echo "<br><br>";
echo "Nama : ".$kopiKintamani->nama;
echo "<br> Jenis : ".$kopiKintamani->jenis();
echo "<br> asal : ".$kopiKintamani->asal;
echo "<br> rasa : ".$kopiKintamani->rasa;
echo "<br> kepekatan : ".$kopiKintamani->kepekatan;
echo "<br> Waktu Pembakaran : ".$kopiKintamani->roastTime();