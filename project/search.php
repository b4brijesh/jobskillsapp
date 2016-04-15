<?php
  $str=$_POST["job"];
  $str_pcs=explode(" ",$str);
  $string=file_get_contents("jobs.json");
  $json=json_decode($string,true);
  $skillarr=array();
  $max_cnt=0;
  foreach ($json as $job) {
    $pcs=explode(" ",$job["role"]);
    $match_cnt=0;
    for($i=0;$i<count($str_pcs); $i++){
      for($j=0;$j<count($pcs);$j++){
        $res=str_match($str_pcs[$i],$pcs[$j]);
        if($res==true){
          $match_cnt++;
          //$match_cnt+=(count($str_pcs)-$i);
        }
      }
    }
    if($match_cnt>0){
      $w1=pow(4,$match_cnt);
      $weight=pow(5,$w1);
      foreach ($job["skills"] as $skill) {
        if(array_key_exists($skill,$skillarr)){
          $skillarr[$skill]=$skillarr[$skill]+$weight;
          $max_cnt=max($max_cnt,$skillarr[$skill]);
        }
        else{
          $skillarr[$skill]=$weight;
          $max_cnt=max($max_cnt,$weight);
        }
      }
    }
  }
  //echo "$max_cnt \n";
  arsort($skillarr);
  echo json_encode($skillarr);
  /*for($i=$max_cnt;$i>0;$i--){
    $keyarr=array();
    $keyarr=array_keys($skillarr,$i);
    foreach ($keyarr as $key) {
      echo "$key $i\n";
    }
  }*/
  function str_match($str1,$str2){
    $str1=strtolower($str1);
    $str2=strtolower($str2);
    if(strpos($str2,$str1)!==false)
      return true;
    return false;
  }
 ?>
