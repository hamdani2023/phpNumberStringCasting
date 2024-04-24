<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            // Original string
        $string = "  The quick brown fox jumps over the lazy dog. ";

            // 1. Find the length of the string
        $length = strlen($string);

            // 2. Count the number of words in the string
        $wordCount = str_word_count($string);

            // 3. Find the position of the word "brown"
        $position = strpos($string, "brown");

        // 4. Extract a substring starting from the word "brown"
        $substring = substr($string, $position);

            // 5. Replace "fox" with "cat"
        $newString = str_replace("fox", "cat", $string);

            // 6. Convert the string to lowercase
        $lowercaseString = strtolower($string);

            // 7. Trim whitespace from the beginning and end of the string
        $trimmedString = trim($string);

            // 8. Split the string into an array by whitespace
        $wordsArray = explode(" ", $string);

            // 9. Join the words of the array into a string using a hyphen
        $joinedString = implode("-", $wordsArray);

            // 10. Reverse the string
        $reversedString = strrev($string);

            // Output the results
        echo "Original String: '$string'<br>";
        echo "Length of String: $length<br>";
        echo "Word Count: $wordCount<br>";
        echo "Position of 'brown': $position<br>";
        echo "Substring from 'brown': '$substring'<br>";
        echo "String with 'fox' replaced: '$newString'<br>";
        echo "Lowercase String: '$lowercaseString'<br>";
        echo "Trimmed String: '$trimmedString'<br>";
        echo "Words Array: ";
        print_r($wordsArray);
        echo "<br>";
        echo "Joined String: '$joinedString'<br>";
        echo "Reversed String: '$reversedString'";
        ?>
    </body>
</html>
