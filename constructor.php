<?php 
	
	class Produk{
		public 	$judul = "judul",
				$penulis = "penulis",
				$penerbit = "penerbit",
				$harga = 0;

		public function __construct($judul, $penulis, $penerbit, $harga){
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
		}

		public function getLabel(){
			return "$this->penulis, $this->penerbit";
		}
	}

	$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
	$produk2 = new Produk("Resident Evil 6", "Sinji Mikami", "Capcom", 270000);
	echo $produk1->getLabel();
	echo "<br>";
	echo $produk2->getLabel();

 ?>