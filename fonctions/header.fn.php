<?php

// La fonction activelink vérifie si l'URL passée en paramètre est présente dans la chaîne $page.
// Si c'est le cas, elle retourne une chaîne contenant les classes CSS 'active' et 'text-uppercase'.
// Sinon, elle ne retourne rien.

function activelink($page, $url) {
    // Utilisation de la fonction strpos pour rechercher la première occurrence de $url dans $page.
    // Si $url est trouvé dans $page, la fonction strpos retournera la position de la première occurrence de $url.
    // Si $url n'est pas trouvé, strpos retournera FALSE.
    if (strpos($page, $url) !== FALSE) {
        // Si strpos retourne autre chose que FALSE, cela signifie que $url a été trouvé dans $page.
        // Dans ce cas, on retourne la chaîne 'active text-uppercase'.
        return 'active text-uppercase';
    }
    // Si $url n'est pas trouvé dans $page, on ne fait rien et la fonction ne retourne rien.
}

?>
