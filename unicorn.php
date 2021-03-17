<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>
<body>
    <h2>11.2 Unicorn</h2>

    <p><?php
    
    if(isset($_GET["type"])){

        $gif = ($_GET["type"] == 'human') ? "<img src='https://media.giphy.com/media/495ybhbz2CxWJoenNM/giphy.gif'/>":
            (($_GET["type"] == 'cat') ? "<img src='https://media.giphy.com/media/v6aOjy0Qo1fIA/giphy.gif' />" :
            "<img src='https://media.giphy.com/media/CLWiHc1PjFy0XBBPs2/giphy.gif />");
    
        }

        echo $gif;
    
    ?></p>
     <form method="GET" action="">
        <p> 
        Are you a human, a cat or a unicorn ? 
            <input type="radio" name="type" value="human"/>
            <label for="human">Human</label> 

            <input type="radio" name="type" value="cat"/>
            <label for="cat">Cat</label> 

            <input type="radio" name="type" value="unicorn" />
            <label for="unicorn">Unicorn</label> 
        </p>

            <input type="submit" name="submit" value="Click me">
        </form>


</body>
</html>