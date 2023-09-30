<?php 
    //controllo sul form
    $isNumberSubmitted = isset($_GET["number"]);

    //numero caratteri password
    $passwordLength = (int) $_GET["number"];

    if ($isNumberSubmitted) {
        //contenitore caratteri password
        $passwordChar = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!£$%&/?*#'; 
        
        $generatedPassword = "";
        

        //Password randomica
            $randomPassword=[];
            for ($i=0; $i < $passwordLength; $i++) { 
                $min = 0;
                $max = strlen($passwordChar) - 1;
                $randomCharIndex = rand($min, $max);
                $randomChar = $passwordChar[$randomCharIndex];
                $generatedPassword .= $randomChar;
            };
        var_dump($generatedPassword);
            exit;
    }





    var_dump($passwordLength);
    
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
        <input type="number" name="number" id="number" placeholder="inserisci il numero">
        <button type="submit">Genera Password</button>
    </form>
    <span>password:</span>
    </div>
</body>
</html>