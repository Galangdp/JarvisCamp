<?php 


function tugas($variable1, $variable2){
    $hasil = $variable1 / $variable2;
    return $hasil;
}
function tugas2($var1, $var2){
    echo "<br>";
    $hasil = $var1 / $var2;
    echo $hasil;
}

echo tugas(20, 20);

$pembagian = tugas2(30, 15);

?>