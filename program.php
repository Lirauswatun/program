<?php 
$a = 1;
$b = 0;
$hasil = !$a;
echo $hasil;

$dataNama = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20"];

foreach ($dataNama as $cetakNilai) {
    print_r($cetakNilai. " " );
    echo "\n";

}

?>

//materi if_else
<?php
$jaket = 300;
$baju = 150;
$celana = 200;
$uang = 160;

if($uang<=$jaket){
    echo "Beli Jaket";
}elseif($uang<=$baju){
    echo "Beli Baju";
}elseif($uang <=$celana){
    echo "Beli Celana";
}else{
    echo "uang tidak cukup";
}

?>

//array

<?php
$dataAngka = ["jilbab","baju","rok","celana","kaos","sepatu","gamis","buku","pulpen","hp","gelang","cincin","laptop","kipas","meja","kursi","kabel","kunci","proyektor","lipstip"];

$i=1;
    foreach ($dataAngka as $dA){
        echo $i++. " " .$dA ."\n";
    }