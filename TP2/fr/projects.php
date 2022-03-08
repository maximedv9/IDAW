<?php
require_once('template_header.php');
?>

<body>
  <?php
  require_once('template_menu.php');
  renderMenuToHTML('projects');
  ?>
  <section class="showcase">
    <div class="container grid">
      <div class="card">
        <h2>Projet 1</h2>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam
          ducimus est recusandae nemo amet rerum nesciunt sit, illum
          consectetur quidem laborum corrupti mollitia beatae, sapiente vero!
          Voluptates dicta rerum aut!
        </p>
      </div>
      <div class="card">
        <h2>Projet 2</h2>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam
          ducimus est recusandae nemo amet rerum nesciunt sit, illum
          consectetur quidem laborum corrupti mollitia beatae, sapiente vero!
          Voluptates dicta rerum aut!
        </p>
      </div>
      <div class="card">
        <h2>Projet 3</h2>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam
          ducimus est recusandae nemo amet rerum nesciunt sit, illum
          consectetur quidem laborum corrupti mollitia beatae, sapiente vero!
          Voluptates dicta rerum aut!
        </p>
      </div>
    </div>
  </section>
  <?php
  require_once('template_footer.php');
  ?>
</body>