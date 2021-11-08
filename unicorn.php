<?php
$img = $_POST['user_type'] == "human" ? "human" : ($_POST['user_type'] == "cat" ? "cat" : "unicorn") ;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Ternaire Unicorn</title>
</head>
<body>
<form action="unicorn.php" method="post">
    <label for="user_type">
        <select name="user_type">
            <option value="human">Human</option>
            <option value="cat">Cat</option>
            <option value="unicorn">Unicorn</option>
        </select>
    </label>
    <input type="submit" value="send">
</form>


<img src='<?php echo $img; ?>.gif' alt='<?php echo $img; ?>' />

</body>
</html>
