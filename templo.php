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
        background-color: #a7875e;
    }
    .nav_pages a:hover,
    #footerbtn:hover {
        color: #a7875e;
    }
</style>
        <div id="main_wrapper">
            <?php include 'includes/aside_left.php'; ?>
            <article>
                <nav class="nav_pages">
                    <a href="index.php" class="btn_center">Volver al portafolio</a>
                    <a href="kadampa.php" class="btn_right">Próximo proyecto<span>></span></a>
                </nav><!--

                --><aside id="aside_right">
                    <div id="wrapper_asideright">
                        <section id="url_date">
                            <a target="_blank" href="http://www.templodesintra.pt/">www.templodesintra.pt</a>
                            <p>Diciembre de 2014 – Enero de 2015</p>
                        </section>
                        <section id="info">
                            <p>Tradición Budista en la que trabajo como voluntario desde diciembre del 2011. El proyecto se creo para que este Templo Budista se incluya en el circuito turístico de Sintra a demás de atraer turistas a conocer el Templo.</p>
                        </section>
                        <section id="btn_behance">
                            <a target="_blank" href="http://on.be.net/1BiEl5j">Behance</a>
                        </section>
                    </div>
                </aside><!--

                --><section id="project-wrapper">
                    <nav id="navproject_main">
                        <a class="active">Design</a><!--
                        --><a>Front-end</a><!--
                        --><a>Back-end</a>
                    </nav>
                    <div id="project">
                        <div class="project_box active">
                            <img src="img/design/templo/design_templo_1.jpg">
                            <img src="img/design/templo/design_templo_2.jpg">
                            <img src="img/design/templo/design_templo_3.jpg">
                            <img src="img/design/templo/design_templo_4.jpg">
                            <img src="img/design/templo/design_templo_5.jpg">
                            <img src="img/design/templo/design_templo_6.jpg">
                            <img src="img/design/templo/design_templo_7.jpg">
                            <img src="img/design/templo/design_templo_8.jpg">
                            <img src="img/design/templo/design_templo_9.jpg">
                        </div>
                        <div class="project_box" id="frontend_box">
                            <?php include 'includes/front-end/HTML5_y_CSS3.php'; ?>
                            <?php include 'includes/front-end/Responsive_design_templo.php'; ?>
                            <?php include 'includes/front-end/Cross-browser.php'; ?>
                            <?php include 'includes/front-end/Google_Font.php'; ?>
                            <?php include 'includes/front-end/Transiciones_con_CSS3_templo.php'; ?>
                            <?php include 'includes/front-end/Jquery_templo.php'; ?>
                            <?php include 'includes/front-end/SEO.php'; ?>
                        </div>
                        <div class="project_box" id="backendbox">
                            <?php include 'includes/back-end/Wordpress.php'; ?>
                            <?php include 'includes/back-end/Wordpress_Codex_1_templo.php'; ?>
                        </div>
                    </div>
                </section><!--

                --><nav class="nav_pages">
                    <a href="index.php" class="btn_center">Volver al portafolio</a>
                    <a href="kadampa.php" class="btn_right">Próximo proyecto<span>></span></a>
                </nav>
            </article>
        </div>
<?php include 'includes/footer_main.php'; ?>
<?php include 'includes/footer.php'; ?>