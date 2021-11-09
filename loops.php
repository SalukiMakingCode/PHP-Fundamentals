<?php
$names= array('John', 'jeanne', 'Joan', 'émile');
foreach ($names as $name){
    echo ucfirst($name);
}

$names= array('John', 'jeanne', 'Joan', 'émile');
var_dump($names);

foreach ($names as $key => $value){
    $names[$key] = ucfirst($value);
}
var_dump($names);


$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
foreach ($pronouns as $key => $value) {
    echo $value;
    if ($key==2) echo " codes";
    else echo " code";
    echo "<br/>";
}

$number=1;
while ($number<121) {
    echo $number." ";
    $number++;
}
echo "<br/>";


for ($number=1;$number<121;$number++) echo $number." ";