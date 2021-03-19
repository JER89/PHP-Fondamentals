<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP forms</title>
</head>
<body>

<?php
    echo "<pre>";
    print_r($_POST);
?>

<form method="post" action="forms.php">

<label for="fullname">What's your name?</label>
<input name="fullname" type="text">

<label for="age">How old are you?</label>
<input name="age" type="number">

<label for='artist'> Do you prefer Warhol or Basquiat?</label>
<input name="artist" type='radio' value='warhol'><label for="warhol">Warhol</label>
<input name='artist' type ='radio' value ='basquiat'><label for='basquiat'>Basquiat</label>

<label for='life'>About your life.</label>
<textarea name='life' cols='50' rows='15'></textarea>

<input type="submit" value='Submit'>
</form>
    
</body>
</html>