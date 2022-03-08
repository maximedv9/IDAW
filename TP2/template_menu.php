<?php
function renderMenuToHTML($currentPageId)
{
    // un tableau qui définit la structure du site
    $mymenu = array(
        // idPage titre
        'home' => 'Home',
        'cv' => 'CV',
        'projects' => 'Projects',
        'technical_info' => 'Technical Informations',
        'contact' => 'Contact'
    );

    echo '<div class="navbar">
<div class="container flex">
  <h1 class="logo">Portfolio</h1>
  <h2 class="logo">Maxime de Veyrac</h2>
  <nav>
    <ul>';

    foreach ($mymenu as $pageId => $pageParameters) {
        if ($pageId != $currentPageId) {
            echo '<li><a href="index.php?page=', $pageId, '">', $pageParameters, '</a></li>';
        } else {
            echo '<li><a id="currentpage" href="index.php?page=', $pageId, '">', $pageParameters, '</a></li>';
        }
    }

    echo '</ul>
</nav>
</div>
</div>';
}
