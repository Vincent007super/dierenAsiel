
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dierenasiel</title>
    <link rel="stylesheet" href="../style/Dierenkaart.css">
    <link rel="stylesheet" href="../style/site.css">

<body>
    <header>
        <div class="wrapper">
            <a href="../index.html" id="logo_header">
                <img src="../media/img/Logo.png" alt="Logo Pootjesparadijs" id="logo">
            </a>
            <div id="filler"></div>
            <div id="buttons">
                <a href="login.html">
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
                <h1>Kies ons hier uit!</h1>
            </div>
        </div>
    </div>
    </div>

    <main>
        <div id="menu"><!--Hier komen de filters enzovoorts---></div>
        <div class="wrapper2">
            <!--Hier alle Dierenkaarten, hieronder een voorbeeld.-->
            <div class="hyper">

            </div>
        </div>
    </main>

    <div id="footer">
        <div class="footer_links">
            <a href="../index.html">Hoofdpagina</a>
            <a href="about_us.html">Over ons</a>
            <!--- Voeg hier meer links toe naarmate het nodig is --->
        </div>
        <div class="filler3"></div>
        <div class="footer_cont" id="footer_main2">
            <div class="footer_img">
                <a href="https://www.postcodeloterij.nl" target="_blank">
                    <img src="../media/img/PostcodeLoterij.png" alt="PostcodeLoterij" width="64px" height="42px">
                </a>
                <a href="https://www.playstation.com/en-us/" target="_blank">
                    <img src="../media/img/Playstation.png" alt="Playstation" width="60px" height="42px">
                </a>
                <a href="https://www.bp.com/" target="_blank">
                    <img src="../media/img/bp.png" alt="Shell" width="60px" height="80px">
                </a>
                <a href="https://www.remarms.com/" target="_blank">
                    <img src="../media/img/REM-L.png" alt="Shell" width="150px" height="80px">
                </a>
                <a href="https://gta.fandom.com/wiki/Los_Santos_Customs" target="_blank">
                    <img src="../media/img/LosSantosCustoms.webp" alt="Shell" width="150px" height="80px">
                </a>
            </div>
        </div>
        <div class="filler3"></div>
    </div>

    </div>
    <script src="../script/doneer.js"></script>
</body>

</html>