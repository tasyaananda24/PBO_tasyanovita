<?php


class belanja{
    var $pembeli;
    var $member;
    var $diskon;
    var $total_belanja;

        function Kartumember($member){

            if($member){
                switch (true){
                case ($this->total_belanja > 500000):
                $diskon = 50000;
                break;

                case($this->total_belanja > 100000) :
                $diskon = 15000;
                }
                break; 
            
                case 0:
                switch(false){}
                        {if($this->total_belanja > 100000)
                        $diskon = 5000;
                    return $diskon; 
                    

                }
            }
        }
    }
$pembeli = new belanja();
$pembeli1 = ["Pembeli1", "Memiliki"]
$pembeli->pembeli = 1;
$pembeli->member = "Memiliki";
$pembeli->total_belanja= 200000;


//$pembeli2->pembeli = 2;
//$pembeli2->member = 1;
//$pembeli2->total_belanja= 570000;

echo "Pembeli :". $pembeli->pembeli;
echo "<br>";
echo " Member : " . $pembeli->member;
echo "<br>";
echo "Total belanja :" .$pembeli->total_belanja;
echo "<br>";
echo "Diskon :" . $pembeli->diskon;







