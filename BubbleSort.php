<?php

class BubbleSort{
    private $sortedArray;
    private $aux;
    private $swap;
    public function __construct(array $array){
        $this->setArray($array);
    }

    public function setArray(array $array){
        $this->sortedArray = $array;
    }

    public function getArray(){
        return $this->sortedArray;
    }

    public function sort(){
        do{
            $this->swap = false;
            for($i = 0; $i< count($this->sortedArray); $i++){
                $next = ($i + 1);
                if(array_key_exists($next,$this->sortedArray)){
                    if($this->sortedArray[$i] > $this->sortedArray[$next]){
                        $this->aux = $this->sortedArray[$next];
                        $this->sortedArray[$next] = $this->sortedArray[$i];
                        $this->sortedArray[$i] = $this->aux;
                        $this->swap = true;
                    }
                }
            }
            }while($this->swap);
            
        }
}