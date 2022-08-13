<?php

class animal
{
    public $jumlah_kaki, $bisa_terbang;
}

class burung_hantu extends animal
{
    function bersuara()
    {
        return "whoo";
    }
}

class kuda extends animal
{
    function bersuara()
    {
        return "whinny";
    }
}

class kerbau extends animal
{
    function bersuara()
    {
        return "kuak";
    }
}

class  unta extends animal
{
    function bersuara()
    {
        return "aauuggh";
    }
}

echo "Animal <br>";
echo "<hr>";
// burung hantu
$miti = new burung_hantu;
$miti->jumlah_kaki = 2;
$miti->bisa_terbang = "bisa terbang";

echo "miti adalah burung hantu <br>";
echo "punya kaki sebanyak:" . $miti->jumlah_kaki . "<br>";
echo $miti->bisa_terbang . "<br>";
echo "suaranya: " . $miti->bersuara() . "<br>";

echo "<hr>";

// kuda
$dita = new kuda;
$dita->jumlah_kaki = 4;
$dita->bisa_terbang = "tidak bisa terbang";

echo "dita adalah kuda <br>";
echo "punya kaki sebanyak:" . $dita->jumlah_kaki . "<br>";
echo $dita->bisa_terbang . "<br>";
echo "suaranya: " . $dita->bersuara() . "<br>";

echo "<hr>";

// kerbau
$uti = new kerbau;
$uti->jumlah_kaki = 4;
$uti->bisa_terbang = "tidak bisa terbang";

echo "uti adalah kerbau <br>";
echo "punya kaki sebanyak:" . $uti->jumlah_kaki . "<br>";
echo $uti->bisa_terbang . "<br>";
echo "suaranya: " . $uti->bersuara() . "<br>";

echo "<hr>";

// unta
$slowi = new unta;
$slowi->jumlah_kaki = 4;
$slowi->bisa_terbang = "tidak bisa terbang";

echo "slowi adalah unta <br>";
echo "punya kaki sebanyak:" . $slowi->jumlah_kaki . "<br>";
echo $slowi->bisa_terbang . "<br>";
echo "suaranya: " . $slowi->bersuara() . "<br>";

echo "<hr>";