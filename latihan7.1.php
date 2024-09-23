<?php
class Manusia { // class induk
    // property class Manusia
    public $nama_saya;
 
    // method pada class Manusia
    function berinama($saya) {
        $this->nama_saya = $saya;
    }
}
 
// class turunan atau sub class dari class Manusia
class Teman extends Manusia {
    // property class Teman
    public $nama_teman;
 
    // method pada class Teman
    function berinamateman($teman) {
        $this->nama_teman = $teman;
    }
}
 
// instansiasi class Teman
$objectTeman = new Teman;
 
// memanggil method dari class Manusia
$objectTeman->berinama("Dika");
$objectTeman->berinamateman("Andra");
 
// menampilkan isi property
echo "Nama Saya: " . $objectTeman->nama_saya . "<br/>";
echo "Nama Teman Saya: " . $objectTeman->nama_teman;
?>
