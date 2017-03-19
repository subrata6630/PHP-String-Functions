<?php
$str = addcslashes("Hello World!","W");      //ekhane 'W' er por slashes hobe
$slash = addcslashes("    FIFA UEFA",'U');   //eta casesentative
echo($str);
echo ($slash);