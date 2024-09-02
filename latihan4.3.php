<?php
class kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;
    var $tahunPembuatan;

    function setMerek($x)
    {
        $this->merek = $x;
    }

    function getMerek()
    {
        return $this->merek;
    }
    function setHarga($x)
    {
        $this->harga = $x;
    }
    function getHarga()
    {
        return $this->harga;
    }
    function setjmlRoda($x)
    {
        $this->jumlahRoda = $x;
    }
    function getJumlahRoda()
    {
        return $this->jumlahRoda;
    }
    function setwarna($x)
    {
        $this->warna = $x;
    }
    function getwarna()
    {
        return $this->warna;
    }
    function statusHarga()
    {
        if ($this->harga > 50000000)
            $status = 'Mahal';
        else
            $status = 'Murah';
        return $status;

    }

}

$kendaraan1 = new kendaraan;
$kendaraan1->setMerek('Yamaha Mio');
$kendaraan1->setHarga(10000000);
$kendaraan1->setjmlRoda(4);
$kendaraan1->setwarna("Merah");
echo $kendaraan1->getMerek();
echo "<br>";
echo $kendaraan1->getHarga();
echo "<br>";
echo $kendaraan1->getJumlahRoda();
echo "<br>";
echo $kendaraan1->getwarna();
echo "<br>";
echo $kendaraan1->statusHarga();
echo "<br>";
echo "<br>";
$kendaraan2 = new kendaraan;
$kendaraan2->setMerek('BMW');
$kendaraan2->setHarga(200000000);
$kendaraan2->setjmlroda(4);
$kendaraan2->setwarna("Abu-abu");
echo $kendaraan2->getMerek();
echo "<br>";
echo $kendaraan2->getHarga();
echo "<br>";
echo $kendaraan2->getJumlahRoda();
echo "<br>";
echo $kendaraan2->getwarna();
echo "<br>";
echo $kendaraan2->statusHarga();
?>