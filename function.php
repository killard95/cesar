<?php

function cesar() {
        $cryptage = (int)$_GET["num"];
        if($cryptage >= 26) {
            $cryptage = $cryptage % 26;
        }
        $phrase = trim($_GET["text"]);
        $phrase = str_replace(["é", "è", "ë", "ê"], "e", $phrase);
        $phrase = str_replace("à", "a", $phrase);
        $phrase = str_replace("ù", "u", $phrase);
        $text = (string) strtoupper($phrase);
        

        for ($i=0; $i<strlen($text); $i++) {
            $asciiText = ord($text[$i]);
            if ($asciiText >= 65 && $asciiText <= 90) {
                if ($asciiText + $cryptage > 90) {
                    $asciiText = $asciiText - 26;
                }
                $newText[] = chr($asciiText+$cryptage);
            } else {
                $newText[] = chr($asciiText);
            }
        }

        if (is_array($newText)) {
            echo "<p>Le texte <span id=texte1>" . $_GET["text"] . ((int)$_GET["num"] > 25 ?  "</span>
            avec un décalage de <span id=texte1>". (int)$_GET["num"] . " </span>qui équivaut à <span id=texte1>" . $cryptage : "</span>
            avec un décalage de <span id=texte1>" . (int)$_GET["num"]) . "</span><br><br>
            </span> devient <span id=texte2>" . implode($newText) . "</span> </p>";
        } else {
            echo "<p>Entrez un texte.</p>";
        }
        
}