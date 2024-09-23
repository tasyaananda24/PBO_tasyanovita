<?php
class Employee{
    public $masa_kerja;
    public $gaji;
    public $bonus;
    public function construct($kerja, $gaji){
        $this->masa_kerja=$kerja;
        $this->gaji=$gaji;
        
        }
        public function getGaji(){
            return $this->gaji;
        }
        
}
class Programmer extends Employee{
    public function getGaji(){
        if($this->masa_kerja < 1){
            return parent:: getGaji();
        }elseif ($this->masa_kerja <= 10){
            return parent::getGaji() ;
        }else {
            return parent::getGaji();
        }
    }
    public function bonustambahan(){
        if ($this->masa_kerja <= 10){
        $bonus = 0.01*$this->masa_kerja*parent::getGaji();
        return $bonus;
    }
    if ($this->masa_kerja > 10){
        $bonus = 0.02*$this->masa_kerja*parent::getGaji();
        return $bonus;


}
}
}
$Programmer = new Programmer();
$Programmer->masa_kerja= 20;
$Programmer->gaji= 10000;
echo "Gaji Programmer :".$Programmer->getGaji();
echo "<br/>";
echo "Bonus Tambahan :".$Programmer->bonustambahan();
echo "<br/>";

class Direktur extends Employee{
    public function getGaji(){
        $bonus = $this->masa_kerja * 0.5;
        return parent::getGaji()*$bonus;
    }
    public function tunjangan(){
        $tunjangan = $this->masa_kerja * 0.1;
        return $tunjangan;
        
}
    }

$direktur = new Direktur();
$direktur->masa_kerja=8;
$direktur->gaji=20000;
echo "Gaji Direktur : ".$direktur->getGaji();
echo "<br/>";
echo "Tunjangan Direktur :". $direktur->tunjangan();
echo "<br/>";

class PegawaiMingguan extends Employee {
    private $hargaBarang;
    private $stockTerjual;

    public function __construct($masa_kerja, $gaji, $hargaBarang, $stockTerjual) {
        parent::construct($masa_kerja, $gaji);
        $this->hargaBarang = $hargaBarang;
        $this->stockTerjual = $stockTerjual;
    }

    public function getGaji() {
        $totalPenjualan = $this->hargaBarang * $this->stockTerjual;

        if ($this->stockTerjual >= 0.7 * $totalPenjualan) {
            return parent::getGaji() + (0.1 * $this->hargaBarang * $this->stockTerjual);
        } else {
            return parent::getGaji() + (0.03 * $this->hargaBarang * $this->stockTerjual);
        }
    }
}


$pegawaiMingguan = new PegawaiMingguan(3, 5000, 100, 80);
echo "Gaji Pegawai Mingguan: " . $pegawaiMingguan->getGaji();