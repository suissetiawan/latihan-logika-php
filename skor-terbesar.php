<?php
// SOAL
// buatlah sebuah file dengan nama skor-terbesar.php. Di dalam file tersebut buatlah sebuah function dengan nama skor_terbesar yang menerima parameter berupa array berisi array asosiatif data penilaian peserta bootcamp. function akan me-return sebuah array asosiatif yang berisi siswa dengan nilai tertinggi di masing-masing kelas.

function skor_terbesar($arr){
//kode di sini
  //daftar kelas
  $kelas = [];
  for ($i=0; $i < count($arr) ; $i++) { 
    if (!in_array($arr[$i]['kelas'], $kelas)) {
      array_push($kelas, $arr[$i]['kelas']);
    }
  }
  //memilah nilai tertinggi
  for ($i=0; $i < count($kelas); $i++) { 
    $skor = 0;
    for ($j=0; $j < count($arr) ; $j++) { 
      if ($arr[$j]['kelas'] == $kelas[$i]) {
        if ($arr[$j]['nilai'] > $skor) {
          $skor = $arr[$j]['nilai'];
          $output[$kelas[$i]] = $arr[$j];
        }
      }
    }
  }
  echo "<pre>";print_r($output);echo "<pre>";
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>