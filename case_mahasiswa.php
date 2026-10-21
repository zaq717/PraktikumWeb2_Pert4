<?php
class mahasiswa
{
    private $nim;
    private $nama;
    private $prodi;
    private $nilai;
    private $semester;
    public function __construct($nim, $nama, $prodi, $semester)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->semester = $semester;
    }
    public function setNilai($nilai)
    {
        if ($nilai >= 0 && $nilai <= 100) {
            $this->nilai = $nilai;
            echo "Nilai : " . $this->getNilai() . "<br>";
        } else {
            echo "Nilai : nilai harus berada diantara 0 sampai 100" . "<br>";
        }
    }
    public function tentukanGrade()
    {
        if ($this->nilai === null || $this->nilai < 0 || $this->nilai > 100) {
            echo "Grade : Tidak dapat menentukan grade (Nilai tidak valid)";
            return;
        }
        if ($this->nilai >= 80) {
            echo "Grade : A";
        } else if ($this->nilai >= 70) {
            echo "Grade : B";
        } else if ($this->nilai >= 60) {
            echo "Grade : C";
        } else if ($this->nilai >= 50) {
            echo "Grade : D";
        } else {
            echo "Grade : E";
        }
    }
    public function getNim()
    {
        return $this->nim;
    }
    public function getNama()
    {
        return $this->nama;
    }
    public function getProdi()
    {
        return $this->prodi;
    }
    public function getNilai()
    {
        return $this->nilai;
    }
     public function getSemester()
    {
        return $this->semester;
    }
}
$mhs1 = new mahasiswa(
    "202457201",
    "Arifin",
    "Sistem Informasi",
    "5"
);
echo "NIM : " . $mhs1->getNim() . "<br>";
echo "Nama : " . $mhs1->getNama() . "<br>";
echo "Prodi : " . $mhs1->getProdi() . "<br>";
echo "Semester : " . $mhs1->getSemester() . "<br>";
$mhs1->setNilai(1000);
$mhs1->tentukanGrade();
?>