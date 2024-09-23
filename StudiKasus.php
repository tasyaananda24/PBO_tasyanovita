<?php
 
class Segitiga
{
    var $t;
 
    public function setTinggi($x)
    {
        $this->t = $x;
    }
 
    public function getTinggi()
    {
        return $this->t;
    }
 
    public function Segitiga1()
    {
        for ($i = 1; $i <= 5; $i++) {
            for ($j = 5; $j > $i; $j--) {
                echo "&nbsp;&nbsp;&nbsp";
            }
            for ($j = 1; $j <= (2 * $i); $j++) {
                echo "* ";
            }
         
            echo "<br />";
        }
    }
 
 
    public function Segitiga2()
    {
        for ($i = 1; $i <= $this->t; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
 
        for ($i = $this->t - 1; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    }
 
    public function Segitiga3()
    {
        for ($i = 1; $i <= $this->t; $i++) {
            for ($j = $this->t; $j > $i; $j--) {
                echo "&nbsp;&nbsp;";
            }
            for ($k = 1; $k <= $i; $k++) {
                echo "*";
            }
            echo "<br>";
        }
 
        for ($i = $this->t - 1; $i >= 1; $i--) {
            for ($j = $this->t; $j > $i; $j--) {
                echo "&nbsp;&nbsp;";
            }
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    }
}
 
//$segitiga1 = new Segitiga();
//$segitiga1->setTinggi(6);
//echo "<br>Segitiga Kesatu:<br>";
//$segitiga1->Segitiga1();
 
 
 
//$segitiga2 = new Segitiga();
//$segitiga2->setTinggi(6);
//echo "Segitiga Kedua:<br>";
//$segitiga2->Segitiga2();
 
 
//$segitiga3 = new Segitiga();
//$segitiga3->setTinggi(6);
//echo "<br>Segitiga Ketiga:<br>";
//$segitiga3->Segitiga3();



$tinggiSegitiga = [5,6,6];
$segitigaArray = [];

foreach ($tinggiSegitiga as $t) {
    $segitiga = new Segitiga();
    $segitiga->setTinggi($t);
    $segitigaArray[] = $segitiga;
}


foreach ($segitigaArray as $segitiga) {
    $segitiga->Segitiga1();
    echo "<br>";
    $segitiga->Segitiga2();
    echo "<br>";
    $segitiga->Segitiga3();
    echo "<br>"; 
}
?>

