<?php
    function createPsw($subChar, $length){
        $pool = array_merge($subChar['minusc'], $subChar['maiusc'], $subChar['num'], $subChar['special']);
        $generatedPsw = "";
        for ($i = 1; $i <= $length; $i++){
            $generatedPsw .= $pool[rand(0, count($pool) - 1)];
        };
        return $generatedPsw;
    };
?>