<?php
class mahasiswa
{
    private $nama;
    public function setNama($nama)
    {
        $this->nama = $nama;
    }
    public function getNama()
    {
        return $this->nama;
    }
}

$mhs1 = new mahasiswa();
$mhs1->setNama("andi");
echo "Nama Mahsasiwa : " . $mhs1->getNama();
?>