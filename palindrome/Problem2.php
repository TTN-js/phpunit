<?php

// Problem, write a function that will randomly generate an array of characters.
// - it must pass all unit tests
// 4 examples have been provided below, uncomment one at a time and run to test.
function createRandomPalindrome() {
    // return ['a', 'b', 'z', 'f', 'r', 'r', 'f', 'z', 'b', 'a']; // passes all tests

    // return ['a', 'd', 'z', 'd', 'a']; // passes all tests.

    // return ['f', 'a', 'd', 'z', 'd', 'a', 'f']; // passes all tests.

    // return ['f', 'z', 'f']; // passes all tests.

	//one array, 2 string char min without mult char elements, need to be palindrome , must be at random

	$palindrome_array = array();
	$first_char = "";

	for ($i=0; $i <= 2; $i++) { 
		$letter = chr(rand(97,122)); 
		// echo $i." ".$letter . "\n";

		if($i == 0){
			$first_char = $letter;
			$palindrome_array[] = $letter;
		}

		if( $i == 1){
			$palindrome_array[] = $letter;
		}

		if($i == 2){
			do{
				// echo " new rand letter ";
				$letter = chr(rand(97,122));
				// echo $letter. " ";

			}while($letter != $first_char);

			if($letter == $first_char){
				$palindrome_array[] = $letter;
			}
		}		

	}

	return $palindrome_array;}

