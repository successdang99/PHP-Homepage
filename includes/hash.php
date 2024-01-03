<?php
Class Encode{
    function Encode($pwd){
        $base = 34087013; //a prime number
        $hash = 0;
        for ($i = 0; $i < strlen($pwd); $i++){
            $hash = ($hash * 63 + $this->code($pwd[$i])) % $base;
        }
        return (string)$hash;
    }  
    function code($char) {
        if ($char >= '0' && $char <= '9') { //0..9
            return ord($char)-48;
        }
        if ($char >= 'a' && $char <= 'z') { //10..35
            return ord($char)-87;
        }
        if ($char >= 'A' && $char <= 'Z') { //36..62
            return ord($char)-29;
        }
    }
}