<?php
  function getTime($prev,$new){
    date_default_timezone_set("Asia/calcutta");
  	$t1 = strtotime(Date($prev));
    $t2 = strtotime($new);
    $hours = ($t2 - $t1)/3600; 
    
    $h = floor($hours);
    $m = ( ($hours-floor($hours)) * 60 );
    // echo floor($hours) . ':' . ( ($hours-floor($hours)) * 60 );
    
    if($h < 0){
      if($m > 0){
        return "Early by ".abs($h)." hours and ".$m." minutes";
      }
      else{
        return "Early by ".abs($h)." hours";
      }
    }
    else if ($h > 0){
      if($m > 0){
        return "Late by ".$h." hours and ".$m." minutes";
      }
      else{
        return "Late by ".$h." hours";
      }
      
    }
    else{
      if($m < 0){
        return "Early by ".$m." minutes";
      }
      else if ($m > 0){
        return "Late by ".$m." minutes";
      }
      else{
        return "Exact";
      }
    }
  }
  
  echo getTime("19:7","15:30");
  
?>