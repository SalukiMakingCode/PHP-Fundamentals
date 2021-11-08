<?php
$name = $_POST['name'];
$gender = $_POST['gender'];
$teacher = $_POST['teacher'];
$teacher_gender = $_POST['teacher_gender'];
$reason = $_POST['reason'];

$text = "Dear ";
$teacher_gender=="miss" ? $text.="Miss " : $text.="Mister ";
$text.=$teacher.",</p><p>";
$text.="We are sorry to inform you that ".$name." can't go to school today (".date('l jS \of F Y').") because ";
switch ($reason) {
    case "illness" :
        $gender=="girl" ? $text.="she's sick." : $text.="he's sick." ;
        break;
    case "death" :
        $gender=="girl" ? $text.="her pet is dead this night." : $text.="his pet is dead this night." ;
        break;
    case "activity" :
        $gender=="girl" ? $text.="she have a significant extra-curricular activity." :
            $text.="he have a significant extra-curricular activity." ;
        break;
    case "failure" :
        $text.="we had a power failure this night.";
        break;
}
$text.="</p><p> Best regards, ";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://salukimakingcode.github.io/pack/pack.css" rel="stylesheet" />
    <script src="https://salukimakingcode.github.io/pack/pack.js"></script>
    <link href="assets/css/style.css" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta name="description" content="This is a fake excuse notes generator" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta charset="UTF-8">
    <title>Fake Excuse Notes Generator</title>
</head>
<body>
<header>
    <h1>Fake Excuse Notes Generator</h1>
</header>

<main>
    <p><?php echo $text; ?></p>
</main>

</body>
</html>
