<?php 

$hewan = ['kucing', 'anjing', 'kuda', 'kambing', 'semut'];

for ($i = 0; $i < count($hewan); $i++) {
    if ($hewan[$i] == 'semut' || $hewan[$i] == 'gajah'){
        echo "ketemu semut". "<br>";
        continue;
    }
    echo "bukan semut". "<br>";
}

?>