<?php
class kendaraan {
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;
 
    function statusHarga() {
        // Determine the status based on the price of the vehicle
        if ($this->harga > 50000000) {
            $status = 'Mahal';
        } else {
            $status = 'Murah';
        }
        return $status;
    }
}
 
// Create the first vehicle object
$objekKendaraan1 = new kendaraan();
$objekKendaraan1->merek = "Yamaha MIO";  // set property
$objekKendaraan1->harga = 10000000; // set property
 
// Create the second vehicle object
$objekKendaraan2 = new kendaraan();
$objekKendaraan2->merek = "Toyota Avanza"; // set property
$objekKendaraan2->harga = 100000000; // set property

$objekKendaraan3 = new kendaraan();
$objekKendaraan3->merek = "CIVIC"; 
$objekKendaraan3->harga = 250000000;
 
// Output the details for the second vehicle
echo "Merek: " . $objekKendaraan3->merek;
echo "<br>";
echo "Nominal Harga: " . $objekKendaraan3->harga; 
echo "<br>";
echo "Status Harga Kendaraan: " . $objekKendaraan3->statusHarga(); 
?>
