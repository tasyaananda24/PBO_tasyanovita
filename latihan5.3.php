<?php
class kendaraan{
    
    var $bahanBakar;
    var $harga;
    var $tahunPembuatan;
    var $Jumlahpajak=0;
    var $Plat;
    



    function statusHarga(){
        if ($this->harga > 50000000)
          ($status = 'Mahal');
        else
            $status = 'Murah';
        return $status;
    }
    function StatusBBM(){
        if ($this->bahanBakar == "Premium" && $this->tahunPembuatan<2005 )
            $statusBBM = "Dapat Subsidi";
        else
        $statusBBM = "Tidak Dapat Subsidi";
    return $statusBBM;
    }

    function harga_bekas()
    {
        if ($this->tahunPembuatan > 2005){
          $Harga_bekas = $this->harga -($this->harga*0.2);
    }elseif($this->tahunPembuatan >= 2000 and $this->tahunPembuatan <= 2005){
         $Harga_bekas = $this->harga -($this->harga*0.3);
    }elseif($this->tahunPembuatan < 2000);
        $Harga_bekas = $this->harga -($this->harga*0.4);
    return $Harga_bekas;
}
    function pajak()
    { 
        if ($this->tahunPembuatan < 2017){
       $Pajak =  $this->harga * 0.025;
    return $Pajak;
    }
}
    function Operasi()
    {
        if ($this->Plat == "Genap") 
         $hariOperasi = "Selasa, Kamis dan Sabtu";
        else 
        $hariOperasi = "Senin, Rabu, Jumat dan Minggu";
    return $hariOperasi;
}
}

$kendaraan = new kendaraan();
$kendaraan-> harga = "50000000";
$kendaraan-> bahanBakar = "Premium";
$kendaraan-> tahunPembuatan = 1999;
$kendaraan->Plat = "Genap";

echo "Status Harga: " . $kendaraan->statusHarga();
echo "<br>";
echo "Status BBM: " . $kendaraan->StatusBBM();
echo "<br>";
echo "Harga Bekas : " . $kendaraan->harga_bekas();
echo "<br>";
echo "Jumlah Pajak : " . $kendaraan->pajak();
echo "<br>";
echo "Hari Operasi: " .  $kendaraan->Operasi();
