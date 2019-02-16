# editDistance

This repository is created to calculate the distnace between two strings, using both hamming and levenshtien methods.

it conains :

## index.php :
a simple webpage to navigate to hamming or levenshien method.

to run this file using php built-in server :</br>
	1. navigte to directory containing the file from your terminal.</br>
	2. run ```php -S localhost:8000``` command.</br>
	3. navigate to localhost:8000 in your browser.</br>

## lev_inputs.php :
a simple web page to enter strings you want calculate distance between using levenshtien method.

## ham_inputs.php : 
a simple web page to enter strings you want calculate distance between using hamming method.

## leven.php :
levenshtien method implementation,using dynamic programming approch.

## hamming.php :
hamming method implementation.

## cmd.php : 
by runnig this file from your command line, you will be able to enter two strings and calculate the distance using
levenshtine method.

to run this file from your cmd :</br>
	1. navigte to directory containing the file.</br>
	2. run ``` php cmd.php ``` command.</br>

## test.php :
this file requires both levenshtien and hamming classes and perform some tests on them using phpunit testing tool.

to run this file from your cmd :</br>
	1. navigte to directory containing the file.</br>
	2. run ``` phpunit test.php ``` command.



