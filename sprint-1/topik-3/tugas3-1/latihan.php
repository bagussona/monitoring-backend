<!-- Syntax default -->

<?php
for ($i=1; $i < 10; $i++){
    for ($j=1; $j < 10; $j++){
        echo "($i x $j)";
    }
    echo "\n";
}
?>

<!-- Syntax default WHILE -->

<?php
$i = 1;
while ($i <= 10){
    echo $i . ',';
    $i++;
}


?>

<!-- syntax default FOR -->

<?php
for ($i= 1; $i <= 10; $i++)
{
   echo "$i";
}
?>

<!-- syntax default FOR CONTINUE -->

<?php
for ($i=0; $i <10; $i++)
{
  if ($i==7)
  {
  continue;
  }
echo $i;
echo "<br />";
}