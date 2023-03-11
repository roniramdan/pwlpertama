<?php

include "mahluk.php";

class Manusia extends Mahluk{
    public function ambil_nama_manusia($nama){
        $this->nama = $nama;
    }
    public function cetak_nama_manusia(){
        return $this->nama;
    }
}
    $manusia = new Manusia();
    $manusia->ambil_nama_manusia('Arka');
    echo $manusia->cetak_nama_manusia();
    echo "<br>";

?>