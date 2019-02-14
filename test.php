<?php
//require_once 'PHPUnit/Autoload.php';
use PHPUnit\Framework\TestCase;

include 'leven.php';
include 'hamming.php';
 
class LevenshtienTests extends TestCase 
{
	private $distance;
 
    public function testSameString()
    {
    	echo "should return 0 with identical strings:  \n";
        $this->distance = Levenshtien::helper('ab','ab');
        $this->assertEquals(0, $this->distane);
    }

    public function testWithEmptyString (){
    	echo "should return the string length when one of the strings is empty :  \n";

    	$this->distance = Levenshtien::helper('str1','');
        $this->assertEquals(strlen('str1'), $this->distane);

        $this->distance = Levenshtien::helper('','str2');
        $this->assertEquals(strlen('str2'), $this->distane);

    }

    public function testDifferentStrings (){
    	echo "should handle different cases: \n";
    	$this->distance = Levenshtien::helper('str1','str');
        $this->assertEquals(1, $this->distane);

        $this->distance = Levenshtien::helper('this is a test','this is test');
        $this->assertEquals(2, $this->distane);

        $this->distance = Levenshtien::helper('this is test','the is test');
        $this->assertEquals(2, $this->distane);


    	
    }
}

    class HammingTests extends PHPUnit_Framework_TestCase {
	
	private $distance;
 
    public function testSameString()
    {
    	echo "should return 0 with identical strings:  \n";
        $this->distance = Hamming::helper('ab','ab');
        $this->assertEquals(0, $this->distane);
    }

    public function testWithEmptyString (){
    	echo "should return the string length when one of the strings is empty :  \n";

    	$this->distance = Hamming::helper('str1','');
        $this->assertEquals(strlen('str1'), $this->distane);

        $this->distance = Hamming::helper('','str2');
        $this->assertEquals(strlen('str2'), $this->distane);

    }

    public function testDifferentStrings (){
    	echo "should handle different cases: \n";
    	$this->distance = Hamming::helper('str1','str');
        $this->assertEquals(1, $this->distane);

        $this->distance = Hamming::helper('the','this');
        $this->assertEquals(2, $this->distane);

        $this->distance = Hamming::helper('hello','he');
        $this->assertEquals(3, $this->distane);	
    }
 
}

?>
