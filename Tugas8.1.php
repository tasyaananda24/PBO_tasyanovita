<?php
 
class Karyawan {
    private $nama;
    private $golongan;
    private $jamLembur;
    private $gajiPokok;
    const TARIF_LEMBUR = 15000;
 
    // Constructor
    public function __construct($nama, $golongan, $jamLembur) {
        $this->nama = $nama;
        $this->golongan = $golongan;
        $this->jamLembur = $jamLembur;
        $this->setGajiPokok();
    }
 
    // Destructor
    public function __destruct() {
        // Destructor kosong
    }
 
    // Set gaji pokok berdasarkan golongan
    private function setGajiPokok() {
        $gajiGolongan = [
            "Ib" => 1250000, "Ic" => 1300000, "Id" => 1350000,
            "IIa" => 2000000, "IIb" => 2100000, "IIc" => 2200000, "IId" => 2300000,
            "IIIa" => 2400000, "IIIb" => 2500000, "IIIc" => 2600000, "IIId" => 2700000,
            "IVa" => 2800000, "IVb" => 2900000, "IVc" => 3000000, "IVd" => 3100000
        ];
 
        if (array_key_exists($this->golongan, $gajiGolongan)) {
            $this->gajiPokok = $gajiGolongan[$this->golongan];
        } else {
            $this->gajiPokok = 0; // Jika golongan tidak valid
        }
    }
 
    // Hitung total gaji termasuk lembur
    public function getTotalGaji() {
        $gajiLembur = $this->jamLembur * self::TARIF_LEMBUR;
        return $this->gajiPokok + $gajiLembur;
    }
 
    // Mengembalikan data karyawan dalam array
    public function getInfo() {
        return [
            "nama" => $this->nama,
            "golongan" => $this->golongan,
            "jamLembur" => $this->jamLembur,
            "totalGaji" => $this->getTotalGaji()
        ];
    }
}
 
// Data karyawan dalam array
$karyawan = [
    new Karyawan("Winny", "IIb", 30),
    new Karyawan("Stendy", "IIIc", 32),
    new Karyawan("Alfred", "IVb", 30),
    new Karyawan("Ferdinand", "IIIc", 40)
];
 
// Menampilkan tabel karyawan
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th>Nama Karyawan</th><th>Golongan</th><th>Total Jam Lembur</th><th>Total Gaji</th></tr>";
 
foreach ($karyawan as $k) {
    $info = $k->getInfo();
    echo "<tr>";
    echo "<td>{$info['nama']}</td>";
    echo "<td>{$info['golongan']}</td>";
    echo "<td>{$info['jamLembur']}</td>";
    echo "<td>Rp " . number_format($info['totalGaji'], 2, ',', '.') . "</td>";
    echo "</tr>";
}
 
echo "</table>";
 
?>