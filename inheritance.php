<?php 
	
	class Produk{
		public 	$judul = "judul",
				$penulis = "penulis",
				$penerbit = "penerbit",
				$harga = 0;

		public function __construct($judul, $penulis, $penerbit, $harga, $halaman, $waktuMain){
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
			$this->halaman = $halaman;
			$this->waktuMain = $waktuMain;
		}

		public function getLabel(){
			return "$this->penulis, $this->penerbit";
		}

		public function getInfoLengkap(){
			$str = "{$this->judul} | {$this->getLabel()} (Rp {$this->harga}) ";
			return $str;
		}
	}

	class Komik extends Produk {
		public $jmlHalaman;

		public function getInfoLengkap(){
			$str = "Komik : {$this->judul} | {$this->getLabel()} (Rp {$this->harga}) - {$this->halaman} Halaman.";
			return $str;
		}
	}

	class Game extends Produk{
		public $waktuMain;

		public function getInfoLengkap(){
			$str = "Games : {$this->judul} | {$this->getLabel()} (Rp {$this->harga}) - {$this->waktuMain} Jam.";
			return $str;
		}
	}

	$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);
	$produk2 = new Game("Resident Evil 6", "Sinji Mikami", "Capcom", 270000, 0, 70);
	
	echo "Dengan Inheritance : <br>";
	echo $produk1->getInfoLengkap();
	echo "<br>{$produk2->getInfoLengkap()}";
 ?>