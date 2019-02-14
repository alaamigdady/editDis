

<?php
/*create 'Levenshtien' class, which is using deletion,insertion and substituion operations to calculate
the minimum distance between two string.
in order to achieve this, the dynamic programming approch is used.
*/
class Levenshtein {

	private $count=0;              // distance counter
	private $str1 ;                // first string
	private $str2 ;                // second string


    private function __construct($str1,$str2) {
        $this->str1 = $str1;
        $this->str2 = $str2;

    }

    public static function helper ($str1,$str2){
    	$levenshtien = new Levenshtein($str1,$str2); // instantiate a new object
    	$levenshtien->calculateDistnace();
    	return $levenshtien->count;
    }

	private function calculateDistnace (){
		//creae a two diminsion array of size(length of string2 x length of string1)
		 $arr=array(array(0));  

		for($i =0;$i<=strlen($this->str2);$i++){
    		if($i===0){
			   for($j=1;$j<=strlen($this->str1);$j++){
			   		array_push($arr[0],$j);
			       }
    		}else{
			   	array_push($arr,array($i));
    		}
    	}

    /* apply the dynamic programming approch to fill the 2-D array with distances needed to convert         substrings from the first string to substrings from the second string*/

		for($i =0;$i<strlen($this->str2);$i++){
			for($j=0;$j<strlen($this->str1);$j++){
				//if the characters are the same, keep the distance the same.
				if($this->str1[$j]===$this->str2[$i]){
					array_push($arr[$i+1],$arr[$i][$j]);
				}else{
				//if the characters are not the same ,add one to the minimum value of the adjacent cells
					array_push($arr[$i+1],min($arr[$i][$j],$arr[$i][$j+1],$arr[$i+1][$j])+1);
				}
			}
		}

		// the final result will be the last element of the 2-D array
		$this->count = $arr[strlen($this->str2)][strlen($this->str1)];

		// return the operations applied on the string , using the same approch
		$m = strlen($this->str1);
		$n = strlen($this->str2);
		$result='';


		while($m!=0 && $n!=0){
			//define the current cell, starting from the last element in the array
			$cur = $arr[$n][$m];
			//get the minimun number from the three adjacent cells (the above, the left and the top-left-corner)
			$min = min($arr[$n][$m-1],$arr[$n-1][$m-1],$arr[$n-1][$m]);

			//if the minimun is in the top-left-corner cell
			if ($min === $arr[$n-1][$m-1]){
				//if the minimun is less than the current by one , then we applied replacement
				if($min+1 === $cur) { 
					$result .="replace  '" .$this->str1[$m-1] ."' with  '". $this->str2[$n-1]. "' \n" ; 
					$m=$m-1; 
					$n=$n-1;
				}elseif($min === $cur){
				// if they are the same , then we didn't apply any operation , so move to next cell
					$m=$m-1;
					$n=$n-1;
				}
			}elseif($min === $arr[$n][$m-1]){
				//deleion case
				if($min+1 === $cur) { 
					$result .= "delete '" .$this->str1[$m-1] ."' \n" ; 
					$m=$m-1;
				}elseif($min === $cur){
					$m=$m-1;
				}
			}elseif($min === $arr[$n-1][$m]){
				// insertion case
				if($min+1 === $cur) { 
					$result .="insert '".$this->str2[$n-1] ."' \n" ; 
					$n=$n-1;
				}elseif($min === $cur){
					$n=$n-1;
				}
			}
		}

	echo $result;
	}
}

?>
