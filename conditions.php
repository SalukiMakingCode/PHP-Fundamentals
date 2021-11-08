<?php
/**
 * Series of exercises on PHP conditional structures.
 */
// 1.1 Clean your room Exercise
//$room_is_filthy = false;
//if( $room_is_filthy ){
//    echo "Yuk, Room is dirty : let's clean it up !";
    //cleanup_room();
//    echo "<br>Room is now clean!";
//    $room_is_filthy = false;
//} else {
//    echo "<br>Nothing to do, room is neat.";
//}


// 1.2 Clean your room Exercise, improved
// Create the array of possible states
$possible_states = array (
    0 => "health hazard",
    1 => "filthy",
    2 => "dirty",
    3 => "clean",
    4 => "immaculate"
);
// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[4];
if( $room_filthiness=="health hazard" ){
    echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if( $room_filthiness=="filthy" ) {
    echo "Yuk, Room is filthy : let's clean it up !";
} else if( $room_filthiness=="dirty" ) {
    echo "Yuk, Room is dirty : let's clean it up !";
} else if( $room_filthiness=="clean" ){
        echo "Yuk, Room is clean, but is can be immaculate : let's clean it up !";
} else {
    echo "<br>Nothing to do, room is neat.";
}


echo "<br/>";
// 2. "Different greetings according to time" Exercise
$now_hour = date('G');
$now_minutes = date('i');
// Test the value of $now and display the right message according to the specifications.
if( $now_hour>=5 AND $now_hour<9 ){
    echo "Good morning !";
}
elseif ( $now_hour>=9 AND $now_hour<=12 ) {
    echo "Good day !";
}
elseif ( $now_hour>=12 AND $now_hour<=16) {
    echo "Good afternoon !";
}
elseif ( $now_hour>=16 AND $now_hour<=21 ) {
    echo "Good evening !";
}
else  {
    echo "Good night !";
}


// 3. "Different greetings according to age" Exercise
if (isset($_GET['age'])){
    if ($_GET['age']<12) $text="Hello kiddo!";
    if ($_GET['age']>=12 AND $_GET['age']<18) $text="Hello Teenager !";
    if ($_GET['age']>=18 AND $_GET['age']<=115) $text="Hello Adult !";
    if ($_GET['age']>115) $text="Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
}

if (isset($_GET['age']) && isset($_GET['gender'])){
    if ($_GET['age']<12) {
        if ($_GET['gender']=="male") $text="Hello Mister kiddo!";
        if ($_GET['gender']=="female") $text="Hello Miss kiddo!";
    }
    if ($_GET['age']>=12 AND $_GET['age']<18) {
        if ($_GET['gender']=="male") $text="Hello Mister Teenager !";
        if ($_GET['gender']=="female") $text="Hello Miss Teenager !";
    }
    if ($_GET['age']>=18 AND $_GET['age']<=115) {
        if ($_GET['gender']=="male") $text="Hello Mister Adult !";
        if ($_GET['gender']=="female") $text="Hello Miss Adult !";
    }
    if ($_GET['age']>115) {
        if ($_GET['gender']=="male") $text="Wow Mister ! Still alive ? Are you a robot, like me ? Can I hug you ?";
        if ($_GET['gender']=="female") $text="Wow Miss ! Still alive ? Are you a robot, like me ? Can I hug you ?";
    }
}

if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['english'])){
    if ($_GET['english']=="no") $welcome="Aloha";
    else $welcome="Hello";
    if ($_GET['age']<12) {
        if ($_GET['gender']=="male") $text=$welcome." Mister kiddo!";
        if ($_GET['gender']=="female") $text=$welcome." Miss kiddo!";
    }
    if ($_GET['age']>=12 AND $_GET['age']<18) {
        if ($_GET['gender']=="male") $text=$welcome." Mister Teenager !";
        if ($_GET['gender']=="female") $text=$welcome." Miss Teenager !";
    }
    if ($_GET['age']>=18 AND $_GET['age']<=115) {
        if ($_GET['gender']=="male") $text=$welcome." Mister Adult !";
        if ($_GET['gender']=="female") $text=$welcome." Miss Adult !";
    }
    if ($_GET['age']>115) {
        if ($_GET['gender']=="male") $text="Wow Mister ! Still alive ? Are you a robot, like me ? Can I hug you ?";
        if ($_GET['gender']=="female") $text="Wow Miss ! Still alive ? Are you a robot, like me ? Can I hug you ?";
    }
}
// Form (incomplete)
?>
<br/><br/>
<form method="get" action="conditions.php">
    <label for="age">What's your age
        <input type="text" name="age">
    </label>

    <br/>

    <label for="gender">Male
    <input type="radio" name="gender" value="male" checked>
    </label>

    <label for="gender">Female
        <input type="radio" name="gender" value="female">
    </label>

    <br/>

    Do you speak english ?

    <label for="gender">yes
        <input type="radio" name="english" value="yes" checked>
    </label>

    <label for="gender">no
        <input type="radio" name="english" value="no">
    </label>

    <br/>

    <input type="submit" name="submit" value="Greet me now">
</form>

<?php
if (isset($_GET['age'])) {
    echo $text;
}
?>



<?php
//////////////////////////////////////////////////////////////////////////////////////
$soccer_text="Sorry you don't fit the criteria";
if (ISSET($_GET['soccer_age'])) {
    if ($_GET['soccer_age']>20 AND $_GET['soccer_age']<41 AND $_GET['soccer_gender']=="female") {
        $soccer_text="welcome to the team !";
    }
}
?>
<h1>Soccer team :</h1>

<form method="get" action="conditions.php">
    <label for="soccer_name">What's your name
        <input type="text" name="soccer_name">
    </label>
    <label for="soccer_age">What's your age
        <input type="text" name="soccer_age">
    </label>
    <br/>
    <label for="soccer_gender">Male
        <input type="radio" name="soccer_gender" value="male" checked>
    </label>
    <label for="soccer_gender">Female
        <input type="radio" name="soccer_gender" value="female">
    </label>
    <input type="submit" name="submit" value="Greet me now">
</form>

<?php
if (ISSET($_GET['soccer_age'])) {
    echo $soccer_text;
    }
?>

<?php
//////////////////////////////////////////////////////////////////////////////////////
if (isset($_GET['score'])) {
    $score=$_GET['score'];
    if ($score<5) $score_text="This work is really bad. What a dumb kid! ";
    if ($score>4 AND $score<10) $score_text="This is not sufficient. More studying is required.";
    if ($score==10) $score_text="barely enough!";
    if ($score>10 AND $score<15) $score_text="Not bad!";
    if ($score>14 AND $score<19) $score_text="Bravo, bravissimo!";
    if ($score>18) $score_text="Too good to be true : confront the cheater!";
}
?>

<h1>Score the student :</h1>

<form method="get" action="conditions.php">
    <label for="score">How much does he/she have ?
        <input type="text" name="score">
    </label>
    <input type="submit" name="submit" value="Greet me now">
</form>

<?php
if (isset($_GET['score'])) echo $score_text;
?>
