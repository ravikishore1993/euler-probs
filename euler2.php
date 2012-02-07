<?php
$fib=1;
$fib_less=0;
$fib_lesser=0;
$sum_fib=0;
for( ;  ;   )
{
	if($fib>=4000000)
    break;
    if($fib%2==0)
		$sum_fib=$sum_fib+$fib;
			$fib_lesser=$fib_less;
				$fib_less=$fib;
					$fib = $fib_less + $fib_lesser;
}  
echo $sum_fib;
?>
