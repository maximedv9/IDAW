<?php
require_once("template_header.php");
?>

<?php
$currentPageId = 'home';
if (isset($_GET['page'])) {
  $currentPageId = $_GET['page'];
}
if (isset($_GET['lang'])) {
  $currentPageLang = $_GET['lang'];
}

?>

<body>
  <?php
  require_once('template_menu.php');
  renderMenuToHTML('index', $currentPageLang);
  ?>
  <section class="corps">
    <?php
    $pageToInclude = $currentPageLang . "/" . $currentPageId . ".php";
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