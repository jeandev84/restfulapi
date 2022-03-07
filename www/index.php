<?php

require __DIR__.'/../vendor/autoload.php';


if (! empty($_GET["name"])) {
    $response = file_get_contents("https://api.agify.io?name={$_GET['name']}");
    $data = json_decode($response, true);

    $age = $data['age'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>API</title>
</head>
<body>
   <?php if (isset($age)): ?>

       Age : <?= $age ?>

   <?php endif; ?>
   <form action="">
       <label for="name">Name</label>
       <input type="text" name="name" id="name">
       <button>Guess age</button>
   </form>
</body>
</html>
