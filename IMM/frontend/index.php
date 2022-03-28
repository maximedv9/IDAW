<?php
session_start();

require_once("template_header.php");
renderHeaderToHTML();
?>

<body>
    <?php
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    }
    require_once('template_menu.php');
    renderMenuToHTML();
    $pageToInclude = $currentPageId . ".php";
    if (is_readable($pageToInclude)) {
        require_once($pageToInclude);
    } else {
        require_once("error.php");
    }
    ?>
    </section>
    <?php
    require_once("template_footer.php");
    ?>
</body>