<?php
class pegadaian{
    var $Bpinjaman=1000000;
    var $bunga=0.1;
    var $lamaAngsuran=5;
    var $Keterlambatan=45;
    var $denda=0.15; 

function TotalPinjaman()
{
    return ($this->Bpinjaman  * $this->bunga) + $this->Bpinjaman ;
}
function BesarAngsuran()
{
    return $this->TotalPinjaman() / $this->lamaAngsuran;
}
function dendaAngsuran()
{
    if($this->Keterlambatan > 40 ){
        return $this->BesarAngsuran() * $this->denda;
    }
    else{
        return "TIDAK TERLAMBAT";
    }



}
}

$ObjekPegadaian = new Pegadaian;
echo "TOKO PEGADAIAN SYARIAH"."<br />";
echo "Jl Keadilan No 16.<br /> Telp. 72353459.<br />"."<br />";
   
    echo "Total Pinjaman :".$ObjekPegadaian->TotalPinjaman()."<br />";
    echo "Besar Angsuran :". $ObjekPegadaian->BesarAngsuran()."<br />";
    echo "denda angsuran :".$ObjekPegadaian->dendaAngsuran(); 
    
?>

