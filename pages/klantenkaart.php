<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/site.css">
    <link rel="stylesheet" href="../style/klantenkaart.css">
    <link rel="icon" href="../media/img/Logo.png" type="image/x-icon">
</head>

<body>
    <div class="formulier">
        <h1 class="txt1">Zijn alle gegeves juist?</h1>
        <form action="klantenkaart.php" method="POST">
            <p>Voornaam</p>
            <input type="text" name="voornaam" id="voornaam" required placeholder="Jan"
                value="<?php echo isset($_POST['voornaam']) ? $_POST['voornaam'] : ''; ?>" readonly>
            <p>Tussenvoegsel</p>
            <input type="text" name="tussenvoegsel" placeholder="van der" id="tussenvoegsel"
                value="<?php echo isset($_POST['tussenvoegsel']) ? $_POST['tussenvoegsel'] : ''; ?>" readonly>
            <p>Achternaam</p>
            <input type="text" name="achternaam" id="achternaam" required placeholder="Sloot"
                value="<?php echo isset($_POST['achternaam']) ? $_POST['achternaam'] : ''; ?>" readonly>
            <p>Email-adres</p>
            <input type="email" name="mailAdres" id="mailAdres" required placeholder="janvandersloot@gmail.com"
                value="<?php echo isset($_POST['mailAdres']) ? $_POST['mailAdres'] : ''; ?>" readonly>
            <p>Adres</p>
            <input type="text" name="adres" id="adres" required placeholder="Afrikaweg 25"
                value="<?php echo isset($_POST['adres']) ? $_POST['adres'] : ''; ?>" readonly>
            <p>Telefoonnummer</p>
            <input type="tel" name="telefoonNummer" id="telefoonNummer" required placeholder="+06 52683893"
                value="<?php echo isset($_POST['telefoonNummer']) ? $_POST['telefoonNummer'] : ''; ?>" readonly>
            <p>Legitimatienummer</p>
            <input type="number" name="legimatieNummer" id="legimatieNummer" required placeholder="BSN nummer"
                maxlength="9" minlength="9"
                value="<?php echo isset($_POST['legimatieNummer']) ? $_POST['legimatieNummer'] : ''; ?>" readonly>
            <p>Wachtwoord</p>
            <input type="password" name="wachtwoord" id="wachtwoord" required placeholder="wachtwoord123"
                autocomplete="on" minlength="4" maxlength="15" readonly
                value="<?php echo str_repeat('*', strlen($_POST['wachtwoord'])); ?>">
            <input type="hidden" name="submitted" value="true">
    </div>
    </form>
    <div class="wrapper1">
        <button class="button1" onclick="redirectToPage1()">Ja</button>
        <button class="button2" onclick="redirectToPage2()">Nee</button>
    </div>


    <script>
    function redirectToPage1() {
        window.location.href = "../index.php";
    }

    function redirectToPage2() {
        window.location.href = "login.php";
    }
    </script>
</body>

</html>