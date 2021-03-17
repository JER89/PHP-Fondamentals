
<?php
$name = Jerem;
?>
<?php
$age = 19;
?>
<?php
$eye = verts;
?>

<?php
$family = array(
	0 => 'Mama',
	1 => 'papa',
	2 => 'soeur',
	3 => 'frère');
?>	

<html>
<p> Salut! Mon nom est <?php  echo  $_GET [ 'name' ]; ?> ! </p> 


	   
<p> J'ai <?php echo $_GET ['age']; ?> ans </p> 

	   	
<p> Mes yeux sont <?php  echo  $_GET [ 'eye' ]; ?>  </p> 

<p> La premiere personne de ma famille est <?php echo $_GET ['Mama']; ?> </p>
</html>
