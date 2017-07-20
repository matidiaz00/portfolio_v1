<?php include 'includes/head.php'; ?>
        <div id="main_wrapper">
            <?php include 'includes/aside_left.php'; ?>
            <article>
                <section id="nav_filters">
                    <p>Aquí estan todos los proyectos donde participé, haz click en uno para más información.</p><!--
                    --><nav><!--
                        --><a class="filter" data-filter="all">Todos</a><!--
                        --><a class="filter" data-filter=".category-design">Design</a><!--
                        --><a class="filter" data-filter=".category-frontend">Front-end</a><!--
                        --><a class="filter" data-filter=".category-backend">Back-end</a><!--
                    --></nav>
                </section>
                <section id="box_filters">
                    <nav id="filters"><!--
                        --><a data-myorder="4" class="mix category-design category-frontend category-backend" href="templo.php">
                            <img id="templo-logo" src="img/templo-logo.png">
                        </a><!--
                        --><a data-myorder="2" class="mix category-design category-frontend category-backend" href="kadampa.php">
                            <img id="kadampa-logo" src="img/kadampa-logo.png">
                        </a><!--
                        --><a data-myorder="3" class="mix category-design category-backend" href="kadampa_mailchimp.php">
                            <img id="kadampa_mailchimp-logo" src="img/kadampa_mailchimp-logo.png">
                        </a><!--
                        --><a data-myorder="1" class="mix category-frontend" href="w3americas.php">
                            <img id="w3americas-logo" src="img/w3americas-logo.png">
                        </a>
                    </nav>
                </section>
            </article>
        </div>

<?php include 'includes/footer_main.php'; ?>
<?php include 'includes/footer.php'; ?>