<?php
function renderMenuToHTML($currentPageId)
{
    $mymenu = array(
        // idPage titre
        'home' => 'Accueil',
        'profile_page' => 'Profil',
        'statistiques_page' => 'Statistiques',
<<<<<<< HEAD
        'liste_aliments_page' => 'Aliments',


=======
        'liste_aliments_page' => 'Aliments'
>>>>>>> ced5c3fa788e00e5ef951c8e693b7c0a7fa67e61
    );


    echo '<div class="navbar"><div class="container flex"><h1 class="logo">Portfolio</h1>';

    if (isset($_SESSION['login'])) {

        echo '<h2 class="logo">', $_SESSION['login'], '</h2><nav><ul>';
    }
    foreach ($mymenu as $pageId => $pageParameters) {
        if ($pageId == $currentPageId) {
            echo '<li><a id="currentpage" href="index.php?page=', $pageId, '">', $pageParameters, '</a></li>';
        } else {
            echo '<li><a href="index.php?page=', $pageId, '">', $pageParameters, '</a></li>';
        }
    }
    echo '</ul>
</nav>
</div>
</div>';
}
