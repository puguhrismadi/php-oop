<?php
class Warga{
    //variabel global
    var $nama;
    var $alamat;
    //tahap 1
    public function personAwal(){
     echo $nama_lengkap="Adi Suradi";
     echo $alamat="Bogor";
    }
    //tahap 2
    public function person(){
        echo $nama_lengkap=$this->nama;
        echo $alamat=$this->alamat;
    }
    public function setPerson(){
        //menggunakan variabel global
        $this->nama="Nama 1";
        $this->alamat="Alamat 1";

    }
    public function person3($nama,$alamat){
        echo $nama_lengkap=$nama;
        echo $alamat=$alamat;
    }
}


?>