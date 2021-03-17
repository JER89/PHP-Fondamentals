
<?php
$temperature = 14;
?>


<html>
<?php
if ( $temperature >= 15 ) {
    // code à exécuter si la condition donne TRUE 
  echo $vêtements = "T-shirt" ;
   $should_i_wear_a_scarf = false ;
 } else {
    // code à exécuter si la condition aboutit FALSE 
   echo $vêtements = "Pull-over" ;
    $should_i_wear_a_scarf = true ;
 }
 
 if ( $should_i_wear_a_scarf == true ) {
	  // c'est une "fausse" fonction pour le bien de l'exemple 
	 // cette fonction n'est exécutée que dans la condition est true 
	 grab_scarf_from_door_hanger ();
 }
 // La fonction suivante sera exécutée à chaque fois, 
 // mais son argument $ vêtements change en fonction du résultat 
 // de notre structure conditionnelle précédente 
    cover_my_chest_with ( $vêtements );
 
?>
</html>