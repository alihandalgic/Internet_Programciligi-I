<?php

$sehirlistesi =
[
    "Adana","Mersin","Ankara","Balıkesir","İstanbul"
];




$i=0;
while($i<count($sehirlistesi))
{
    echo $sehirlistesi[$i++];
    echo"<br/>";
}
?>