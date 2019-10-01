<?php
   function fibonacci($limit, $pointer = null){   
        $arr = [0,1];
        if($limit <= 2 ){
            return $arr;
        }

    $i = 2;
    while($i <= $limit) {
            $vl1 = (float)$arr[$i - 1];
            $vl2 = (double)$arr[$i - 2];
            array_push($arr,$vl1 + $vl2);
        $i++;
    }
    
    if($pointer){
        return $arr[$pointer];
    }
    return $arr;
}
