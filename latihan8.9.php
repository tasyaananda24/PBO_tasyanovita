<?php
 
// buat class komputer
class komputer {
 
    // property dengan hak akses private dan protected
    private $jenis_processor = "Intel Core i7-4790 3.6GHz";
    protected $jenis_RAM = "DDR 4";
    public $jenis_VGA = "PCI Express";
 
    // method public untuk menampilkan processor
    public function tampilkan_processor() {
        return $this->jenis_processor;
    }
 
    // method public untuk menampilkan RAM
    public function tampilkan_ram() {
        return $this->jenis_RAM;
    }
 
    // method public untuk menampilkan VGA
    public function tampilkan_vga2() {
        return $this->jenis_VGA;
    }
}
 
// buat class laptop yang mewarisi dari komputer
class laptop extends komputer {
 
    // method untuk mengakses processor
    public function display_processor2() {
        return $this->tampilkan_processor();  // Memanggil method dari parent class
    }
 
    // method untuk mengakses RAM
    public function display_ram() {
        return $this->jenis_RAM;  // Mengakses property protected
    }
 
    // method untuk mengakses VGA
    public function display_vga() {
        return $this->tampilkan_vga2();  // Memanggil method dari parent class
    }
}
 
// instansiasi objek dari class komputer dan laptop
$komputer = new komputer();
$laptop = new laptop();
 
// jalankan method dari class komputer dan laptop
echo "Line 61 : " . $komputer->tampilkan_processor() . "<br />";
echo "Line 62 : " . $laptop->display_processor2() . "<br />";
echo "Line 63 : " . $laptop->display_ram() . "<br />";
echo "Line 64 : " . $laptop->display_vga() . "<br />";
 
?>
