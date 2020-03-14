<?php
/*@Sysub 2020 please step by step call by function*/
function writeMsg($w,$i,$s,$e) {
    $bir=0;
	$iki=0;
	$uc=0;
	$dort=array();
	$bes=array();
	
	while(true){
		if($bir <5) {
			array_push($bes,$w[$bir]);
			}
		else if($bir<strlen($w)){
			array_push($dort,$w[$bir]);
			
		}
		$bir++;
		if($iki <5) {
			array_push($bes,$i[$iki]);
			}
		else if($iki<strlen($i)){
			array_push($dort,$i[$iki]);
			
		}
		$iki++;
		if($uc <5) {
			array_push($bes,$s[$uc]);
			}
		else if($uc<strlen($s)){
			array_push($dort,$s[$uc]);
			
		}
		$uc++;
		if(strlen($w)+strlen($i)+strlen($s)+strlen($e)==count($dort)+count($bes)+strlen($e)){break;}
	}
	

    $kir=$dort;
	$dar=$bes;
	$iki=0;
	$kes=array();
	$sonuc='';
	
	

	
	
	for($bir=0;$bir<count($dort);$bir+=2){
		$sal =-1;
		if(ord($dar[$iki])%2){$sal=1;}
		
		$sonuc.=chr(base_convert(implode(array_slice($kir, $bir, 2)), 36, 10)-$sal);
		$iki++;
		if($iki >= count($bes)){$iki=0;}
	}
	
	
	
	return $sonuc;
}
?>
