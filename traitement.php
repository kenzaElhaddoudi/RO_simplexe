<!DOCTYPE html>

<?php include "./header.html" ?>

<?php


if(isset($_POST['continuer']))
  {   
   

     //creation des variables globales
  	session_start();
  	$_SESSION['vari']=$_POST['vari'];	
    $_SESSION['cont']=$_POST['cont'];
    

    //envoyer les donneés à resultat1.php
	echo '<form action="resultat.php" method="POST">' ;
	//creation des cases des variables 
	for($i=1;$i<=$_POST['vari'];$i++)
	{

          if($i==1) { echo'La Fonction Objectif est '.$_SESSION['type'].' Z = '; }
          if($i!=$_POST['vari']) { echo '<input type="number" step="0.001" name="cout[]">';  echo"X".$i."+"; }
          else { echo '<input type="number" step="0.001" name="cout[]">';  echo"X".$i; }
    }

	echo '<br><br><br>';

	//creation des cases des contraintes
	echo'Sous Contraintes :';
	echo'<br><br>';

	for($j=1;$j<=$_POST['cont'];$j++)
	{
		for($i=1;$i<=$_POST['vari'];$i++)
		{
			if($i!=$_POST['vari'])
			{    echo'<input type="number" step="0.001" name="A[]">';  
			     echo"X".$i."+";
			}
			else
			{
                echo'<input type="number" step="0.001" name="A[]">';
				echo"X".$i;
				//choix des bornes
				echo'<select name=borne[]>
				     <option value="inf"> <=  </option>
				     <option value="sup"> >=   </option>
				     <option value="egal"> =   </option> 
				     
				     </select>';

				     

				echo'<input type="number" step="0.001" name="b[]">';
				echo"</br>";
			}
		}
		echo"</br>";
	}

    echo'<br>';


    //les variables positives
    for($i=1;$i<=$_POST['vari'];$i++)
    {
    	echo' X'.$i.'≥0 ';
    	echo'<br>';
    }
	
	echo'<br>';
	echo'<h4><p style="color: red;">Attention: Veuillez remplir tous les champs,si vide insérez 0</p></h4>';

   

	echo'<br><br><br>';
	echo'<center><input type="submit" value="continuer" name="continuer1"></center>';
    echo'</form>';

  }


?>
</body>
</html>