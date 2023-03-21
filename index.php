<?php
include __DIR__ .'/functions.php';

if(isset($_GET['password'])){
    $lunghezza = $_GET['password'];
    $nuova_password = genera_password($lunghezza);
    session_start();
    $_SESSION['password'] = $nuova_password;

    if (isset($_SESSION['password'])){
        header('Location: ./password.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<form action="" method='GET'>
    <div class="container py-5">
        <div class='text-center'>
            <h2>Strong Password Generator</h2>
            <h3>Genera un password sicura</h3>
        </div>
        <div class="d-flex py-5 gap-5">
            <p>Lunghezza password: </p>
            <input type="text" name='password'>
            <input type="submit">
        </div>  
    </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>