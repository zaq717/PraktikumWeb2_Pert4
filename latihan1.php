<?php
class Mahasiswa
{
    public $nama;
    public $nilai;
}

$mhs1 = new Mahasiswa();
$mhs1->nama="andi";
$mhs1->nilai=70;
echo "Nama :" . $mhs1->nama ."<br>";
echo "Nilai :" . $mhs1->nilai;
?>