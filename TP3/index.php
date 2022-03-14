<?php
session_start();
$currentPageId = 'home';
if (isset($_GET['page'])) {
  $currentPageId = $_GET['page'];
}
if (isset($_GET['lang'])) {
  $currentPageLang = $_GET['lang'];
}


$cookieStyle = 'style1';
if (isset($_COOKIE['style'])) {
  $cookieStyle = $_COOKIE['style'];
}

$currentStyle = $cookieStyle;
if (isset($_GET['css'])) {
  $currentStyle = $_GET['css'];
}

setcookie('style', $currentStyle);

require_once("template_header.php");
renderHeaderToHTML($currentStyle);
?>

<body>
  <?php
  require_once('template_menu.php');
  renderMenuToHTML($currentPageId, $currentPageLang, $currentStyle);
  ?>
  <div class="container flex" style="padding-top: 80px;">
    <form id="style_form" action="index.php" method="GET">
      <input type="hidden" name="page" value="<?php echo $currentPageId ?>">
      <input type="hidden" name="lang" value="<?php echo $currentPageLang ?>">
      <select name="css">
        <option value="style1">style1</option>
        <option value="style2">style2</option>
      </select>
      <input type="submit" value="OK" />
    </form>
    <a href="login.php">Déconnexion</a>
  </div>
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