<?php
include_once "BubbleSort.php";
$array = array();

$i = 0;

do{
    $array[$i] = rand(1,30);
    $i++;
}while($i < 30);

$bubble = new BubbleSort($array);
$bubble->sort();
$array2 = $bubble->getArray();

foreach($array2 as $i => $a){
    echo 'novo: '. $array2[$i] . '| antigo: ' .$array[$i] . '<br>';
}

/*

function buubleSort($array){
$sortedArray = $array;
$aux;
do{
$swap = false;
for($i = 0; $i< count($sortedArray); $i++){
    $next = ($i + 1);
    if(array_key_exists($next,$sortedArray)){
        if($sortedArray[$i] > $sortedArray[$next]){
            $aux = $sortedArray[$next];
            $sortedArray[$next] = $sortedArray[$i];
            $sortedArray[$i] = $aux;
            $swap = true;
        }
    }
}
}while($swap);
return $sortedArray;
}
$sortedArray = buubleSort($array);

for($i = 0; $i < count($sortedArray); $i++){
    //echo "Antigo: <b>{$array[$i]}</b> | Novo: <b>{$sortedArray[$i]}</b><br>";
}

?>

<?php 
for($i = 0; $i < count($sortedArray); $i++){

}
*/
?>
<style>
    .vertical{
        height: 100px;
        width:  30px;
    }
</style>
<div class="vertical">
 
</div>



