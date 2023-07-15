<?php 

$hari = 'senin';
$mood;

switch($hari){
    case 'senin':
        $mood = 'Happy';
        break;
    case 'selasa';
        $mood = 'Sad';
        break;
    case 'rabu';
        $mood = 'Angry';
        break;
    case 'kamis';
        $mood = 'Galau Abiez';
        break;
    case 'jumat';
        $mood = 'Jumat Berkah';
        break;
    case 'sabtu';
    case 'minggu';
        $mood = 'Ngoding';
        break;
    default:
        $mood = 'B AJA';
        break;
}

echo "hari ini hari $hari dan mood saya $mood";

?>