<?php
// perulangan for
for ($i = 0; $i< 10; $i++){
//blok kode yang akan di sini!
}
// contoh
for ($i = 0; $i < 10; $i++){
    echo "<h2>Ini perulangan ke-$i</h2>";
}

// perulangan while
while (<kondisi>){
    //blok kode yang akan di ulang di sini
}
// contoh
$ulangi = 0;
while($ulangi < 10){
    echo "<p>Ini adalah perulangan ke-$ulangi</p>";
    $ulangi++;
}

// perulangan do/while
do {
    // blok kode yang akan diulang
} while (<kondisi>);
// contoh
$ulangi = 10;
while($ulangi < 10){
    echo "<p>Ini adalah perulangan ke-$ulangi</p>";
    $ulangi--;
    while ($ulangi > 0);
    
// perulangan foreach
foreach($array as $data){
    echo $data;
}
// contoh
$books = [
    "Panduan Belajar PHP Untuk Pemula",
    "Membangun Aplikasi Web dengan PHP",
    "Tutorial PHP dan MYSQL",
    "Membuat Chat Bot dengan PHP",
]:
echo "<h5>judul Buku PHP:</h5>";
echo "<ul>";
foreach($books as $buku){
    echo "<li>$buku</li>";
}
echo "</ul>";

// perulangan bersarang 1
for($i = 0; $i < 5; $i++){
    for($i = 0; $j <10; $j++){
        echo "Ini perulangan ke ($i, $j)<br>";
    }
}
// perulangan bersarang 2
$i = 0;
while($i < 10){
    for($j = 0; $j <10; $j++){
        echo "Ini perulangan ke ($i, $j)<br>";
    }
    $i++;
}
?>