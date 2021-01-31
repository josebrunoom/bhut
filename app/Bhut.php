<?php

final class Bhut
{
    public function validation($num) {

        $words = ["IT", "BHUT", "BHUT TI"];
        
        if ($num % 3 == 0 || $num % 5 == 0) {
            return $words[($num % 3 == 0 && $num % 5 >= 1) + ($num % 3 == 0 && $num % 5 == 0) * 2];
        }
        return $num;
    }

    public function run() {
        $output = array();
        for($i = 1; $i <= 100; $i++) {
            $output[$i-1] = $this->validation($i);
        }
        return $output;
    }
}
