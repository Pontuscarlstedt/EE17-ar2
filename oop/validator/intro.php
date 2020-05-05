<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro till PHP</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Intro till PHP</h1>
        <?php
        class User {
            private $username;

            public function __construct($uname) {
                $this->username = $uname;

            }

            public function addEmail($mail) {
                $this->email  = $mail;

            }


        }
        $user1 = new User("Pontus");
        $user1->addEmail("Pontus.carlstedt@hotmail.com");

        $user2 = new User("Karim");
        $user2->addEmail("karim@gmail.com");
        ?>
    </div>
    
</body>
</html>