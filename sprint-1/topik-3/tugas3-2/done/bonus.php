<?php
$n = 9;
for ($i=1; $i <= $n; $i++){
    for ($j=1; $j <= $n; $j++){
    if ($i==1) {
       echo "+ " ;
    }
    elseif ($j==1 && ($j*$i<=5)) {
        echo "+ ";
    }
    elseif ($i==5){
        echo "+ ";
    }
    elseif ($j==9 && ($j*$i>=45)) {
        echo "+ ";
    }
    elseif ($i==9)
        {echo "+ ";
        }
    
       else {
           echo "- ";
       }
    
    }
    echo "\n";
}