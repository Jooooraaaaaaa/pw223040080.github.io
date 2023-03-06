<?php 

echo " <h4>Menghitung Luas Lingkaran</h4> ";
function  hitungLuasLingkaran ( $r ) {
    echo " Jari Jari = $r cm<br> ";
    echo " Luas lingkaran  =" . ( 3.14 * $r * $r ) . " cm² <jam> ";
}

hitungLuasLingkaran( 10 );

echo " <h4><hr>Menghitung Keliling Lingkaran</h4> ";
function  hitungKelilingLingkaran ( $r ) {
    echo " Jari Jari = $r cm<br> ";
    echo " Keliling lingkaran = " . ( 3.14 * ( $r + $r )) . " cm <jam> <hr>";
    
}

hitungKelilingLingkaran( 20 );

?>