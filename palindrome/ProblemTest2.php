<?php

include "./Problem2.php";

class ProblemTest2 extends PHPUnit_Framework_TestCase
{
    public function test_palindrome_length() {

        
        $potentialPalindrome = createRandomPalindrome();
        // die();
        $elementCount = count($potentialPalindrome);
        $this->assertTrue($elementCount > 2);
    }

    public function test_is_string() {
        $array = createRandomPalindrome();

        $isString = true;
        foreach ($array as $item) {
            if (!is_string($item)) {
                $isString = false;
                break;
            }
        }

        $this->assertTrue($isString);
    }

    public function test_element_size() {
        $array = createRandomPalindrome();

        $isProperSize = true;
        foreach ($array as $item) {
            if (count($item) != 1) {
                $isProperSize = false;
            }
        }

        $this->assertTrue($isProperSize);
    }

    // Test whether the function we're testing returns a palindrome or not.
    public function test_palindrome() {
        $potentialPalindrome = createRandomPalindrome();
        $elementCount = (float) count($potentialPalindrome);

        $isEvenLength = false;
        if ($elementCount % 2 == 0) $isEvenLength = true;

        if ($isEvenLength) {
            // Cut palindrome in half into two separate arrays.
            $firstHalf = array_slice($potentialPalindrome, 0, $elementCount / 2);
            $secondHalf = array_slice($potentialPalindrome, $elementCount / 2);
        } else {
            // Cut palindrome sorta in half into two separate arrays.
            // But ignore the middle character.
            $firstHalf = array_slice($potentialPalindrome, 0, floor($elementCount / 2));
            $secondHalf = array_slice($potentialPalindrome, ceil($elementCount / 2));
        }

        $isPalindrome = true;
        $firstHalf = array_reverse($firstHalf);
        for ($i = 0; $i < count($firstHalf); $i++) {
            if ($firstHalf[$i] != $secondHalf[$i]) $isPalindrome = false;
        };

        $this->assertTrue($isPalindrome);
    }
}
