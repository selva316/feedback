<?php
	function calculate_age ($year,$month,$day)
	{   //list($year,$month,$day) = explode("-",$birthday);

		$cY = date("Y");
		$bY = $year;
		$cm = date("m");
		$bm = $month;
		$cd = date("d");
		$bd = $day;

		if ($bY == $cY) {
			//Birth year is current year
			    $months = $cm - $bm;
			    if ($months > 1)
			  {
				  return $months."m";
			  } 
			    else if($months == 0 )
			  {
			      if($cd > $bd)
				    $days = $cd - $bd;
				  else
				    $days = $bd - $cd; 
						  
				  return $days."d";
			  }
			    else
			  {
			  
			    if ($bd - $cd > 0) {
			  		     
				 $date1 = $year."-".$month."-".$day;
                 $date2 = $cY."-".$cm."-".$cd;
			     $diff = abs(strtotime($date2) - strtotime($date1));
			 	 $days = $diff / (3600 * 24) ;
				  return $days."d";
				   } 
				 else {
				 return "1m";  
				   }
				} 
			}
			else if ($cY - $bY == 1 && $cm - $bm < 12)
			{
				//Born within 12 months, either side of 01 Jan
				//Determine days and therefore proportion of month
				if ($cd - $bd > 0) {
					$xm = 0;
				} 
				  else 
				{
					$xm = 1;
				}
				$months = 12 - $bm + $cm - $xm;
				if ($months == 0 || $months > 1) {
					return $months."m";
				}  
				   else if($months == 0 )
			    {
			      if($cd > $bd)
				   $days = $cd - $bd;
				  else
				   $days = $bd - $cd; 
						  
				  return $days."d";
     		    } 
				  else 
				{
			        if ($bd - $cd > 0) {
			        $date1 = $year."-".$month."-".$day;
                    $date2 = $cY."-".$cm."-".$cd;
					
                    $diff = abs(strtotime($date2) - strtotime($date1));
					$days = $diff / (3600 * 24) ;
            	    return $days."d";
					 } else {
					 return "1m"; 
					 }
				} 
			}

			//patient older than 12 months, return in years
			$yrs = (date("md") < $bm.$bd ? date("Y")-$bY-1 : date("Y")-$bY );
			if ($yrs == 0 || $yrs > 1) {
				return $yrs;
			} else {
				return $yrs;
			}
	}
?>
