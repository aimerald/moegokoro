<?php
//閏年の取得
function leep($year){
	if(($year % 4)==0 && ($year % 100) != 0) {
		return true;
	}else if(($year % 400)==0 && ($year % 100) != 0){
		return true;
	}else{
		return false;
	}
}

//月末を計算する
function last_day($year,$month){
	if(leep($year)){
		switch($month){
			case 1:
				return 31;
				break;
			case 2:
				return 29;
				break;
			case 3:
				return 31;
				break;
			case 4:
				return 30;
				break;
			case 5:
				return 31;
				break;
			case 6:
				return 30;
				break;
			case 7:
				return 31;
				break;
			case 8:
				return 31;
				break;
			case 9:
				return 30;
				break;
			case 10:
				return 31;
				break;
			case 11:
				return 30;
				break;
			case 12:
				return 31;
				break;
			default:
				break;
		}
	}else{
		switch($month){
			case 1:
				return 31;
				break;
			case 2:
				return 29;
				break;
			case 3:
				return 31;
				break;
			case 4:
				return 30;
				break;
			case 5:
				return 31;
				break;
			case 6:
				return 30;
				break;
			case 7:
				return 31;
				break;
			case 8:
				return 31;
				break;
			case 9:
				return 30;
				break;
			case 10:
				return 31;
				break;
			case 11:
				return 30;
				break;
			case 12:
				return 31;
				break;
			default:
				break;
		}
	}
}


function my_reserve($event,$year,$month,$day){
	$event--;
	$event_countor = $event;
	$day++;
	$array_count = 0;
	$cal_array = array();
	while($event_countor >= 0){
		if(last_day($year,$month) >= $day){
			$cal_array[$array_count] = "$year"."年"."$month"."月"."$day"."日";
		}else{
			if($month == 12){
				$year+=1;
				$month = 1;
				$day = 1;
				$month+=1;
				//echo("$year"."年"."$month"."月"."$day"."日");
				$cal_array[$array_count] = "$year"."年"."$month"."月"."$day"."日";
			}else{
				$day = 1;
				$month+=1;
				//echo("$year"."年"."$month"."月"."$day"."日");
				$cal_array[$array_count] = "$year"."年"."$month"."月"."$day"."日";
			}
		}
		$day+=1;
		$event_countor-=1;
		$array_count+=1;
	}
	//echo("</select>");
	return $cal_array;
}


?>