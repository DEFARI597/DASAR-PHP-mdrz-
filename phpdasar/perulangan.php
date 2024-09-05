<?php
//perulangan for
for ($i = 0; $i < 10;$i++){
    echo "<h2> Ini perulangan ke-$i</h2>";
}

//perulangan while
$ulangi = 0;

while ($ulangi < 10){
    echo "<p> Ini adalah perulangan ke -$ulangi</p>";
    $ulangi++;
}

//perulangan Do/while
$loop = 10;
//ngelaggg buuu 

//perulangan Foreach
$book = [
    "Panduan Belajar PHP Untuk Pemula",
    "Membangun Aplikasi Web Dengan PHP",
    "Tutorial PHP Dan MySQL",
    "Membuat Chat Bot Dengan PHP"
];

echo "<h5> Judul Buku PHP: </h5>";
echo "<ul>";
foreach($book as $buku){
    echo "<li>$buku</li>";
}

echo "</ul>";
?>