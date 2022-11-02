<?php
    /*
    Exo6:
    Ecrire un algorithme qui affiche toutes les tables de multiplication de 1 a 12
    les tables de multiplication sont afficher sous la forme d'une table HTML
    sachant que chaque de sequence de multiplication se trouvent dans une colonne de la table
    */
   echo "<table border = 1 width= 90%";
    for ($j =1; $j<=12;$j++) 
    {
    echo"<tr>"; 
    for($k =1; $k <=12;$k++)
    {
    echo "<td>";
    $total=$j*$k;
    echo "$j *$k =$total";
    echo "</td>";
    }
    echo "</tr>";
    }
    echo "</table>";
?>