<?php 
	
	class Produk{
		public 	$judul = "judul",
				$penulis = "penulis",
				$penerbit = "penerbit",
				$harga = 0,
				$halaman = 0,
				$waktuMain = 0,
				$tipe;

		public function __construct($judul, $penulis, $penerbit, $harga, $halaman, $waktuMain, $tipe){
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
			$this->halaman = $halaman;
			$this->waktuMain = $waktuMain;
			$this->tipe = $tipe;
		}

		public function getLabel(){
			return "$this->penulis, $this->penerbit";
		}

		public function getInfoLengkap(){
			//Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp 30000) - 100 Halaman.
			//Game : Resident Evil 6 | Sinji Mikami, Capcom (Rp 500000) - 70 Jam.
			$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp {$this->harga}) ";
			if($this->tipe == "Komik"){
				$str .= "- {$this->halaman} Halaman.";
			}else if($this->tipe == "Game"){
				$str .= "- {$this->waktuMain} Jam.";
			}

			return $str;
		}
	}

	$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
	$produk2 = new Produk("Resident Evil 6", "Sinji Mikami", "Capcom", 270000, 0, 70, "Game");
	echo $produk1->getLabel();
	echo "<br>";
	echo $produk2->getLabel();
	echo "<br>";	

	echo "<br><br><br>Dengan Inheritance : <br>";
	echo $produk1->getInfoLengkap();
	echo "<br>{$produk2->getInfoLengkap()}";


 ?>