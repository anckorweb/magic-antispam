<?php
/* (3) Form validation with PHP and MagicInput (second part) */
if(strip_tags($_POST['magicInput']) == "" AND $_SERVER['REQUEST_METHOD'] == "POST")
{
    /* Ok! It's not spam */
}
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>Magic Antispam (Ancor Santos)</title>

    <link rel="stylesheet" href="css/style.css">

    <style>
    /* (2) Hide the input */
    .magicInput{display:none;}
    </style>

</head>

<body>

    <main>

        <header>

            <img src="image/padlock.png" id="logo"/>
            <h1 class="left">Magic Antispam</h1>
            <p class="credits left">Created by Ancor Santos</p>

        </header>

        <div class="right">

            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="LBWHBGDKK7D2L">
            <input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
            <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
            </form>

        </div>

        <div class="clear"></div>

        <p>Magic Antispam is a Javascript library that allows you to block massive sql (SPAM) injection attacks in your web forms.
        By using the normal captcha in your form, you are breaking the design line and causing the user to fill an unnecessary field.

            <ul>

                <li>Block spam without using Captchas.</li>
                <li>It does not need external libraries like jQuery, Mootools...</li>
                <li>Easy implementation, just a few lines of code.</li>

            </ul>

        </p>

        <div id="instruction">

            <h2>Instructions for use</h2>

            <ol>

                <li>Insert the library in the footer of your page: <strong style="color:#3161cd;"> <?php echo htmlentities('<script src="js/magic-antispam.js" charset="utf-8" type="text/javascript"></script>'); ?></strong></li>
                <li>Copy the <strong>.magicInput</strong> class in your css.</li>
                <li>Validate with PHP the submission of the form. If the "magicInput" field is empty, then everything is fine: <strong>if(strip_tags($_POST['magicInput']) == "")</strong></li>
                <li>That is all!</li>

            </ol>

        </div>

        <h2>In action</h2>

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
