<?php
//require_once 'PHPUnit/Autoload.php';
use PHPUnit\Framework\TestCase;

include 'leven.php';
include 'hamming.php';
 
class Tests extends TestCase 
{

	private $levenshtein_distance;
    private $hamming_distance;

 
    public function testSameString()
    {
    	// "should return 0 with identical strings: "
       // "levenshtein method : "
        $this->levenshtein_distance = Levenshtein::helper('ab','ab');
        $this->assertEquals(0, $this->levenshtein_distance);
        ///////////////////
        // "hamming method :"
        $this->hamming_distance = Hamming::helper('ab','ab');
        $this->assertEquals(0, $this->hamming_distance);


   }

    public function testWithEmptyString (){
    	// "should return the string length when one of the strings is empty :
        //"levenshtein method : "

    	$this->levenshtein_distance = Levenshtein::helper('str1','');
        $this->assertEquals(strlen('str1'), $this->levenshtein_distance);

        $this->levenshtein_distance = Levenshtein::helper('','str2');
        $this->assertEquals(strlen('str2'), $this->levenshtein_distance);
        // "hamming method :"
        $this->hamming_distance= Hamming::helper('str1','');
        $this->assertEquals(strlen('str1'), $this->hamming_distance);

        $this->hamming_distance = Hamming::helper('','str2');
        $this->assertEquals(strlen('str2'), $this->hamming_distance);




    }

    public function testDifferentStrings (){
    	// "should handle different cases: "
        // "levenshtein method :"
    	$this->levenshtein_distance = Levenshtein::helper('str1','str');
        $this->assertEquals(1, $this->levenshtein_distance);

        $this->levenshtein_distance = Levenshtein::helper('this is a test','this is test');
        $this->assertEquals(2, $this->levenshtein_distance);

        $this->levenshtein_distance = Levenshtein::helper('this is test','the is test');
        $this->assertEquals(2, $this->levenshtein_distance);

        /////////
        // "hamming method :"
        $this->hamming_distance = Hamming::helper('str1','str');
        $this->assertEquals(1, $this->hamming_distance);

        $this->hamming_distance = Hamming::helper('the','this');
        $this->assertEquals(2, $this->hamming_distance);

        $this->hamming_distance = Hamming::helper('hello','he');
        $this->assertEquals(3, $this->hamming_distance);    



    	
    }
}

    
     
 


?>
