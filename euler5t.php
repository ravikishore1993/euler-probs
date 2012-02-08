<?php
$checkpoint=1;
for($check=285;;$check=$check+285)  //chosen 285 since in the no. it has to be divisible by 19 and 15. this will make loop easier.

{if($checkpoint==0) break;
for($div=1;$div<=20;$div++)
{
	if($check%$div!=0){  break; }
	if($div==20){$checkpoint=0; echo $check."<br>";}
}	
	
	
	
	
}



?>
