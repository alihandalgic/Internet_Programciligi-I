<?php

$sayi=1;
while($sayi<=10)
{
    echo"$sayi<br>";
    $sayi++;
}
echo"<hr/>";
/*$sayi = 10;
while($sayi==10)
{
    echo $sayi;
    echo"<br/>";

}
*/
$sayi=1;
while($sayi<6)
{
    $toplam=$sayi+100;
    echo "100+" . $sayi;
    echo "=" . $toplam;
    echo"<br/>";
    $sayi++;
}
echo"<hr/>";

$sayi=1;
$sonuc=1;
while($sayi<=5)
{
    $sonuc=$sonuc*$sayi;
    $sayi++;
}
echo $sonuc;
echo"<hr/>";

echo "-0 ile 30 sayıları arasındaki çift sayılar-<br>";
$sayi=0;
while($sayi<=30)
{
    echo "$sayi<br>";
    $sayi+=2;
}
?>
