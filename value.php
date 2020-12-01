<!DOCTYPE html>

<?php include "./header.html" ?>
<?php 
session_start();
$_SESSION['type']=$_GET['type'];
?>

<form action="traitement.php" method="POST" >

<fieldset>
<legend> Veuillez Insérer Les Paramètres </legend>

<p><label> Nombre de Variables ? : </label><input type="number" name="vari" /></p> 
<p><label> Nombre de Contraintes ? : </label><input type="number" name="cont"  /></p>
</fieldset>

<p><center><input type="submit" value="continuer" name="continuer" /></center></p>

</form>
 


</body>
</html>