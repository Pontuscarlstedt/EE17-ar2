<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uppgift-5-3</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <form action=" <?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <h2>Formulär</h2><br>
            <label for="">E-post</label>
            <input type="email" name="epost" required>


            <button class="primary">Skicka</button>
        </form>

        <?php 
        $epost = filter_input(INPUT_POST, "epost", FILTER_SANITIZE_STRING);


        $ny = str_replace("@",  " <br> Domänen är ", $epost);
        echo "<p>Namnet är $ny</p>";

            
        ?>
</body>
</html>