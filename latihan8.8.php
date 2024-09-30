<?php
class manusia{
    protected $nama="Ardi";
    var $kelas="SI 2";

    protected function nama(){
        return "Nama : ".$this->nama;
    }
    public function tampilkan_nama(){
        return $this->nama();
    }
    function tampilkan_kelas(){
        return "Kelas :".$this->kelas; 
    }
}
$manusia = new manusia();
echo "Nama :". $manusia->tampilkan_nama()."<br/>";
echo "Kelas : ".$manusia->tampilkan_kelas(); 