<?php

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dierenasiel</title>
    <link rel="stylesheet" href="../style/login.css">
    <link rel="stylesheet" href="../style/site.css">
</head>

<body>
    <header>
        <div class="wrapper">
            <a href="index.html" id="logo_header">
                <img src="../media/img/Logo.png" alt="Logo Pootjesparadijs" id="logo">
            </a>
            <div id="filler"></div>
            <div id="buttons">
                <a href="./pages/login.html">
                    <div id="log" class="header_bttn">
                        <span class="span_buttons">Inloggen</span>
                    </div>
                </a>
                <div onclick="doneer()">
                    <div id="don" class="header_bttn">
                        <span class="span_buttons">Doneren</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="header_img">
        <div id="filler1"></div>
        <div id="wrapper1">
            <div class="text-container top">
                <h1>Word jij onze nieuwe baasje?</h1>
            </div>
            <div class="text-container bottom">
                <h1>Adopteer ons hier</h1>
            </div>
        </div>
    </div>
    </div>

        <a href="../db/test.php">klik op mij ofzo</a>
        <form action="../db/request.php" method="POST">
            <label for="voornaam"></label>
            <input type="text" name="voornaam" id="voornaam" required placeholder="Jan">
            <label for="tussenvoegsel"></label>
            <input type="text" name="tussenvoegsel" placeholder="van der" id="tussenvoegsel">
            <label for="achternaam"></label>
            <input type="text" name="achternaam" id="achternaam" required placeholder="Sloot">
            <label for="mailAdres"></label>
            <input type="email" name="mailAdres" id="mailAdres" required placeholder="yourmail@gmail.com">
            <label for="adres"></label>
            <input type="text" name="adres" id="adres" required placeholder="Afrikaweg 25">
            <label for="telefoonNummer"></label>
            <input type="tel" name="telefoonNummer" id="telefoonNummer" required placeholder="+03 52683893">
            <label for="legitimatieSoort"></label>
            <input type="checkbox" name="legitimatieSoort" id="legimatieSoort" required placeholder="Paspoort of ID?">
            <label for="legimatieNummer"></label>
            <input type="number" name="legimatieNummer" id="legimatieNummer" required placeholder="162748593"
                maxlength="9" minlength="9">
            <label for="wachtwoord"></label>
            <input type="password" name="wachtwoord" id="wachtwoord" required placeholder="Ik_ben_veilig123"
                autocomplete="on" minlength="4" maxlength="15">
            <input type="submit" value="Submit">
        </form>

        <body>

            </html>
            <!--Footer hier-->
            <script src="../script/doneer.js"></script>
        </body>

        </html>