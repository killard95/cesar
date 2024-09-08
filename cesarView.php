<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="cesar.css">
    <meta charset="UTF-8">
    <title>César</title>
</head>
<body>
    <h1>César</h1>
    <div>
        <p id="explain">
            En cryptographie, le chiffrement par décalage, aussi connu comme le chiffre de César ou le code de César
            (voir les différents noms), est une méthode de chiffrement très simple utilisée par Jules César dans ses
            correspondances secrètes (ce qui explique le nom « chiffre de César »).
            Le texte chiffré s'obtient en remplaçant chaque lettre du texte clair original par une lettre à distance fixe,
            toujours du même côté, dans l'ordre de l'alphabet. Pour les dernières lettres (dans le cas d'un décalage à droite),
            on reprend au début. Par exemple avec un décalage de 3 vers la droite, A est remplacé par D, B devient E,
            et ainsi jusqu'à W qui devient Z, puis X devient A etc. Il s'agit d'une permutation circulaire de l'alphabet.
        </p>
    </div>
    <div>
        <form method="get" action="#">
            <div class="input">
            <label for="num">Type de cryptage : </label>
            <input type="number" id="num" name="num" placeholder="type de cryptage" min="1">
            </div>
            <div class="input">
            <label for="text">Votre texte : </label>
            <input type="text" id="text" name="text" placeholder="Votre texte">
            <button type="submit">Crypter</button>
            </div>
        </form>
    </div>
    <div id="reponse">
        <?php
        include_once "function.php";
        if (isset($_GET["text"]) && isset($_GET["num"])){
        cesar();
        }
        ?>
    </div>


    
    
</body>

</html>
