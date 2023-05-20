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
    public function __destruct() {
        echo "<br> <br> Nama : ". $this->nama;
        echo "<br> Jenis : ". $this->jenis();
        echo "<br> asal : ". $this->asal;
        echo "<br> rasa : ".$this->rasa;
        echo "<br> kepekatan : ".$this->kepekatan;
        echo "<br> Waktu Pembakaran : ".$this->roastTime();
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
    public function __destruct() {
        echo "<br> <br> Nama : ". $this->nama;
        echo "<br> Jenis : ". $this->jenis();
        echo "<br> asal : ". $this->asal;
        echo "<br> rasa : ".$this->rasa;
        echo "<br> kepekatan : ".$this->kepekatan;
        echo "<br> Waktu Pembakaran : ".$this->roastTime();
    }
}

$kopiLampung = new robusta("Pahit", "Sangat Pekat", "Lampung", "Kopi Lampung");
$kopiKintamani = new arabica("Asam", "Tidak Pekat", "Bali", "Kopi Kintamani");
