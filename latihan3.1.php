<?php
class Kendaraan {
    var $jumlahRoda=4;
    var $warna;
    var $bahanBakar="Premium";
    var $harga=100000000;
    var $merek;
    var $tahunPembuatan=2004;
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
}
//instansiasi kelas
$ObjekKendaraan = new Kendaraan();//pembuatan objek dari kelas
echo "jumlahRoda : ".$ObjekKendaraan->jumlahRoda."<br />"; //proses instansiasi pemanggilan variable
echo "status Harga : ".$ObjekKendaraan->statusHarga()."<br />";//proses instansiasi//pemanggilan function dari kelas
echo "status Subsidi :".$ObjekKendaraan->statusSubsidi();
?>