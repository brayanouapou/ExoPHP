<?php
    /*
    Exo5:
    Ecrire une fonction qui recoit un nombre puis affiche la table de multiplication
    de ce nombre(jusqu'a 12);
    la table de multiplication sera afficher sous forme d'une table HTML
    */
    define("MIN",1);
    define("MAX",100);
    $nbr=rand(MIN,MAX);
    //definition de la table HTML
    echo("<table border = 1>");
    for($i=1;$i<=12;$i++){
        //ligne
        echo("<tr>");
            //1ere colonne
            echo("<td>");
            echo($nbr);
            echo("</td>");
            //2eme colonne
            echo("<td>");
            echo(" * ");
            echo("</td>");
            //3eme colonne
            echo("<td>");
            echo($i);
            echo("</td>");
            //4eme colonne
            echo("<td>");
            echo($nbr*$i);
            echo("</td>");
        echo("</tr>");
    }
    echo("</table>");
?>