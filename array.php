<?php
$me = array(
    'firstname' => 'David',
    'age' => 41,
    'season' => 'Summer',
    'is_like_soccer' => true,
    'favourite_movies' => array('Back to the future', 'Matrix', 'The lord of the ring'),
);

//echo '<pre>';
//print_r($me);
//echo '</pre>';

// To continue : multidimentionnal array

$me['hobbies'] = array ('informatics', 'watching TV', 'video games');

//echo '<pre>';
//print_r($me);
//echo '</pre>';

$wife = array(
    'firstname' => 'Gaelle',
    'age' => 40,
    'season' => 'Summer',
    'is_like_soccer' => true,
    'favourite_movies' => array('Back to the future', 'Matrix', 'The lord of the ring'),
    'hobbies' => array ('watching TV', 'architecture', 'video games')
);

//echo '<pre>';
//print_r($wife);
//echo '</pre>';

$me['wife'] = $wife;

//echo '<pre>';
//print_r($me);
//echo '</pre>';

echo '<pre>';
print_r(count($wife['hobbies']));
print_r(count($me['hobbies']));
echo "<br/>";
print_r(count($wife['hobbies']) + (count($me['hobbies'])));
echo '</pre>';