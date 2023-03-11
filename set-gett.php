<?php
class Mobil {
    private $bbm;
    private $kapasitas_mesin;
    public function __construct(){

    }
    public function SetBBM($bbm){
    $this->bbm = $bbm;
}
    public function GetBBM(){
    return $this->bbm;
}
    public function SetKapasitasMesin($kapasitas_mesin){
    $this->kapasitas_mesin = $kapasitas_mesin;
}
    public function GetKapasitasMesin(){
    return $this->kapasitas_mesin;
}
}

$bmw = new Mobil();
$bmw->SetBBM('Pertamax');
echo "Bahan Bakarnya : ".$bmw->GetBBM();
echo "<br>";

$bmw->SetKapasitasMesin(5000);
echo "Kapasitas Mesinnya : ".$bmw->GetKapasitasMesin()." cc";
?>