<?php
    function countDown($num) {
        if($num < 0 || $num > 10){
            throw new Exception("Getal ligt niet tussen de 0 en 10");
        }else{
            return true;
        }
    }
    try {
        echo(countDown(11));
    } catch (Exception $e) {
        error_log("Exception gevonden: ".$e->getMessage().PHP_EOL, 3, "error.log");
    }
?>