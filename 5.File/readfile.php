<?php
echo readfile("C:\Users\Dell\Documents\Codes\PHP\webdictionary.txt")."\n";

echo "\n";

$myfile = fopen("C:\Users\Dell\Documents\Codes\PHP\webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile, filesize("C:\Users\Dell\Documents\Codes\PHP\webdictionary.txt"))."\n";
fclose($myfile);

echo "\n";
$myfile = fopen("C:\Users\Dell\Documents\Codes\PHP\webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while (!feof($myfile)) {
        echo fgets($myfile) ;
}
fclose($myfile);

echo "\n\n";

$myfile = fopen("C:\Users\Dell\Documents\Codes\PHP\webdictionary.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while (!feof($myfile)) {
        echo fgetc($myfile);
}
fclose($myfile);

echo "\n";
?> 