<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--=========== EXEMPLES ==================-->
<p><?php

$names = array('John', 'jeanne', 'Joan', 'emile');
foreach ($names as $name){
    echo ucfirst($name);
}
?></p>

<p><?php
$names = array('John', 'jeanne', 'Joan', 'Emile');
var_dump($names); foreach($names as $key => $value) {
    $names[$key] = ucfirst ($value);
} var_dump($names);
?></p>


<!--============ EXERCICES ===============-->

<p><?php
$pronouns = array('I', 'You','He/She', 'We', 'You', 'They');
foreach ($pronouns as $pronouns) {
    $code = ($pronouns == 'He/She') ? $code = 'codes' : $code = 'code';
    echo $pronouns . " " . $code . "<br/>";
}

?></p>

<!--=======================================================-->

<h2>Write a script that prints the numbers from 1 to 120 using WHILE</h2>
<p><?php
$amount_of_lines = 1;

while($amount_of_lines <= 120) {
    echo '' . $amount_of_lines . '</br>';
    $amount_of_lines++;
}
?></p>

<!--========================================================-->

<h2>Write a script that prints the numbers from 1 to 120 using FOR </h2>

<p><?php

for ($amount_of_lines = 1; $amount_of_lines <= 120;
$amount_of_lines++) {
    echo '' . $amount_of_lines . '</br>';
}
?></p>

<!--=======================================================-->

<h2>An array with the firstname of collabo. Display each firstname using a loop.</h2>

<p><?php

$collab = ['Rita', 'Michel', 'George', 'Neven', 'Ukra'];

for($i=0; $i <= 5; $i++) {
    echo $collab[$i] . '</br>';
}

?></p>

<!--======================================================-->

<h2>An array with ten countries. Generate html with selct box inside html</h2>

<p><?php

$countries = array(
    "BE" => "Belgium",
    "CZ" => "Czechia",
    "DK" => "Denmark",
    "FI" => "Finland",
    "DE" => "Germany",
    "FR" => "France",
    "IT" => "Italy",
    "LU" => "Luxembourg",
    "ES" => "Spain"
);

?><select>
    <option value = "">-- Select a Country --</option><?php

    foreach($countries as $country) {
        $iso = key($country);
        echo "<option value =" .$iso.">".$country."</option>";
    }
?></select></p>

</body>
</html>