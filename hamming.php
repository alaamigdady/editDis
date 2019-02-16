
<?php
/* create 'Hamming' class which used to calculte the distance between two strings with only substitution 
operation allowed */
class Hamming {

	private $str1 ;   // first string
	private $str2 ;	  // second string

    private function __construct($str1,$str2) {
        $this->str1 = $str1;
        $this->str2 = $str2;

    }

    public static function helper ($str1,$str2){
    	$hamming = new Hamming($str1,$str2); // instatiate a new object
    	return $hamming->calculateDistnace();
    }

	private function calculateDistnace (){
		// padding the shorter string with spaces
		if(strlen($this->str1)< strlen($this->str2)){
			$this->str1 = str_pad($this->str1,strlen($this->str2)," ");
		}elseif (strlen($this->str2)< strlen($this->str1)){
			$this->str2 = str_pad($this->str2,strlen($this->str1)," ");

		}
		
		$count=0; //distane counter 

		//check for different characters in the strings, if yes increment the counter
			for($i=0; $i<strlen($this->str1);$i++){
			if($this->str1[$i] !== $this->str2[$i]){
				$count = $count +1;
			}
		}
		return $count;		
	}
}


?>
