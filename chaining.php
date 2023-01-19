<?php

    class Murid {
        public $nis, $nama, $kelas;

        public function set_nis($nis_murid) {
            $this->nis = $nis_murid;
            return $this;
        }

        public function set_nama($nama_murid) {
            $this->nama = $nama_murid;
            return $this;
        }

        public function set_kelas($kelas_murid) {
            $this->kelas = $kelas_murid;
            return $this;
        }

        public function getBio() {
            return "Nama saya adalah " . $this->nama . " dengan NIS " . $this->nis . " kelas " . $this->kelas;
        }
    }

    $murid_idn = new Murid();
    $murid_idn->set_nis(1604023101);
    $murid_idn->set_nama("Maryam");
    $murid_idn->set_kelas("10 RPL");
    echo $murid_idn->getBio();

    echo "<br>";
    echo "<br>";

    $murid_idn2 = new Murid();
    echo $murid_idn2->set_nis(1002871021)->set_nama("Azkiya")->set_kelas("10 RPL")->getBio();


?>