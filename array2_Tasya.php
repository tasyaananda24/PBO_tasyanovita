<?php
class Angsuran {
    var $pinjaman;
    var $bunga;
    var $lama;
    var $angsuran = [];

    function setPinjaman($x) {
        $this->pinjaman = $x;
    }
    function getPinjaman() {
        return $this->pinjaman;
    }

    function setBunga($x) {
        $this->bunga = $x;
    }
    function getBunga() {
        return $this->bunga;
    }

    function setLama($lama) {
        $this->lama = $lama;
    }
    function getLama() {
        return $this->lama;
    }

    function hitungAngsuran() {
        $angsuranPokok = $this->pinjaman / $this->lama;

        for ($i = 1; $i <= $this->lama; $i++)  {
            $bungaPerBulan = ($this->pinjaman * ($this->bunga / 100)) / $this->lama;
            $totalAngsuran = $angsuranPokok + ($bungaPerBulan * ($this->lama - $i + 1));
            $this->angsuran[] = $totalAngsuran;
        }
   
}
    public function getAngsuran() {
        return $this->angsuran;
    }

}
$kredit = new Angsuran();
$kredit->setPinjaman(1000000);
$kredit->setBunga(10);
$kredit->setLama(5);
$kredit->hitungAngsuran();
$dataAngsuran = $kredit->getAngsuran();

echo "TOKO PEGADAIAN SYARIAH <br>";
echo "Jl Keadilan No 16 <br>";
echo "Telp 732746238 <br>";
echo "Program Penghitung Besaran Angsuran Hutang <br>";
echo "Besaran Pinjaman : Rp. " . number_format($kredit->getPinjaman(), 0, ',', '.') . "<br>";
echo "Masukan Besaran Bunga (%) : " . $kredit->getBunga() . "<br>";
echo "Lama Angsuran (bulan) : " . $kredit->getLama() . "<br>";
for ($i = 0; $i < count($dataAngsuran); $i++) {
  echo "Angsuran ke-" . ($i + 1) . " :  = Rp. " . number_format($dataAngsuran[$i], 0, ',', '.'). "<br>";

}
  
    






