<?php
    /*
    Exo4:
    Ecrire un algorithme qui permet de generer n notes puis determine et affiche:
    -la note la plus petite,la note la plus grande;
    -la moyenne des notes;
    NB:n doit etre generer et est postif 
    */
    define("MIN",-20.00);
    define("MAX",20.00);
    $n=10;
    $tab=[$n];
    $som=0;
    for($i=0;$i<$n;$i++){
        do{
            $nb=rand(MIN,MAX);
        }while($nb<0);
        $tab[$i]=$nb;
    }
    foreach($tab as $nbr){
        echo($nbr." | ");
    }
    $min=$tab[0];
    $max=$tab[$n];
    foreach($tab as $i => $nbr){
        if($tab[$i]<$min){
            $min=$tab[$i];
        }
        if($tab[$i]>$max){
            $max=$tab[$i];
        }
        $som=$som+$tab[$i];
        //$som+=$i;
    }
    echo("La plus petite note est: ".$min);
    echo("<br>");
    echo("La plus grande note est: ".$max);
    echo("<br>");
    echo("La moyenne des notes est: ".$som/$n);
?>