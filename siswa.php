<?php

    //Blue print class
    class Siswa {
        public $nama;
        public $nisn;
        public $gender;

        //fondasi
        public function __construct($nama, $nisn, $gender){
            $this->nama = $nama;
            $this->nisn = $nisn;
            $this->gender = $gender;
        }

        public function set_nilai($nilai_uts,$nilai_uas,$nilai_tugas){
            $this->nilai_uts = $nilai_uts;
            $this->nilai_uas = $nilai_uas;
            $this->nilai_tugas = $nilai_tugas;
        }

        public function nilai_akhir(){
            return ($this->nilai_uts + $this->nilai_uas + $this->nilai_tugas)/3;
        }



    }


//Initialisasi Objek
$siswa1 = new Siswa("Djaya", "0110120007", "Laki-laki");
$siswa2 = new Siswa("akbar", "023000213", "Laki-laki");

echo $siswa1->nama;
echo $siswa1->nisn;
echo "</br>";
$siswa1->set_nilai(90,85,70);
echo $siswa1->nilai_akhir();
echo "</br>";
echo $siswa2->nama;
echo $siswa2->nisn;
echo "</br>";
$siswa2->set_nilai(80,85,95);
echo $siswa2->nilai_akhir();




?>
