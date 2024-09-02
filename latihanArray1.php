<?php
class Mahasiswa
{
    var $Nama;
    var $Kelas;
    var $MataKuliah;
    var $Nilai;

    function setNama($x)
    {
        $this->Nama = $x;
    }

    function getNama()
    {
        return $this->Nama;
    }
    function setKelas($x)
    {
        $this->Kelas = $x;
    }
    function getKelas()
    {
        return $this->Kelas;
    }
    function setMataKuliah($x)
    {
        $this->MataKuliah = $x;
    }
    function getMataKuliah()
    {
        return $this->MataKuliah;
    }
    function setNilai($x)
    {
        $this->Nilai = $x;
    }
    function getNilai()
    {
        return $this->Nilai;
    }
    function Kelulusan()
    {
        if ($this->Nilai >= 75)
            $status = "Lulus";
        else
            $status = "Tidak Lulus";
        return $status;
    }
}
$Data1 = array('Aditya', 'SI 2', 'Pemrograman Berorientasi Objek', '80');
$Data2 = array('Shinta', 'SI 2', 'Pemrograman Berorientasi Objek', '75');
$Data3 = array('Ineu', 'SI 2', 'Pemrograman Berorientasi Objek', '55');
for ($i = 1; $i <= 3; $i++) {
    for ($h = 0; $h <= 4; $h++) {
        ${"Mahasiswa$i"} = new Mahasiswa();
        ${"Mahasiswa$i"}->setNama(${"Data$i"}[0]);
        ${"Mahasiswa$i"}->setKelas(${"Data$i"}[1]);
        ${"Mahasiswa$i"}->setMataKuliah(${"Data$i"}[2]);
        ${"Mahasiswa$i"}->setNilai(${"Data$i"}[3]);
    }
}
for ($i = 1; $i <= 3; $i++) {
    echo "Mahasiswa$i<br>", "Nama : "
        . ${"Mahasiswa$i"}->getNama() . "<br>", "Kelas : "
        . ${"Mahasiswa$i"}->getKelas() . "<br>", "MataKuliah : "
        . ${"Mahasiswa$i"}->getMataKuliah() . "<br>", "Nilai : "
        . ${"Mahasiswa$i"}->getNilai() . "<br>", "Keterangan : "
        . ${"Mahasiswa$i"}->Kelulusan() . "<br>";
    echo "<br>";
}