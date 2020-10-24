<?php

class ContohStatic {
    public static $angka1 = 1;

    public static function halo(){
        return "Halo " . self::$angka1++ . "kali <br>";
    }
}

echo ContohStatic::$angka1;
echo "<br>";
echo ContohStatic::halo();
echo ContohStatic::halo();
echo ContohStatic::halo();
?>