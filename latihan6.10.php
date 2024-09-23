<?php
class Segitiga{
    public function Segitiga1()
    {
        $hasil = "";
        for ($i = 1; $i <= 5; $i++) {
            for ($j = 7; $j > $i; $j--) {
                echo "&nbsp;&nbsp;&nbsp";
            }
            for ($j = 1; $j <= (2 * $i); $j++) {
                echo "* ";
            }
         
            echo "<br />";
        }
        return $hasil;
    }
    public function Segitiga2()
    {
        for ($i = 1; $i <= 6 ; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
 
        for ($i = 6 - 1; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    }
    public function Segitiga3()
    {
        for ($i = 1; $i <= 6; $i++) {
            for ($j = 6 ; $j > $i; $j--) {
                echo "&nbsp;&nbsp;";
            }
            for ($k = 1; $k <= $i; $k++) {
                echo "*";
            }
            echo "<br>";
        }
 
        for ($i = 6 - 1; $i >= 1; $i--) {
            for ($j = 6 ; $j > $i; $j--) {
                echo "&nbsp;&nbsp;";
            }
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    }
}

$ObjekPerulangan = new Segitiga();
echo $ObjekPerulangan->Segitiga1()."<br/>";
echo $ObjekPerulangan->Segitiga2();
echo $ObjekPerulangan->Segitiga3();