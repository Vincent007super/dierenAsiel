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

    <body>
        <form action="../db/request.php" method="POST">
            <label for="Voornaam"></label>
            <input type="text" name="Voornaam" id="Voornaam" required placeholder="Voornaam">
            <label for="Tussenvoegsel"></label>
            <input type="text" name="Tussenvoegsel" id="Tussenvoegsel" required placeholder="Tussenvoegsel">
            <label for="Achternaam"></label>
            <input type="text" name="Achternaam" id="Achternaam" placeholder="Achternaam" required>
            <label for="Adres"></label>
            <input type="text" name="Adres" id="Adres" required placeholder="Sir winston urkilaan 292">
            <label for="Telefoonnummer"></label>
            <input type="tel" name="Telefoonnummer" id="Telefoonnummer" required placeholder="061234567">
            <label for="Mail-Adres"></label>
            <input type="email" name="Mail-Adres" required placeholder="yourmail@gmail.com" id="Mail-Adres">
            <label for="Voornaam"></label>
            <input type="text" name="Voornaam" id="Voornaam" required placeholder="Voornaam">
            <label for="Voornaam"></label>
            <input type="number" name="Voornaam" id="Voornaam" required placeholder="Voornaam">
            <input type="submit" value="Submit">
        </form>

        <body>

            </html>
            <!--Footer hier-->
            <script src="../script/doneer.js"></script>
        </body>

        </html>