<?php 
	class Produk{
		private	$judul,
				$penulis,
				$penerbit;
				
		protected $diskon = 0;

		private $harga;

		public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0){
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
		}

		public function setJudul($judul){
			$this->judul = $judul;
		}

		public function getJudul(){
			return $this->judul;
		}

		public function getHarga(){
			return $this->harga - ($this->harga * $this->diskon / 100);
		}

		public function getLabel(){
			return "$this->penulis, $this->penerbit";
		}

		public function getInfoProduk(){
			$str = "{$this->judul} | {$this->getLabel()} (Rp {$this->harga}) ";
			return $str;
		}
	}

	class Komik extends Produk {
		public $halaman;

		public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $halaman=0){
			parent::__construct($judul, $penulis, $penerbit, $harga);
			$this->halaman = $halaman;
		}

		public function getInfoProduk(){
			$str = "Komik : ". parent::getInfoProduk() ." - {$this->halaman} Halaman.";
			return $str;
		}
	}

	class Game extends Produk{
		public $waktuMain;

		public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $waktuMain=0){
			parent::__construct($judul, $penulis, $penerbit, $harga);
			$this->waktuMain = $waktuMain;
		}

		public function setDiskon($diskon){
			$this->diskon = $diskon;
		}

		public function getInfoProduk(){
			$str = "Games : ". parent::getInfoProduk() ." ~ {$this->waktuMain} Jam.";
			return $str;
		}
	}

	$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
	$produk2 = new Game("Resident Evil 6", "Sinji Mikami", "Capcom", 270000, 70);
	
	echo "Dengan Overriding : <br>";
	echo $produk1->getInfoProduk();
	echo "<br>";
	echo $produk2->getInfoProduk();
	echo "<hr>";

	$produk2->setDiskon(50);
	echo $produk2->getHarga();
	echo "<hr>";

	$produk1->setJudul("Naruto Shippuden");
	echo $produk1->getJudul();

 ?>