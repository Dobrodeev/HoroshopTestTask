<?php
//use classes\Dog;
$command = addslashes(trim($_POST['command']));
// в названии собаки может быть тире, его убираем
$command = str_replace("-", "", $command);
$command = mb_strtolower($command);
$command = explode(" ", $command);
if (is_array($command) && COUNT($command) == 2) {
    if (file_exists(__DIR__.'/classes/'.$command[0].'.php')) {
        include 'classes/Dog.php';
        include 'classes/'.$command[0].'.php';
        $dog = new $command[0];
        if (method_exists($dog, $command[1])) {
            // если без {command[1]}, то Fatal error: Uncaught Error: Function name must be a string
            echo '<div class="resp">'.$dog->{$command[1]}().'</div>';
        } else {
            echo '<div class="error">'.$command[0].' can not do '.$command[1].'!</div>';
        }
    } else {
        echo '<div class="error">This dog is unavailable!</div>';
    }
} else {
    echo "<div class='error'>Sorry, I don't understand you!</div>";
}