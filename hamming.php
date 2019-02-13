
<?php
class Hamming {

	private $count=0;
	private $str1 ;
	private $str2 ;

    private function __construct($str1,$str2) {
        $this->str1 = $str1;
        $this->str2 = $str2;

    }

    public static function helper ($str1,$str2){
    	$hamming = new Hamming($str1,$str2);
    	$hamming->calculateDistnace();
    	return $hamming->count;
    }

	private function calculateDistnace (){
		if(strlen($this->str1)< strlen($this->str2)){
			$this->str1 = str_pad($this->str1,strlen($this->str2)," ");
		}elseif (strlen($this->str2)< strlen($this->str1)){
			$this->str2 = str_pad($this->str2,strlen($this->str1)," ");

		}

			for($i=0; $i<strlen($this->str1);$i++){
			if($this->str1[$i] !== $this->str2[$i]){
				$this->count = $this->count +1;
			}
		}
		return $this->count;		
	}
}


?>
