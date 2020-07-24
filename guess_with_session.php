<?php
session_start();

// After redirect from header POST is no longer defined.
if (isset($_POST["guess"])) {
    $guess = $_POST["guess"] + 0;
    $_SESSION["guess"] = $guess;
    if ($guess == 42) {
        $_SESSION["message"] = "You guessed it right!";
    } else if ($guess < 42) {
        $_SESSION["message"] = "Too low";
    } else {
        $_SESSION["message"] = "Too high";
    }
    header("Location: guess_with_session.php");
    return;
}
?>

<html>

<head>
    <title>Guessing Game</title>
</head>

<body>
    <h1>Guessing game with Session.</h1>
    <?php
    $guess = isset($_SESSION["guess"]) ? $_SESSION["guess"] : "";
    $message = isset($_SESSION["message"]) ? $_SESSION["message"] : false;

    if ($message !== false) {
        echo $message;
    }
    ?>
    <form method="post">
        <label for="num">Input number:</label>
        <input type="text" name="guess" id="num" size="5" <?php echo "value='$guess'" ?> />
        <br>
        <input type="submit" value="Submit" />
    </form>
    <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/PostRedirectGet_DoubleSubmitSolution.png" alt="Wiki Image" />
</body>

</html>