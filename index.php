<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
include_once "BubbleSort.php";
$array = array();

$i = 0;

do{
    $array[$i] = rand(1,30);
    $i++;
}while($i < 100);

$bubble = new BubbleSort($array);
$bubble->sort();
$array2 = $bubble->getArray();
?>
    <style>
        .vertical{
            height: 100%;
            max-width: 2%;
            background-color: white;
            vertical-align: bottom;

        }
    </style>
    <div style="height:800px; width:1000px;">
    <table  style="height:800px; width:1000px; align:bottom">
    <tr>
    <?php 
        foreach($array2 as $a){
            ?>
            <td class="vertical">
                <div style="background-color: black; height:<?=$a?>%; width:100%; align:bottom"></div>
            </td>
            <?php
        }
    ?>
    </tr>
    </table>
    </div>

    <div style="height:800px; width:1000px;">
    <table  style="height:800px; width:1000px; align:bottom">
    <tr>
    <?php 
        foreach($array as $a){
            ?>
            <td class="vertical">
                <div style="background-color: blue; height:<?=$a?>%; width:100%; align:bottom"></div>
            </td>
            <?php
        }
    ?>
    </tr>
    </table>
    </div>
  

</body>
</html>

