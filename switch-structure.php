<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p><?php
    if (isset($_GET['note'])) {
        
    
        switch ($_GET['note']) {

            case ($note >= 0):
                echo 'This work is really very bad. What a dumb kid!';
                break;
            case ($note >= 5):
                echo "This is not sufficient. More studying is required.";
                break;
            case ($note >= 10):
                echo 'Barely enough';
                break;
            case ($note >= 11):
                echo 'Not bad';
                break;
            case ($note >= 15):
                echo 'Bravo, Bravissimo !';
                break;
            case ($note >= 19):
                echo 'Too good to be true : confront the cheater!';
                break;
        }
    }

    ?></p>

    <form method="GET" action="">
        <label for="note">Note</label>
        <input type='text' name='note'>
        <input type='submit' name='submit' value ='Submit'>
    </form>

    
</body>
</html>