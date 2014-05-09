<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Your Page Title Here :)</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="stylesheets/grid.css">
    <link rel="stylesheet" href="stylesheets/base.css">
    <link rel="stylesheet" href="stylesheets/color.css">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
</head>
<body>

<div class="container">

    <div class="col16 col">
        <h1>Kseleton</h1>
        <h5>Version 1</h5>
    </div>

    <div class="col16 col">
        <div class="col alpha col8">
            <div class="col alpha col4">
                <h3>About Kseleton?</h3>

                <p>Kseleton is a css file</p>
            </div>
            <div class="col omega col4">
                <h3>About CSS?</h3>

                <p>Why not CSS!</p>
            </div>
        </div>
        <div class="col omega col8">
            <div class="col alpha col3in8">
                <p>Major Lazer</p>
            </div>
            <div class="col alpha col3in8">
                <p>Major Lazer</p>
            </div>
            <div class="col omega col3in8">
                <p>Major Lazer</p>
            </div>
        </div>
    </div>

    <div class="col col16">
        <div class="col alpha col4">
            <h3>Kseleton is like Skeleton?</h3>

            <p>Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren '60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten.</p>
        </div>
        <div class="col omega col12">
            <div class="col alpha col6">
                <p>Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud. Het belangrijke punt van het gebruik van Lorem Ipsum is dat het uit een min of meer normale verdeling van letters bestaat, in tegenstelling tot "Hier uw tekst, hier uw tekst" wat het tot min of meer leesbaar nederlands maakt. </p>
            </div>
            <div class="col omega col6">
                <p>Er zijn vele variaties van passages van Lorem Ipsum beschikbaar maar het merendeel heeft te lijden gehad van wijzigingen in een of andere vorm, door ingevoegde humor of willekeurig gekozen woorden die nog niet half geloofwaardig ogen. Als u een passage uit Lorum Ipsum gaat gebruiken dient u zich ervan te verzekeren dat er niets beschamends midden in de tekst verborgen zit.</p>
            </div>
        </div>
    </div>

    <?php
    for ($i = 1; $i < 16; $i++) {
        echo '<div class="col col16">';
        echo "<div class='col offset".$i."'><span>Offset " . $i . "</span></div>";
        echo '</div>';
    }
    ?>


</div>

</body>
</html>