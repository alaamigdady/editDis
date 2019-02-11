<?php

class Levenshtein {

	private $arr=array(array(0));
	  private $str1 ;
	  private $str2 ;
    function __construct() {
        $this->str1 = isset($_GET['lev_str1']) ? $_GET['lev_str1'] : '';
        $this->str2 = isset($_GET['lev_str2']) ? $_GET['lev_str2'] : '';

    }


	public  function editDistnace (){

		for($i =0;$i<=strlen($this->str2);$i++){
    		if($i===0){
			   for($j=1;$j<=strlen($this->str1);$j++){
			   		array_push($this->arr[0],$j);
			       }
    		}else{
			   	array_push($this->arr,array($i));
    		}
    	}

		for($i =0;$i<strlen($this->str2);$i++){
			for($j=0;$j<strlen($this->str1);$j++){
				if($this->str1[$j]===$this->str2[$i]){
					array_push($this->arr[$i+1],$this->arr[$i][$j]);
				}else{
					array_push($this->arr[$i+1],min($this->arr[$i][$j],$this->arr[$i][$j+1],$this->arr[$i+1][$j])+1);
				}
			}
		}
		echo "minimun distace is :" .$this->arr[strlen($this->str2)][strlen($this->str1)] ."<br>";

		$m = strlen($this->str1);
		$n = strlen($this->str2);
		$result='';


		while($m!=0 && $n!=0){
			$cur = $this->arr[$n][$m];
			$min = min($this->arr[$n][$m-1],$this->arr[$n-1][$m-1],$this->arr[$n-1][$m]);

			if ($min === $this->arr[$n-1][$m-1]){
				if($min+1 === $cur) { 
					$result .="replace  " .$this->str1[$m-1] ." with  ". $this->str2[$n-1]. "<br>" ; 
					$m=$m-1; 
					$n=$n-1;
				}elseif($min === $cur){
					$m=$m-1;
					$n=$n-1;
				}
			}elseif($min === $this->arr[$n][$m-1]){
				if($min+1 === $cur) { 
					$result .= "delete " .$this->str1[$m-1] ."<br>" ; 
					$m=$m-1;
				}elseif($min === $cur){
					$m=$m-1;
				}
			}elseif($min === $this->arr[$n-1][$m]){
				if($min+1 === $cur) { 
					$result .="insert ".$this->str2[$n-1] ."<br>" ; 
					$n=$n-1;
				}elseif($min === $cur){
					$n=$n-1;
				}
			}
		}

	return $result;
	}
}

$lev = new Levenshtein();

echo $lev->editDistnace();

?>
