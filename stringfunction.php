<?php

// echo "Hamzeh" . "<br>";
//
// echo str_repeat("-=", 10);
//
// echo "<br>";
//
//
// //Returns the shuffled string.
// $str = 'abcdef';
// $shuffled = str_shuffle($str);

// // This will echo something like: bfdaec
// echo $shuffled;
//
// echo "<br>";
// echo "<br>";
// //strtr ( string $str , string $from , string $to ) : string
// //Translate characters or replace substrings
// echo strtr("baab", "ab", "01"),"\n";
//
// echo "<br>";
// echo "<br>";
// //str_split — Convert a string to an array
// $str = "Hello Friend";
//
// $arr1 = str_split($str);
// $arr2 = str_split($str, 3);
//
// print_r($arr1);
// echo "<br>";
// echo "<br>";
// print_r($arr2);
//
// echo "<br>";
// echo "<br>";
//
// //Find the first occurrence of a string
// $email  = 'name@example.com';
// $domain = strstr($email, '@');
// echo $domain; // prints @example.com

//uppercase

$stringPhp = "Php is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.";

echo "$stringPhp". "<br><br>";
echo "strtoupper :" . "<br><br>";

$toUpper = strtoupper($stringPhp);
echo $toUpper;
echo "<hr>";


echo "strtolower :" . "<br><br>";

$toLower =strtolower($stringPhp);
echo $toLower;
echo "<hr>";


echo "firstruppercase :" . "<br><br>";

$tofirstUpper =ucfirst($stringPhp);
echo $tofirstUpper;
echo "<hr>";

echo "firstAllruppercase :" . "<br><br>";

$firstAllruppercase =ucwords($stringPhp);
echo $firstAllruppercase;
echo "<hr>";


echo "Split Srting : 082307 ==>  08:23:07" . "<br><br>";
$stringNum = '082307';
$splitSrting =str_split($stringNum, 2);
print_r($splitSrting);
echo implode(":", $splitSrting);
echo "<hr>";



echo "String Contains a specific string :" . "<br><br>";

$string3 = "The quich brown fox jumps over the lazy dog";
echo "check the string containes the 'jumps'" . "<br>";
if(strpos($string3,'jumps') == true) {
  echo "The String Contains The 'jumps'";
}

echo "<hr>";

echo "Convert Variable to String :" . "<br><br>";
$string4 = 33.55;
$VariabletoString =strval($string4);
echo $VariabletoString . "<br>";
echo "The Type is " . gettype($VariabletoString);
echo "<hr>";


echo "Extract File Name From String : www.example.come/public_html/index.php" . "<br><br>";
$string5 = "www.example.come/public_html/index.php";
$extractString =substr($string5, -9);
echo $extractString . "<br>";

echo "<hr>";

echo "Extract User Name From Emaile ID :" . "<br><br>";
$string6 = "Hamzeh@gmaile.com";
$extractString =substr($string6,0, 6);
echo $extractString . "<br>";

echo "<hr>";


echo "Get Last three characters of string :" . "<br><br>";
$string7 = "Hamzeh@gmaile.com";
$extractString =substr($string7,-3, 3);
echo $extractString . "<br>";

echo "<hr>";


echo "format values in currency style :" . "<br><br>";
$value1 = 65.45;
$value2 = 104.35;

$result = $value1 + $value2;
echo number_format($result, 2) . "<br>";

echo "<hr>";



function password_generate($chars)
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(7)."\n";

echo "<hr>";
// echo "<hr>";
//
// $deg = 85;
// if ($deg< 100 && $deg > 90) {
//   echo "A";
// }elseif ($deg< 89 && $deg > 80) {
//   echo "B";
// }elseif ($deg< 79 && $deg > 70) {
//   echo "C";
// }elseif ($deg< 69 && $deg > 50) {
//   echo "D";
// }else {
//   echo "Fail";
// }
//
// $x = 10;
// $y = 20;
//
// $x = $x + $y;
//
// $y = $x - $y;
// $x = $x - $y;
//
//
// echo "x " . $x;
// echo "y " .$y;



echo "find the first character that is different between to string :" . "<br><br>";
$value1 = "football";
$value2 = "footboll";

$pos = strspn($value1 , $value2);

printf(
    'First difference at position %d: "%s" vs "%s"',
    $pos, $value1[$pos], $value2[$pos]
);

// echo 'First difference at position ' . "{$pos}" ." ". "' $value1[$pos]'" . " ". $value2[$pos];
//
//

echo "<hr>";



echo "<br>";
echo "<br>";
//str_split — Convert a string to an array

$s = explode("\n", "Return the number of characters,\nfound in the string Hello world!,\nthat contains the characters,\nkHlleo:");

var_dump($s);

// // $arr1 = str_split($str);
// $arr2 = str_split($str, 10);
//
// // print_r($arr1);
// // echo "<br>";
// // echo "<br>";
// print_r($arr2);


echo "<hr>";


echo "get file name from path" . "<br><br>";
$addrees = "https://www.orange.com/index.php";

$ss = substr($addrees,-9);
// echo $ss;
$subs = $ss;
echo strstr($ss , '.',true);

echo "<hr>";


echo "<hr>";


echo "print next character of a specific character" . "<br><br>";
$cha = 'a';
$next_cha = ++$cha;
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
if (strlen($next_cha) > 1)
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."\n";
echo "<hr>";


//
// $str = 'Z';
// echo ++$str; // prints 'aa'
//
// echo "<hr>";


echo "remove a part of string from beginning" . "<br><br>";
$addrees = "Hamzeh@example.com";


echo strstr($addrees , '@');

echo "<hr>";


echo "<hr>";


echo "Get hex dump of string" . "<br><br>";
$string = "Hamzeh@example.com";
echo bin2hex($string);

echo "<hr>";


echo "<hr>";


echo "php script to insert a string at the specified position in a given string" . "<br><br>";
$string = "The brown fox";
$strInsert = "quick";
$insertpos = 4;
$newstring = substr_replace($string, $strInsert.' ', $insertpos,0);
echo $newstring;

echo "<hr>";



echo "<hr>";


echo "get first word of sentence php" . "<br><br>";
$s = 'The quick brown fox';
$arr1 = explode(' ',trim($s));
echo $arr1[0]."\n";
echo "<hr>";


echo "<hr>";


echo "write a php script to remove all leading zeros from a string" . "<br><br>";
$x = '000547023.24';
$str1 = ltrim($x, '0');
echo $str1."\n";
echo "<hr>";

echo "write a php script to remove part of string" . "<br><br>";
$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str)."\n";
echo "<hr>";


echo "<hr>";

echo "write a php script to remove trailing slash from a string" . "<br><br>";
$my_str = 'The quick brown fox jumps over the lazy dog///';
echo rtrim($my_str, '/')."\n";
echo "<hr>";


echo "<hr>";

echo "write a php script to get the characters after the last / in an url" . "<br><br>";
$my_url = 'http://www.example.com/5478631';
echo substr($my_url, strrpos($my_url, '/' )+1)."\n";
echo "<hr>";


echo "<hr>";

echo "write a php script to replace multiple characters from the following" . "<br><br>";
$my_str = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str)."\n";
echo "<hr>";



echo "<hr>";

echo "write a php script to select first 5 words from the following string" . "<br><br>";

$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";
echo "<hr>";


echo "<hr>";

echo "write a php script to remove comma from the following numeric string" . "<br><br>";

$str1 = "2,543.12";
$x = str_replace( ',', '', $str1);
if( is_numeric($x))
  {
  echo $x."\n";
  }
echo "<hr>";

















?>
