<?php

class Hamming {

	private $count=0;
	private $str1 ;
	  private $str2 ;
    function __construct() {
        $this->str1 = isset($_GET['ham_str1']) ? $_GET['ham_str1'] : '';
        $this->str2 = isset($_GET['ham_str2']) ? $_GET['ham_str2'] : '';

    }

	
	public function editDistace (){
		if(strlen($this->str1)!= strlen($this->str2)){
			echo "two strings must have same length";
		}else{
			for($i=0; $i<strlen($this->str1);$i++){
			if($this->str1[$i] !== $this->str2[$i]){
				$this->count = $this->count +1;
			}
		}
		return $this->count;

		}
		
	}
}

$ham = new Hamming();

echo $ham->editDistace()

?>
