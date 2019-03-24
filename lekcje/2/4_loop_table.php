<?php

$liczba = 7;

echo '<table border="1">';

    for($i=0;$i<$liczba;$i++){

        echo '<tr>';

        $x=$liczba-1;
        
        for($j=0;$j<$liczba;$j++){

            echo '<td>';

            if($i==$j && $i!=($liczba-1)/2){
                echo '@';
                
            }

            if($i==$x){
                echo '@';
            }

            $x--;

            echo '</td>';

        }

        echo '</tr>';
    }

echo '</table>';
