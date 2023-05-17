<?php

    $letter = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?&%$<>^+-*/()[]{}@#_=';
    $shuffle = str_shuffle($letter); 
    $password = substr($shuffle, 0 , 10);

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Random Password</title>
</head>
<body>

    <div class="container">

        <h1 class="text-center my-5">Random password</h1>

        <form action="index.php" method="GET" class="text-center">


            <h3 class="text-center d-block">Password Generata</h3>

            <div class="my-5 fs-5"><strong><?php echo $password ?></strong></div>


            <button type="submit" value="Invia" class="btn btn-success px-3">Genera</button>
        </form>

    </div>

</body>
</html>