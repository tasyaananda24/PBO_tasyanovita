<?php
class Kendaraan {
    var $jumlahRoda=4;
    var $warna;
    var $bahanBakar="Premium";
    var $harga=100000000;
    var $merek;
    var $tahunPembuatan=2004;
    var $penyusutan=2000000;
    var $lama=3;
    
    function statusHarga()
    {
        if($this->harga>50000000)
        {
            return "Harga Kendaraan Mahal";

        }
        else
        {
            return "Harga Kendaraan Murah";
        }
    }
        function statusSubsidi()
        {
            if($this ->tahunPembuatan < 2005 && $this->bahanBakar= "Premium")
            {
            return "DAPAT SUBSIDI";
        }
        else {
        return "TIDAK DAPAT SUBSIDI";
        }
    }
    function hargabekas()
    {
        return $this->harga*0.7;
    }
}
//Objek 1
$objekKendaraan1 = new Kendaraan;
$objekKendaraan1 ->harga=1000000;
$objekKendaraan1 ->tahunPembuatan = 1999;

//Objek 2
$objekKendaraan2 = new Kendaraan;
$objekKendaraan2 -> bahanBakar = "Pertamax";
$objekKendaraan2->tahunPembuatan = 1999; 
echo "Status Harga : ".$objekKendaraan2 ->statusHarga();
echo "<br>";
echo "Status BBM: ".$objekKendaraan2 ->statusSubsidi();
echo "<br>";
echo "Harga Bekas: ". $objekKendaraan2 ->hargabekas();
?>