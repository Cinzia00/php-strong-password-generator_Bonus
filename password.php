<?php
session_start();
?>

<div class="container">
    <h2>La tua password è: </h2>
    <strong><?php echo $_SESSION['password']; ?></strong>
</div>

