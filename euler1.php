<?php   
$sum3=0;
$sum5=0;
$sum=0;
$sum15=0;
	for( $i=0; $i<=333 ; $i++)
		$sum3=$sum3+3*$i;
	for( $i=0; $i<200 ; $i++)
		$sum5=$sum5+5*$i;
	for( $i=0; (15*$i)<1000 ; $i++)
		$sum15=$sum15+15*$i;

$sum=$sum3+$sum5-$sum15;

echo $sum;

?>
