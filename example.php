<?php
/* (2) Form validation with PHP and MagicInput (second part) */
if(strip_tags($_POST['magicInput']) == "" AND $_SERVER['REQUEST_METHOD'] == "POST")
{
    echo "Ok"; /* Ok! It's not spam */
}
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>Magic Antispam (Ancor Santos)</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <main>

        <h1>Magic Antispam</h1>
        <p>Created by Ancor Santos</p>

        <p>Magic Antispam es una librería de Javascript que te permite bloquear los ataques masivos de inyección sql (SPAM) en tus formularios web.
        Al utilizar los captcha normales en tu formulario, estás rompiendo la línea de diseño y haciendo que el usuario tenga que rellenar un campo innecesario.
        Solo pesa 1kb, no necesita</p>

        <form action="" method="post" class="magic-antispam">

            <input type="text" name="name" placeholder="Name"/>
            <input type="text" name="subname" placeholder="Surname"/>
            <textarea placeholder="Your question"></textarea>
            <input type="submit" value="Send"/>

        </form>

    </main>

    <!-- (1) Import the magic-antispam library -->
    <script src="js/magic-antispam.js" charset="utf-8" type="text/javascript"></script>

</body>
</html>
