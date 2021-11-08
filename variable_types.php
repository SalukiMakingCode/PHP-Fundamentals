<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Les types de variables</title>
</head>
<body>
<?php
$name="David";
$age=41;
$eye_color="brown";
$family = array (
    0 => 'Gaelle',
    1 => 'Patou',
    2 => 'Steve',
    3 => 'Isabelle',
    4 => 'Sebastien',
    5 => 'Anne-Florence'
);
$is_hungry=false;

echo "<p>Hi! My name is ".$name.".</p>";
echo "<p>I am ".$age." years old.</p>";
echo "<p>My eyes are ".$eye_color."</p>";
echo "<p>The first person in my family is ".$family[0]."</p>";
?>


</body>
</html>
