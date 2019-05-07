<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Mad Libs</title>
    <meta name="author" content="SitePoint">
    <meta name=”viewport” content=”width=device-width, initial-scale=1.0″ />
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <link rel="stylesheet" href="paniekstyle.css">
</head>
<body>
    <h1>Mad Libs</h1>
    <div class="container">
        <div class="nav">
            <a href="#">Er heerst paniek...</a>
            <a href="formulier_onkunde.php">Onkunde</a>
            <p class="info">Er heerst paniek is anders (slechter) gemaakt dan Onkunde</p>
        </div>

        <form action="resultaat_paniek.php" method="GET">
            <h2>Er heerst paniek...</h2>
            <p>Welk dier zou je nooit als huisdier willen hebben? <input class="input" required name="vraag1"></p>
            <p>Wie is de belangrijkste persoon in je leven? <input class="input" required name="vraag2"></p>
            <p>In welk land zou je graag willen wonen? <input class="input" required name="vraag3"></p>
            <p>Wat doe je als je je verveelt? <input class="input" required name="vraag4"></p>
            <p>Met welk speelgoed speelde je vroeger het meest? <input class="input" required name="vraag5"></p>
            <p>Bij welke docent spijbel je het liefst? <input class="input" required name="vraag6"></p>
            <p>Als je €100.000,- had, Wat zou je dan kopen? <input class="input" required name="vraag7"></p>
            <p>Wat is je favoriete bezigheid? <input class="input" required name="vraag8"></p>
            <input class="input" type="submit">
        </form>
        <div class="footer">
            <p>© Ricardo Veen 2019</p>
        </div>
    </div>
</body>
</html>