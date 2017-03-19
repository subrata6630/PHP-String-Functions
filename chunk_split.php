<?php
$str = "Hello world!";
echo chunk_split($str,1,"."); //ekhane proti 1 word por por . boshbe
$chnk = "hhhhhhh";
echo "<br>";
echo chunk_split($chnk,1,"a");
