<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake Excuse Notes Generator</title>
</head>
<body>
    <h2>Apology Generator</h2>

    <?php
    date_default_timezone_set("Europe/Bruxelles");
    $date = date('l\, d F Y');
   
    echo $date;

    ?>

    <form method="GET" action="">

        <p><label for="name">Please type the name of your child :<input type="" name="name"></label></p>
        <p><label for="boy">Boy</label><input type="radio" name="gender" value="boy"/></p>
        <p><label for="girl">Girl</label><input type="radio" name="gender" value="girl"/></p>

        <p><label for="teacher">Name of the teacher : <input type="" name="teacher"></label></p>

        <p>Reason for the absence ?</p>

        <p><label for="illness">Illness</label><input type="radio" name="reason" value="illness"/></p>
        <p><label for="lost">Death of the the pet(or a family member)</label><input type="radio" name="reason" value="lost"/></p>
        <p><label for="activity">Significant extra-curricular activity</label><input type="radio" name="reason" value="activity"/></p>
        <p><label for="other"> any other</label><input type="radio" name="reason" value="other"/></p>

        <p><input type="submit" name="submit" value="Submit"></p>
    </form>


    
</body>
</html>