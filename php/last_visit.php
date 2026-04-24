<?php
// check if cookie exists
if(isset($_COOKIE["last_visit"])) {
    $last = $_COOKIE["last_visit"];
} else {
    $last = "This is your first visit.";
}

$current = date("Y-m-d H:i:s");
setcookie("last_visit", $current, time() + (86400 * 30));
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Last Visit Example</title>
    </head>
    <body>
    <h2>Simple Cookie Example</h2>

    <p>
        Last visited on:
    <?php echo $last; ?>
    </p>

    <p>
    Current visit:
    <?php echo $current; ?>
    </p>

    </body>
</html>