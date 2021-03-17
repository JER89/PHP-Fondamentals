    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Conditions : Excercises</title>
    </head>
    <body>
        



    <h1> Série d'exercices sur les structures conditionnelles PHP </h1>

    <h2>1.1 Nettoyez votre chambre Exercice</h2> 
    <p><?php
    $room_is_filthy = true;

    if ($room_is_filthy = false) { echo  "Yuk, la pièce est sale: nettoyons-la
        !";
        cleanup_room();
        echo  "<br> La chambre est maintenant propre!" ;
        $room_is_filthy = false ;
    } else {
        echo  "<br> Rien à faire, la chambre est soignée." ;
    }
    ?></p>

    <!--=========================================================================-->




    <h2> 1.2 Nettoyez votre salle Exercice, amélioré</h2>

    <p><?php 

    // Crée le tableau des états

    $possible_states = array("health hazard","filthy","dirty","clean","immaculate");

    // Lors du test, changez la valeur d'index pour accéder aux valeurs possibles du tableau 
    $room_filthiness = $possible_states [3];

    if($room_filthiness == $possible_states[0]){ echo  "Yuk, la chambre est dégoûtante! Nettoyons-la
        !";
    } elseif($room_filthiness == $possibles_states[2]){ echo  "Yuk, la pièce est sale: nettoyons-la
        !";
    } else {
        echo  "<br> Rien à faire, la chambre est soignée.";
    }
    ?></p>

    <!--=============================================================-->

    <h2> 2. "Salutations différentes selon l'heure" Exercice </h2>

    <p><?php

    date_default_timezone_set("Europe/Bruxelles");

    $now = date('H:i'); 

    echo 'Now, it\'s  ' . $now . ', ';
    // Tester la valeur de $ now et afficher le bon message selon les spécifications. 
    if ($now >='05:00' && $now <= '09:00'){
        echo "Good Moooorning!";
    } elseif ($now > '09:00' && $now <= '12:00'){
        echo "Good Day!";
    }elseif ($now > '12:00' && $now <= '16:00'){
        echo "Good afternoon!";
    }elseif ($now >'16:00' && $now <= '21:00'){
        echo "Good evening!";
    }else{
        echo "Good night!";
    }

    ?></p>

    <!--=================================================================-->

    <h2>3. "Différents messages d' accueil selon l'âge" Exercice </h2>

    <p><?php

    if (isset($_GET['age'])){

        if ($_GET['age'] < 12){
            echo "Hello Kiddo !";
        }elseif ($_GET['age'] >= 12 && $_GET['age'] < 18){
            echo "Hello Teenager !";
        }elseif ($_GET['age'] >= 18 && $_GET['age'] < 115){
            echo "Hello Adult !";
        }elseif ($_GET['age'] >= 115){
            echo "Wow! Still alive? Are you a robot, like me ? Can I hug you?";
        } 
    }

    ?></p> 


    
    <!--FORMULAIRE-->	 
    <form method="GET" action="">	 
        <p> <label for="age">Please enter your age : <input type="" name="age"></label></p> 
        <input type="submit" name="submit" value="Validate" > 
    </form>

    <!--============================================================================-->

    <h2>4. Affichez un message d'accueil différent selon l'âge et le sexe de l'utilisateur.</h2>

    <p><?php

    if (isset($_GET['age']) && isset($_GET['gender'])){
        
        if ($_GET['age'] < 12){
            if($_GET['gender'] == 'woman'){
                echo "Hello miss Kiddo !";
            }elseif ($_GET['gender'] == 'man'){
                echo "Hello mister Kiddo !";
            }

        }elseif ($_GET['age'] >= 12 && $_GET['age'] < 18){
            if ($_GET['gender'] == 'woman'){
                echo "Hello miss teen !";
            }elseif ($_GET['gender'] == 'man'){
                echo "Hello mister teen !";
        }

        }elseif ($_GET['age'] >= 18 && $_GET['age'] < 115){
            if ($_GET['gender'] == 'woman'){
                echo "Hello miss adult !";
            }elseif ($_GET['gender'] == 'man'){
                echo "Hello mister adult !";
            }

        }elseif ($_GET['age'] >= 115){
            if ($_GET['gender'] == 'woman'){
                echo "Wow! Still alive? Are you a robot, like me? Can I hug you ?";
            }elseif ($_GET['gender'] == 'man'){ 
                echo "Wow! Still alive? Are you a robot, like me? Can I hug you ?";
            }
        }

    }



    ?></p>

    <!--FORMULAIRE-->
    <form method="GET" action="">
                <p> <label for="age">Please type your age : <input type="" name="age"> </label> </p>

                <p> 
                    Man or Woman? 
                    <input type="radio" name="gender" value="woman"/>
                    <label for="woman">Woman</label> 

                    <input type="radio" name="gender" value="man"/>
                    <label for="man">Man</label> 
                </p>

                <input type="submit" name="submit" value="Submit">
            </form>

    <!--======================================================================-->

    <h2>5. Affichez un message d'accueil différent selon l'âge, le sexe et la langue maternelle de l'utilisateur.</h2>
    <p><?php

    if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['english'])){

    // KID
        if ($_GET['age'] < 12){
            if($_GET['gender'] == 'woman'){
                if ($_GET['english'] == 'yes'){
                    echo "Hello Kiddo Girl !";
                } elseif ($_GET['english'] == 'no'){
                    echo "Aloha Kiddo Girl !";
                }
            }
        } elseif ($_GET['gender'] == 'man'){
            if ($_GET['english'] == 'yes'){
                    echo "Hello Kiddo Boy !";
            } elseif($_GET['english'] == 'no'){
                    echo "Aloha Kiddo Boy !";
            }
        }

    // TEENAGER
    } elseif ($_GET['age'] >= 12 && $_GET['age'] < 18){
        if ($_GET['gender'] == 'woman'){
            if ($_GET['english'] == 'yes'){
                echo "Hello Teen Girl !";
            } elseif ($_GET['english'] == 'no'){
                echo "Aloha Teen Girl !";
            } 
            
        } elseif ($_GET['gender'] == 'man'){
            if ($_GET['english'] == 'yes'){
                echo "Hello Teen Boy !"; 
            } elseif ($_GET['english'] == 'no'){
                echo "Aloha Teen Boy !";
            
            }
        }

    // ADULT
    } elseif ($_GET['age'] >= 18 && $_GET['age'] < 115){
        if ($_GET['gender'] == 'woman'){
            if ($_GET['english'] == 'yes'){
                echo "Hello Adult Girl !"; 
            } elseif ($_GET['english'] == 'no'){
                echo "Aloha Adult Girl !";
            }
        } elseif ($_GET['gender'] == 'man'){
            if ($_GET['english'] == 'yes'){
                echo "Hello Adult Boy !"; 
            } elseif ($_GET['english'] == 'no'){
                echo "Aloha Adult Boy !";
            }
        }


    //ROBOT
    } elseif ($_GET['age'] >= 115){
        if ($_GET['gender'] == 'woman'){
            if ($_GET['english'] == 'yes'){
                echo "Hello Robot Girl !"; 
            } elseif ($_GET['english'] == 'no'){
                echo "Aloha Robot Girl !";
            }
        } elseif ($_GET['gender'] == 'man'){
            if ($_GET['english'] == 'yes'){
                echo "Hello Robot Boy !"; 
            } elseif ($_GET['english'] == 'no'){
                echo "Aloha Robot Boy !";
            }
        }
    }


    ?></p>

    <!--FORMULAIRE-->
    <form method="GET" action="">
    <p> <label for="age">Please type your age : <input type="" name="age"> </label> </p>

    <p> 
        Man or Woman? 
        <input type="radio" name="gender" value="woman"/>
        <label for="woman">Woman</label> 

        <input type="radio" name="gender" value="man"/>
        <label for="man">Man</label> 
    </p>

    <p>
        Do you speak English ?
        <input type="radio" name="english" value="yes"/>
        <label for="yes">Yes</label>

        <input type="radio" name="english" value="no" />
        <label for="no">No</label>
    </p>

    <input type="submit" name="submit" value="Submit">
    </form>

    <!--====================================================================-->

    <h2>6. L'équipe de football féminin </h2>

    <p><?php

        if(isset($_GET['age']) && isset($_GET['gender'])){
            $gender = $_GET['gender'];
            $age = $_GET['age'];
            if ($age >= 21 && $age <= 40 && $gender == 'female') {
                echo 'Welcome to the team';
            }else {
                echo 'Sorry, you don\'t meet the criteria';
            }
        }

    ?></p>

        <form method='GET' action="">
        <label for="age">What's your age</label>
        <input type ='text' name= 'age'><br>
        <input type='radio' name='gender' value="male">
        <label for='male'>Male</label><br>
        <input type='radio' name='gender' value='female'>
        <label for='female'>Female</label><br>
        <input type="submit" name='submit' value='Join the team'>
        </form>

    <!--=====================================================================-->

    <h2>7. Réalisez la même chose, sans l'ELSE.</h2>

    <p><?php

        if(isset($_GET['age']) && isset($_GET['gender'])) {
            $gender = $_GET['gender'];
            $age = $_GET['age'];
            $message= 'Sorry don\'t math the criteria';
            if ($age >= 21 && $age >= 40 && $gender == 'female') {
                $message = 'Welcome to the team';
            }
            echo $message;
        }

    ?></p>

        <form method='GET' action="">
        <label for="age">What's your age</label>
        <input type ='text' name= 'age'><br>
        <input type='radio' name='gender' value="male">
        <label for='male'>Male</label><br>
        <input type='radio' name='gender' value='female'>
        <label for='female'>Female</label><br>
        <input type="submit" name='submit' value='Join the team'>
        </form>

<!--================================================================-->
    
    <h2>8. "L'école, ça craint!"</h2>

    <p><?php
        if (isset($_GET['note'])) {
            $note = $_GET['note'];

            if ($note <= 4) {
                echo  "This work is really bad. What a dumb kid! ";
            }elseif ($note >= 5 && $note < 9) {
                echo "This is not sufficient. More studying is required.";
            }elseif ($note == 10) {
                echo "Barely enough!";
            }elseif ($note >= 11 && $note < 15) {
                echo "Not bad!";
            }elseif ($note >= 15 && $note <= 18) {
                echo "Bravo, bravissimo!";
            }elseif ($note >= 19 && $note <= 20) {
                echo "Too good to be true : confront the cheater!";
            }else {

            }
        }


    ?></p>

    <form method="GET" action="">
        <label for="note">Note</label>
        <input type="text" name="note">
        <input type="submit" name="submit" value="Submit">
    </form>

<!--=====================================================================-->



    </body>
    </html>