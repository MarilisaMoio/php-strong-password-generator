<?php
    function createPsw($subChar, $length, $filterArray){
        $pool = [];
        foreach ($filterArray as $type){
            $pool = array_merge($pool, $subChar[$type]);
        }
        $generatedPsw = "";
        for ($i = 1; $i <= $length; $i++){
            $generatedPsw .= $pool[rand(0, count($pool) - 1)];
        };
        return $generatedPsw;
    };
?>