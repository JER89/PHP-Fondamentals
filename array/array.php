<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>1. Array of countries :</h2>

<p><?php

    $countries = array('Belgium', 'France', 'Germany', 'Netherlands', 'Ukraine');
    echo $countries[2];

?></p>

<!--=============================================-->

<h2>2. Array of members of family</h2>

<p><?php

    $members_of_family = ['Daddy', 'Mummy','Sister', 'Brother'];
        print_r($members_of_family);
?></p>
<p><?php

    $favorite_recipes = ['Pasta', 'Pizza', 'vegetables', 'Burger'];
        print_r($favorite_recipes);
?></p>
<p><?php

    $favorite_films = ['Dikkenek', 'Peaky', 'No country', 'Mystic River'];
        echo $favorite_films[0];
?></p>

<!--===========================================-->

<h2>Most array operations</h2>

<h3>Check the content of an array for debugging</h3>

<p><?php
    echo  '<pre>';
    print_r ($countries);
    echo  '</pre>';
?></p>

<p><?php
    var_dump($countries);
?></p>

<h3>Add an element</h3>

<p><?php
    array_push($countries, 'England');
    print_r($countries);

    //short way
    //$countries[]='England';
?></p>

<h3>Replace the value of a key by another one</h3>

<p><?php
    $person['function'] = 'Web Dev Junior';
    echo $person['function'];
?></p>

<p><?php
    $person['function'] = 'Développeur Web Junior' ;
    $person ['function'] = 'Développeur Web senior' ;
    echo $person['function'];
?></p>

<!--==========================================================-->

<h2>Associative Arrays</h2>

<h3>Describe yourself using an associative array:</h3>

<p><?php
    $me = array(
        'Lastname' => 'Mertens',
        'Firstname' => 'Jeremy',
        'age' => 31,
        'city' => 'Seneffe',
        'favorite season' => 'Winter',
        'Soccer ?' => TRUE
    );

    echo '<pre>';
    print_r($me);
    echo '</pre>';
?></p>

<p>* Multidimensional arrays</p>

<p><?php
    $me = array(
        'Lastname' => 'Mertens',
        'Firstname' => 'Jeremy',
        'age' => 31,
        'city' => 'Seneffe',
        'favorite season' => 'Winter',
        'Soccer ?' => TRUE,
        'favorite films' => array('Dikkenek', 'Peaky', 'No country', 'Mystic River')
    );

    echo '<pre>';
    print_r($me);
    echo '</pre>';  
?></p>

<p><?php
    $mother = [
        'firstname' => 'Pascale',
        'lastname' => 'Dubois',
        'age' => '60',
        'favorite season' => 'summer',
        'soccer ?' => FALSE,
        'favorite films' => ['Pic', 'Paf', 'Pouf'],
        'hobbies' => ['paf', 'pouf', 'pif']
    ];

    echo '<pre>';
    print_r($mother);
    echo '</pre>';
?></p>

<p><?php
    $me['mother'] = $mother;

    echo '<pre>';
    print_r($me);
    echo '</pre>';
?></p>

<!--====================================================================-->

<h2>Manipulating arrays</h2>

<h3>Count the number of elements</h3>

<p><?php
//Count mum's Hobbies
    echo '<pre>';
    print_r(count($me['mother']['hobbies']));
    echo '</pre>';
//Count me
    echo '<pre>';
    print_r(count($me['hobbies']));
    echo '</pre>';
//Total Both
    echo '<pre>';
    print_r(count($me['hobbies']) + count($me['mother']['hobbies']));
    echo '</pre>';
?></p>

<h3>Add an element in a multi-dimensional array</h3>

<p><?php
    $me['hobbies'] [] = 'Taxidermy';

    echo '<pre>';
    print_r($me);
    echo '</pre>';
?></p>

<h3>Replace<h3>

<p><?php
    $me['lastname'] ='Durand';

    echo '<pre>';
    print_r($me);
    echo '</pre>';
?></p>

<p><?php
    $soulmate = array(
        'firstname' => '??',
        'lastname'  => '???',
        'age' => 30,
        'city' => 'Seneffe',
        'favorite season' => 'Winter',
        'soccer ?' => TRUE,
        'favorite films' => ['Lord', '21', 'The way'],
        'hobbies' => ['Sport', 'Wild', 'Dog']
    );

    echo '<pre>';
    print_r($soulmate);
    echo '</pre>';
    
?></p>

</body>
</html>