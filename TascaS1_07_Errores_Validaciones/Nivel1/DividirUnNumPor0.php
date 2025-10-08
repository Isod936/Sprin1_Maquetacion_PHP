<?php
function dividir($a, $b) {
    try {
        if ($b == 0) {
            throw new Exception("No es pot dividir per zero.");
        }
        return $a / $b;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

echo dividir(10, 0);
?>