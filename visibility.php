<?php 
	class Produk{
		public	$judul = "judul",
				$penulis = "penulis",
				$penerbit = "penerbit";
				
		private $harga = 0;

		public function __construct($judul, $penulis, $penerbit, $harga){
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
		}

		public function getLabel(){
			return "$this->penulis, $this->penerbit";
		}

		public function getInfoLengkap(){
			$str = "{$this->judul} | {$this->getLabel()} (Rp {$this->harga}) ";
			return $str;
		}

		public function getHarga(){
			return $this->harga;
		}
	}

	class Komik extends Produk {
		public $halaman;

		public function __construct($judul, $penulis, $penerbit, $harga, $halaman){
			parent::__construct($judul, $penulis, $penerbit, $harga);
			$this->halaman = $halaman;
		}

		public function getInfoLengkap(){
			$str = "Komik : ". parent::getInfoLengkap() ." - {$this->halaman} Halaman.";
			return $str;
		}
	}

	class Game extends Produk{
		public $waktuMain;

		public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain){
			parent::__construct($judul, $penulis, $penerbit, $harga);
			$this->waktuMain = $waktuMain;
		}

		public function getInfoLengkap(){
			$str = "Games : ". parent::getInfoLengkap() ." - {$this->waktuMain} Jam.";
			return $str;
		}
	}

	$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
	$produk2 = new Game("Resident Evil 6", "Sinji Mikami", "Capcom", 270000, 70);
	
	echo "Dengan Overriding : <br>";
	echo $produk1->getInfoLengkap();
	echo "<br>{$produk2->getInfoLengkap()}";
	echo "<hr>";

	echo $produk2->getHarga();
 ?>