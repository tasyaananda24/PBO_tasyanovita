<?php
class bangunRuang{}
    $user="tasya";
    $pass=12345;
    $bangun;
    

    function login() {
        echo "Selamat datang di Aplikasi Bangun Ruang CLI\n";
        echo "Silahkan Login terlebih dahulu:\n";
        echo "Masukkan username: ";
        $username = trim(fgets(STDIN));
        echo "Masukkan password: ";
        $password = trim(fgets(STDIN));
       
        return array($username, $password);
    }
    function kode_login($username, $password) {
        global $user, $pass;
        return ($username == $user && $password == $pass);
    }
    function BangunRuang() {
        echo "Selamat datang, Anda telah berhasil login di Aplikasi Bangun Ruang CLI\n";
        echo "Silahkan pilih salah satu bangun ruang:\n";
        echo "Pilih nomor bangun ruang: ";
        echo "1. Persegi\n";
        echo "2. Persegi Panjang\n";
        echo "3. Segitiga\n";
        echo "4. Lingkaran\n";
         echo "5. Belah Ketupat\n";
         echo "Pilih nomor bangun ruang: ";
         $pilihan = trim(fgets(STDIN));
 
        switch($pilihan) {
        case 1:
            hitung_persegi();
            break;
        case 2:
            hitung_persegi_panjang();
            break;
        case 3:
            hitung_segitiga();
            break;
        case 4:
            hitung_lingkaran();
            break;
        case 5:
            hitung_belah_ketupat();
            break;
        default:
            echo "Pilihan tidak valid!\n";
    }}
    function hitung_persegi() {
        echo "Masukkan sisi persegi (cm): ";
        $sisi = trim(fgets(STDIN));
        $luas = $sisi * $sisi;
        $keliling = 4 * $sisi;
        echo "Luas Persegi: " . $luas . " cm²\n";
        echo "Keliling Persegi: " . $keliling . " cm²\n";
    }
    function hitung_persegi_panjang() {
        echo "Masukkan panjang persegi panjang (cm): ";
        $panjang = trim(fgets(STDIN));
        echo "Masukkan lebar persegi panjang (cm): ";
        $lebar = trim(fgets(STDIN));
        $luas = $panjang * $lebar;
        $keliling = 2*($panjang+$lebar);
        echo "Luas Persegi Panjang: " . $luas . " cm²\n";
        echo "Keliling Persegi Panjang: " . $keliling . " cm²\n";
    }
     
    // Fungsi untuk menghitung luas segitiga
    function hitung_segitiga() {
        echo "Masukkan alas segitiga (cm): ";
        $alas = trim(fgets(STDIN));
        echo "Masukkan tinggi segitiga (cm): ";
        $tinggi = trim(fgets(STDIN));
        $luas = 0.5 * $alas * $tinggi;
        echo "Luas Segitiga: " . $luas . " cm²\n";
    }
     
    // Fungsi untuk menghitung luas lingkaran
    function hitung_lingkaran() {
        echo "Masukkan jari-jari lingkaran (cm): ";
        $jari_jari = trim(fgets(STDIN));
        $luas = pi() * pow($jari_jari, 2);
        echo "Luas Lingkaran: " . $luas . " cm²\n";
    }
     
    // Fungsi untuk menghitung luas belah ketupat
    function hitung_belah_ketupat() {
        echo "Masukkan diagonal 1 belah ketupat (cm): ";
        $diagonal1 = trim(fgets(STDIN));
        echo "Masukkan diagonal 2 belah ketupat (cm): ";
        $diagonal2 = trim(fgets(STDIN));
        $luas = 0.5 * $diagonal1 * $diagonal2;
        echo "Luas Belah Ketupat: " . $luas . " cm²\n";
    }
     

    list($username, $password) = login();
     
    if (kode_login($username, $password)) {
        bangunRuang();
    } else {
        echo "Mohon maaf, username dan password yang Anda masukkan salah!\n";
        echo "Silahkan kembali login.\n";
        list($username, $password) = tampilkan_form_login();
        if (kode_login($username, $password)) {
            bangunRuang();
        } else {
            echo "Login gagal, program berhenti.\n";
        }
    }





    //private function setBangunRuang(){
       // $bangunRuang=["persegi" =>1, "Persegi Panjang"=>2, "Segitiga"=>3, "Lingkaran"=>4, "Belah Ketupat"=>5];

    
    
    
  
    
    
