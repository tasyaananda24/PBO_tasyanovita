<?php
class Angsuran {
    var $pinjaman;
    var $bunga;
    var $lamaAngsuran;
    var $angsuran;

    public function setPinjaman($x) {
        $this->pinjaman = $x;
    }
    public function getPinjaman() {
        return $this->pinjaman;
    }
    public function setBunga($bunga) {
        $this->bunga = $bunga;
    }
    public function getBunga() {
        return $this->bunga;
    }
    public function setLamaAngsuran($lamaAngsuran) {
        $this->lamaAngsuran = $lamaAngsuran;
    }
    public function getLamaAngsuran() {
        return $this->lamaAngsuran;
    }

    public function hitungAngsuran() {
        $angsuranPokok = $this->pinjaman / $this->lamaAngsuran;
        $dataAngsuran = array();

        for ($i = 1; $i <= $this->lamaAngsuran; $i++) {
            $bungaBulanIni = ($this->pinjaman * ($this->bunga / 100))/$this->lamaAngsuran ;
            $totalAngsuran = $angsuranPokok + ($bungaBulanIni * ($this->lamaAngsuran - $i + 1));
            $this->angsuran[] = $totalAngsuran;

            $dataAngsuran[] = array(
                'bulan' => $i,
                'angsuran_pokok' => $angsuranPokok,
                'bunga' => $bungaBulanIni,
                'total_angsuran' => $totalAngsuran
            );
        }

        return $dataAngsuran;
    }
    public function getAngsuran() {
        return $this->angsuran;
    }
}

$angsuran = new Angsuran();
$angsuran->setPinjaman(1000000);
$angsuran->setBunga(10);
$angsuran->setLamaAngsuran(5);

$dataAngsuran = $angsuran->hitungAngsuran();

echo "TOKO PEGADAIAN SYARIAH\n", "<br>";
echo "Jl Keadilan No 16\n", "<br>";
echo "Telp 732746238\n\n", "<br>";
echo "Program Penghitung Besaran Angsuran Hutang\n", "<br>";
echo "Besaran Pinjaman : Rp." . number_format($angsuran->getPinjaman(), 0, ',', '.') . "\n", "<br>";
echo "Masukan Besaran Bunga (%) : " . $angsuran->getBunga() . "\n", "<br>";
echo "Lama Angsuran (bulan) : " . $angsuran->getLamaAngsuran() . "\n\n", "<br>";


foreach ($dataAngsuran as $angsuran) {
echo "<br>";
echo "Angsuran " . $angsuran['bulan'] . ": ";
echo number_format($angsuran['angsuran_pokok'], 0, ',', '.') . " + ";
echo number_format($angsuran['bunga'], 0, ',', '.') . " = " ;
echo number_format($angsuran['total_angsuran'], 0, ',', '.') ;
}