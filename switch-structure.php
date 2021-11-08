<?php
//////////////////////////////////////////////////////////////////////////////////////
if (isset($_GET['score'])) {
    switch ($_GET['score']) {
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
            $score_text = "This work is really bad. What a dumb kid! ";
            break;
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
            $score_text = "This is not sufficient. More studying is required.";
            break;
        case 10:
            $score_text = "barely enough!";
            break;
        case 11:
        case 12:
        case 13:
        case 14:
            $score_text = "Not bad!";
            break;
        case 15:
        case 16:
        case 17:
        case 18:
            $score_text = "Bravo, bravissimo!";
            break;
        case 19:
        case 20:
            $score_text = "Too good to be true : confront the cheater!";
            break;
        default:
            $score_text = "This is not a good score";
    }
}
?>

<h1>Score the student :</h1>

<form method="get" action="switch-structure.php">
    <label for="score">How much does he/she have ?
        <input type="text" name="score">
    </label>
    <input type="submit" name="submit" value="Greet me now">
</form>

<?php
if (isset($_GET['score'])) echo $score_text;
?>
