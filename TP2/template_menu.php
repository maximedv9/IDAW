<?php
function renderMenuToHTML($currentPageId)
{
    // un tableau qui définit la structure du site
    $mymenu = array(
        // idPage titre
        'index' => 'Home',
        'cv' => 'CV',
        'projects' => 'Projects',
        'technical_info' => 'Technical Informations'
    );

    echo '<div class="navbar">
<div class="container flex">
  <h1 class="logo">Portfolio</h1>
  <h2 class="logo">Maxime de Veyrac</h2>
  <nav>
    <ul>';

    foreach ($mymenu as $pageId => $pageParameters) {
        if ($pageId != $currentPageId) {
            echo '<li><a href=', $pageId, '.php>', $pageParameters, '</a></li>';
        } else {
            echo '<li><a id="currentpage" href=', $pageId, '.php>', $pageParameters, '</a></li>';
        }
    }

    echo '</ul>
</nav>
</div>
</div>';
}
