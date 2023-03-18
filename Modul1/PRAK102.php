<?php

// NIM
$nim = 1;

// Deklarasi Variabel
$Jarijari = 4.2;
$tinggi = 5.4;
$panjang = 8.9;
$lebar = 14.7;
$sisi = 7.9;
$alasPrisma = 5.5;
$tinggiPrisma = 7.5;
$tinggiLimas = 8.5;

// Pernyataan switch berdasarkan digit terakhir dari $nim
switch ($nim % 10) {
    case 0:
    case 1:
        $tabung = 3.14 * $Jarijari * $Jarijari * $tinggi;
        echo number_format($tabung, 3);
        break;
    case 2:
    case 3:
        $kerucut = 1/3 * 3.14 * $Jarijari * $Jarijari * $tinggi;
        echo number_format($kerucut, 3);
        break;
    case 4:
    case 5:
        $bola = 4/3 * 3.14 * $Jarijari * $Jarijari * $Jarijari;
        echo number_format($bola, 3);
        break;
    case 6:
    case 7:
        $prismaAlasSegitiga = 1/2 * $alasPrisma * $tinggiPrisma;
        echo number_format($prismaAlasSegitiga, 3);
        break;
    case 8:
    case 9:
        $limasAlasPersegiPanjang = 1/3 * $panjang * $lebar * $tinggiLimas;
        echo number_format($limasAlasPersegiPanjang, 3);
        break;
    default:
        echo "NIM tidak valid";
        break;
}

?>
