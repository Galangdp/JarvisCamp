<?php 

$hewan = ['kucing', 'anjing', 'kuda', 'kambing', 'semut'];

for ($i = 0; $i < count($hewan); $i++) {
    if ($hewan[$i] == 'semut'){
        echo "ketemu semut". "<br>";
        break;
    }
    echo "bukan semut". "<br>";
}

for ($i = 1; $i <= 10; $i++) {
    if ($i == 5){
        break;
    }
    echo $i . "<br>";
}

?>