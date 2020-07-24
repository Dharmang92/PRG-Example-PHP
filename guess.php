<?php
$guess = "";
$message = false;

if (isset($_POST["guess"]) && strlen($_POST["guess"]) > 0) {
    $guess = $_POST["guess"] + 0;
    if ($guess == 42) {
        $message = "You guessed it right!";
    } else if ($guess < 42) {
        $message = "Too low";
    } else {
        $message = "Too high";
    }
}
?>

<html>

<head>
    <title>Guessing Game</title>
</head>

<body>
    <h1>Guessing game without Session.</h1>
    <?php
    if ($message !== false) {
        echo $message;
    }
    ?>
    <form method="post">
        <label for="num">Input number:</label>
        <input type="text" name="guess" id="num" size="5" />
        <br>
        <input type="submit" value="Submit" />
    </form>
</body>

</html>