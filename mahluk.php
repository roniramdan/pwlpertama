<?php 
class Mahluk {
    protected $nama;

    public function ambil_nama($nama){
        $this->nama = $nama;
    }

    public function cetak_nama(){
        return $this->nama;
    }
    public function cara_berkembang_biak(){
    }
}

$manusia = new Mahluk();
$manusia->ambil_nama('Slamet');
echo $manusia->cetak_nama();
echo "<br>";
?>