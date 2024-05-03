<?php
    function createPsw($subChar, $length, $filterArray, $repetition){
        $pool = [];
        foreach ($filterArray as $type){
            $pool = array_merge($pool, $subChar[$type]);
        }
        $generatedPsw = "";
        
        if($repetition){
            for ($i = 1; $i <= $length; $i++){
                $generatedPsw .= $pool[rand(0, count($pool) - 1)];
            };
        } else {
            while (strlen($generatedPsw) < $length){
                $newChar = $pool[rand(0, count($pool) - 1)];
                if (!str_contains($generatedPsw, $newChar)){
                    $generatedPsw .= $newChar;
                };
            };
        };

        return $generatedPsw;
    };
?>