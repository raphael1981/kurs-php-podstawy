<?php

echo '<table border="1">';


for ($i=1;$i<6;$i++){

    echo '<tr>';

    for($j=1;$j<6;$j++){

        echo '<td>';

        if($i==$j){
            echo '@';
        }

        echo '</td>';

    }

    echo '<tr>';

}


echo '</table>';