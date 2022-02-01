<?php
$num = 1 ;
echo "Prime Numbers between 1 and 50 are : ";
while ($num < 50 )
{
$count=0;
for ( $i=1;$i<=$num;$i++)
{
if (($num%$i)==0)
{
$count++;
}
}
if ($count<3)
{
echo "<br>".$num;
}
$num=$num+1;
}
?>
