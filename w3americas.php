<?php include 'includes/head.php'; ?>
<style type="text/css">
    #url_date,
    #info,
    .wrapper_projects,
    #navproject_main a:hover,
    #navproject_main a.active,
    .cd-top,
    #matidiaz_logo,
    footer {
        background-color: #ec5028;
    }
    .nav_pages a:hover,
    #footerbtn:hover {
        color: #ec5028;
    }
</style>
        <div id="main_wrapper">
            <?php include 'includes/aside_left.php'; ?>
            <article>
                <nav class="nav_pages">
                    <a href="kadampa_mailchimp.php" class="btn_left"><span><</span>Anterior proyecto</a>
                    <a href="index.php" class="btn_center">Volver al portafolio</a>
                </nav><!--

                --><aside id="aside_right">
                    <div id="wrapper_asideright">
                        <section id="url_date">
                            <a target="_blank" href="http://www.w3americas.com/">www.w3americas.com</a>
                            <p>Octubre de 2013 – Diciembre de 2013</p>
                        </section>
                        <section id="info">
                            <p>Agencia digital dedicada a la creación de sitios webs (a demás de otros servicios), donde desarrolle la parte frontal de la web.</p>
                        </section>
                    </div>
                </aside><!--

                --><section id="project-wrapper">
                    <nav id="navproject_main">
                        <a class="active">Front-end</a>
                    </nav>
                    <div id="project">
                        <div class="project_box active" id="frontend_box">
                            <?php include 'includes/front-end/HTML5_y_CSS3.php'; ?>
                            <?php include 'includes/front-end/Responsive_design_w3americas.php'; ?>
                            <?php include 'includes/front-end/Cross-browser.php'; ?>
                            <?php include 'includes/front-end/Google_Font.php'; ?>
                            <?php include 'includes/front-end/Transiciones_con_CSS3_w3americas.php'; ?>
                            <?php include 'includes/front-end/Jquery_w3americas.php'; ?>
                            <?php include 'includes/front-end/SEO.php'; ?>
                        </div>
                    </div>
                </section><!--

                --><nav class="nav_pages">
                    <a href="kadampa_mailchimp.php" class="btn_left"><span><</span>Anterior proyecto</a>
                    <a href="index.php" class="btn_center">Volver al portafolio</a>
                </nav>
            </article>
        </div>
<?php include 'includes/footer_main.php'; ?>
<?php include 'includes/footer.php'; ?>