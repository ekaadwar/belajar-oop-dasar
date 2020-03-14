<?php 
	//parent class
	class Mobil{
		public 	$nama, $merk, $warna,
				$topSpeed, $jumlahPenumpang;

		public function tambahKecepatan(){
			return "Kecepatan bertambah.";
		}
	}

	//child class
	class MobilSport extends Mobil{
		public $turbo = false;

		public function jalankanTurbo(){
			$this->turbo = true;
			return "Turbo diaktifkan";
		}
	}

	$mobil1 = new MobilSport();
	echo $mobil1->tambahKecepatan()."<br>";
	echo $mobil1->jalankanTurbo();
 ?>