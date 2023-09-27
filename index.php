<?php 
    //numero caratteri password
    $passwordLength = $_GET["number"];

    //contenitore caratteri password
    $passwordChar = ["abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!£$%&/?*,;.:-"];


    var_dump((int)$passwordLength);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>PHP Strong Password Generator</title>
</head>
<body>
    <div class="container">
    <form method="GET" class="mt-5">
        <p>Quanti caratteri deve contenere la password?</p>
        <input type="text" name="number" placeholder="inserisci il numero">
        <button type="submit">Genera Password</button>
    </form>
    </div>
</body>
</html>