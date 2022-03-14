<?php
function renderMenuToHTML($currentPageId, $currentPageLang = 'en', $currentStyle = 'style1')
{
    if ($currentPageLang == 'en') {
        $mymenu = array(
            // idPage titre
            'home' => 'Home',
            'cv' => 'CV',
            'projects' => 'Projects',
            'technical_info' => 'Technical Informations',
            'contact' => 'Contact'
        );
    }
    // un tableau qui définit la structure du site
    elseif ($currentPageLang == 'fr') {
        $mymenu = array(
            // idPage titre
            'home_fr' => 'Acceuil',
            'cv_fr' => 'CV',
            'projects_fr' => 'Projets',
            'technical_info_fr' => 'Informations Techniques',
            'contact_fr' => 'Contact'
        );
    }

    echo '<div class="navbar">
<div class="container flex">
  <h1 class="logo">Portfolio</h1>
  <h2 class="logo">Maxime de Veyrac</h2>
  <h2 class="logo">', $_SESSION['login'], '</h2>
  <nav>
    <ul>';

    foreach ($mymenu as $pageId => $pageParameters) {
        if ($pageId == $currentPageId) {
            echo '<li><a id="currentpage" href="index.php?page=', $pageId, '&lang=', $currentPageLang, '&css=', $currentStyle, '">', $pageParameters, '</a></li>';
        } else {
            echo '<li><a href="index.php?page=', $pageId, '&lang=', $currentPageLang, '&css=', $currentStyle, '">', $pageParameters, '</a></li>';
        }
    }
    echo '</ul>
</nav>
</div>
</div>';
}
