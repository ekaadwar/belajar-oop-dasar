<?php 
	// class ContohStatic{
	// 	public static $angka = 1;

	// 	public static function halo(){
	// 		return "Halo " . self::$angka++ . " kali.";
	// 	}
	// }

	// echo ContohStatic::$angka;
	// echo "<br>";
	// echo ContohStatic::halo();
	// echo "<hr>";
	// echo ContohStatic::halo();

	class ContohStatic{
		public static $angka = 1;

		public function halo(){
			return "Halo ". self::$angka++ . " kali <br>";
		}
	}

	$obj = new ContohStatic();
	echo $obj->halo();
	echo $obj->halo();
	echo $obj->halo();
	echo "<hr>";
	$obj2 = new ContohStatic();
	echo $obj2->halo();
	echo $obj2->halo();
	echo $obj2->halo();
?>