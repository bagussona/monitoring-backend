<?php
$n = 9;
for ($i=1; $i <= $n; $i++){
    for ($j=1; $j <= $n; $j++){
    if ($i==$j) {
       echo ($j*2-1) ;
    }
        else{echo "- ";}
    
    }
       
echo "\n"; 
}