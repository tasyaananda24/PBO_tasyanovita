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
    function setbhnbakar($x)
    {
        $this->bahanbakar = $x;
    }
    function getBhnBakar()
    {
        return $this->bahanBakar;
    }
    function settahun($x)
    {
        $this->tahunPembuatan = $x;
    }
    function getTahun()
    {
        return $this->tahunPembuatan;
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
$Data1 = array('Toyota', '4', '160000000', 'Merah', 'Pertamax', '2014');
$Data2 = array('Honda Scoopy', '2', '13000000', 'Putih', 'Premiun', '2005');
$Data3 = array('Isuzu Panther', '4', '40000000', 'Hitam', 'Solar', '1994');

for ($i = 1; $i <= 3; $i++) {
    for ($h = 0; $h <= 5; $h++) {
        ${"kendaraan$i"} = new Kendaraan();
        ${"kendaraan$i"}->setMerek(${"Data$i"}[0]);
        ${"kendaraan$i"}->setjmlRoda(${"Data$i"}[1]);
        ${"kendaraan$i"}->setHarga(${"Data$i"}[2]);
        ${"kendaraan$i"}->setwarna(${"Data$i"}[3]);
        ${"kendaraan$i"}->setbhnbakar(${"Data$i"}[4]);
        ${"kendaraan$i"}->settahun(${"Data$i"}[5]);
    }
}

for ($i = 1; $i <= 3; $i++) {
    echo "kendaraan$i<br>"
        . ${"kendaraan$i"}->getMerek() . "<br>"
        . ${"kendaraan$i"}->getJumlahRoda() . "<br>"
        . ${"kendaraan$i"}->getHarga() . "<br>"
        . ${"kendaraan$i"}->getwarna() . "<br>"
        . ${"kendaraan$i"}->getBhnBakar() . "<br>"
        . ${"kendaraan$i"}->getTahun() . "<br>"
        . ${"kendaraan$i"}->statusHarga() . "<br>";

}

