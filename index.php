<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

        <input type="text" name="input"><br><br>
        <button type="submit" name="submit">Submit</button>

        <h3>git data type</h3>

    </form>
</body>
</html>
    
<?php

    if(isset($_POST['input']))
    {
      $data = $_POST['input'];
    }

    echo $data;
?>