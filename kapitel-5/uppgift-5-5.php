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
        <h2>Lösenord</h2><br>
        <label for="">Lösenord</label>
        <input type="text" name="password" required>
        <button class="primary">Skicka</button>
    </form>

    <?php 
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
        $poäng = 0;
        $flagga = 

        if ($password) {
            if (strlen($password) >= 8) {
                $poäng += 1;             
            }
            $siffror = ["1","2","3","4","5","6","7","8","9","0"];
            foreach ($siffror as $tecken) {
                $pos = strpos($password, $tecken );
            if (!$pos) {
                $poäng += 1;
            }
            }

            /*if (strstr($password)) {
                # code...
            }
            if (strstr($password, )) {
                # code...
            }*/

            $konstig = ["/","*","-","+","(",")","€","£","@"];
            foreach ($konstig as $konstigatacken) {
                if (strstr($password, $konstigatacken )) {
                $poäng += 1;
                
            }
            }

        }
        echo "<p>Du fick $poäng</p>"

            
        ?>
</body>
</html>