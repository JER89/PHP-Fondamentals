<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Transform a string</h2>

<p><?php
$text = "According to a researcher (sic) at Cambridge University, it doesn't matter in what order 
the letters in a word are, the only important thing is that the first and last letter be at the right place.
The rest can be a total mess and you can still read it without problem. This is because the human mind does
not read every letter by itself but the word as a whole.";

$words = explode(" ", $text);

    foreach($words as $word) {
    echo str_shuffle($word). " ";
}

?></p>
<!--=============================================================-->
<h2>Capitalize</h2>
<p><?php


?></p>



<!--=============================================================-->
<h2>Display year</h2>



<!--=============================================================-->
<h2>Display date and hour</h2>

<p><?php
date_default_timezone_set('Europe/Paris');

echo date("d/m/Y H:i:s");
?></p>


<!--=============================================================-->
<h2>Sum" function that takes 2 numbers and returns their sum.</h2>

<p><?php
function Sum($a, $b) {
    if (is_numeric($a) == true && is_numeric($b) == true) {
        return($a + $b);
    }
     return "Error: argument is not a number.";
}
echo Sum(1, 4);

?></p>

<!--=============================================================-->
<h2>Function acronym</h2>

<p><?php

function makeAcronym($string) {
    $arr = explode(' ', $string);
    foreach($arr as $elem) {
        $elem = ucfirst(substr($elem, 0, 1));
        echo $elem;
    }
}
makeAcronym('In code we trust!');
?></p>


<!--============================================================-->
<h2>Function replace letters</h2>

<p><?php

?></p>

<!--=============================================================-->



</body>
</html>