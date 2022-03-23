<?php
session_start();

require_once("template_header.php");
renderHeaderToHTML();
?>

<body>
    <?php
    require_once('template_menu.php');
    renderMenuToHTML();
    $pageToInclude = "home.php";
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