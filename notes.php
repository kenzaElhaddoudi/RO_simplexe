<!Doctype html>
<?php

        global    $coef = ['POO' => 4 , 'PHP' => 6 , 'BD' => 2];
        public function lire_notes()
        
        vSql = "Select tetudiant.nom as nom, tetudiant.prenom as prenom,tmoyenne.valeur as moyennes From tMoyenne";
        $vQuery = pg_query($vConn, $vSql);
        while($vResult = pg_fetch_array($vQuery)) {
            echo "<tr>";
            echo "<td>$vResult[nom]</td>";
            echo "<td>$vResult[prénom]</td>";
            echo "<td>$vResult[Matiére]</td>";
            echo "<td>$vResult[Moyenne]</td>";
            echo "</tr>";
}


function fMoyenne ($pLogin, $pConn) {
$vSql = "Select Avg(valeur) as moyenne From tNotes Where etudiant='$pLogin';";
$vQuery = pg_query($pConn, $vSql);
$vResult = pg_fetch_array($vQuery);
if(is_null($vResult['moyenne'])) {
  return -1 ;
}
else 
  return $vResult['moyenne'];
}
?>