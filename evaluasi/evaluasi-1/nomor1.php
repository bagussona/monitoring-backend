<?php
$n = 9;
for ($i=1; $i <= $n; $i++){
    for ($j=1; $j <= $n; $j++){
        if ($j == 1)  {
            echo "+";
         }
         elseif ($j == 3){
         echo "+";  
         }
         elseif ($j == 5){
             echo "+";  
             }
             elseif ($j == 7){
                 echo "+";  
                 }
                 elseif ($j == 9){
                     echo "+";  
                     }
         else{
             echo "-";
         }
     }
     echo "\n"; 
     }
     ?>

<?php
$n = 9;
for ($i=1; $i <= $n; $i++){
    for ($j=1; $j <= $n; $j++){
    if ($i == 1)  {
       echo "-";
    }
    elseif ($i == 3){
    echo "-";  
    }
    elseif ($i == 5){
        echo "-";  
        }
        elseif ($i == 7){
            echo "-";  
            }
            elseif ($i == 9){
                echo "-";  
                }
    else{
        echo "+";
    }
}
echo "\n"; 
}
?>