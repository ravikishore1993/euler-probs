<?php
$num=600851475143;
for($i=0;$i<=500000;$i++)
$sieve[500000]=0;

for( $t=1;$t<=500000;$t=$t+2)
      $sieve[$t]=1;
  for($i=3;$i<=sqrt(500000);$i=$i+2)
      {
              for( $j=3;$i*$j<=500000;$j=$j+2)
              { 
				  $sieve[$i*$j]=0;
                  
                  }
              }    
  
for($t=500000;$t>=0;$t--)
{
	if($sieve[$t]) 
    {
	if($num%$t==0) break;
	}
	
}
echo $t;



?>
 
