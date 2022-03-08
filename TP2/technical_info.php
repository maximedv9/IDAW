<?php
require_once('template_header.php');
?>

<body>
    <?php
    require_once('template_menu.php');
    renderMenuToHTML('technical_info');
    ?>
    <section class="showcase">
        <div class="container grid">
            <div class="card">
                <h1>Infos Technique</h1>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam
                    ducimus est recusandae nemo amet rerum nesciunt sit, illum
                    consectetur quidem laborum corrupti mollitia beatae, sapiente vero!
                    Voluptates dicta rerum aut!
                </p>
                <a href="features.php">Read More</a>
            </div>
        </div>
    </section>
    <?php
    require_once('template_footer.php');
    ?>
</body>