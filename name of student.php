<?php
echo "Sorting array<br/>"
echo "=============<br/>"
$stud=array("Nidhi","Sreelekshmi","Agna","riya","Christy");
echo "Displaying array using print r():";
print r($stud);

echo"<br>Array in ascending order:<br/>";
asort($stud);
print r($stud);

echo "<br Array in descending order :<br/>";
arsort($stud);
print_r($stud);

?>
