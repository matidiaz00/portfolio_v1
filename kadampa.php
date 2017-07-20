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
        background-color: #61aedd;
    }
    .nav_pages a:hover,
    #footerbtn:hover {
        color: #61aedd;
    }
</style>
        <div id="main_wrapper">
            <?php include 'includes/aside_left.php'; ?>
            <article>
                <nav class="nav_pages">
                    <a href="templo.php" class="btn_left"><span><</span>Anterior proyecto</a>
                    <a href="index.php" class="btn_center">Volver al portafolio</a>
                    <a href="kadampa_mailchimp.php" class="btn_right">Próximo proyecto<span>></span></a>
                </nav><!--

                --><aside id="aside_right">
                    <div id="wrapper_asideright">
                        <section id="url_date">
                            <a target="_blank" href="http://www.matidiaz.com.ar/kadampa/">www.matidiaz.com.ar/kadampa</a>
                            <p>Diciembre de 2011 – Actualidad</p>
                        </section>
                        <section id="info">
                            <p>Tradición Budista en la que trabajo como voluntario desde diciembre del 2011. El proyecto se creo para que puedan usar esta web para cualquier centro Kadampa que abran en el mundo, actualmente todos los centros en América Latina y en Portugal lo están usando.</p>
                        </section>
                        <section id="btn_behance">
                            <a target="_blank" href="http://on.be.net/1xlsDMg">Behance</a>
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
                            <img src="img/design/kadampa/design_kadampa1.jpg">
                            <img src="img/design/kadampa/design_kadampa2.jpg">
                            <img src="img/design/kadampa/design_kadampa3.jpg">
                            <img src="img/design/kadampa/design_kadampa4.jpg">
                            <img src="img/design/kadampa/design_kadampa5.jpg">
                            <img src="img/design/kadampa/design_kadampa6.jpg">
                            <img src="img/design/kadampa/design_kadampa7.jpg">
                            <img src="img/design/kadampa/design_kadampa8.jpg">
                            <img src="img/design/kadampa/design_kadampa9.jpg">
                        </div>
                        <div class="project_box" id="frontend_box">
                            <?php include 'includes/front-end/HTML5_y_CSS3.php'; ?>
                            <?php include 'includes/front-end/Responsive_design_kadampa.php'; ?>
                            <?php include 'includes/front-end/Cross-browser.php'; ?>
                            <?php include 'includes/front-end/Google_Font.php'; ?>
                            <?php include 'includes/front-end/Transiciones_con_CSS3_kadampa.php'; ?>
                            <?php include 'includes/front-end/SEO.php'; ?>
                        </div>
                        <div class="project_box" id="backendbox">
                            <?php include 'includes/back-end/Wordpress.php'; ?>
                            <?php include 'includes/back-end/Wordpress_Codex_1_kadampa.php'; ?>
                            <?php include 'includes/back-end/TinyMce.php'; ?>
                            <?php include 'includes/back-end/Wordpress_Codex_2_kadampa.php'; ?>
                            <?php include 'includes/back-end/Wordpress_Codex_3_kadampa.php'; ?>
                        </div>
                    </div>
                </section><!--

                --><nav class="nav_pages">
                    <a href="templo.php" class="btn_left"><span><</span>Anterior proyecto</a>
                    <a href="index.php" class="btn_center">Volver al portafolio</a>
                    <a href="kadampa_mailchimp.php" class="btn_right">Próximo proyecto<span>></span></a>
                </nav>
            </article>
        </div>
<?php include 'includes/footer_main.php'; ?>
<?php include 'includes/footer.php'; ?>