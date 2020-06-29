<?php
// soal
// buatlah file dengan nama tentukan-deret-aritmatika.php. Di dalam file tersebut buatlah sebuah function dengan nama tentukan_deret_aritmatika yang menerima parameter berupa array berisi angka-angka. function akan mengecek apakah kumpulan angka pada array tersebut merupakan suatu deret aritmatika atau bukan. Jika merupakan deret aritmatika maka function me-return true, selain itu maka me-return false. Contoh jika parameternya [1, 3, 5, 7] maka function akan me-return true karena array tersebut adalah deret aritmatika dengan beda 2.
function tentukan_deret_aritmatika($arr) {
// kode di sini
	if (count($arr) < 2) {
		return "true<br>";
	}
	$selisih = $arr[1]-$arr[0];
	for ($i=0; $i < count($arr)-1 ; $i++) { 
		if ($selisih !== ($arr[$i+1]-$arr[$i])) {
			return "false<br>";
		}
	}
	return "true<br>";
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>