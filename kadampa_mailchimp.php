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
        background-color: #e85c41;
    }
    .nav_pages a:hover,
    #footerbtn:hover {
        color: #e85c41;
    }
</style>
        <div id="main_wrapper">
            <?php include 'includes/aside_left.php'; ?>
            <article>
                <nav class="nav_pages">
                    <a href="kadampa.php" class="btn_left"><span><</span>Anterior proyecto</a>
                    <a href="index.php" class="btn_center">Volver al portafolio</a>
                    <a href="w3americas.php" class="btn_right">Próximo proyecto<span>></span></a>
                </nav><!--

                --><aside id="aside_right">
                    <div id="wrapper_asideright">
                        <section id="url_date">
                            <a target="_blank" href="#">Recibe estos boletines</a>
                            <p>Noviembre de 2014 – Diciembre de 2014</p>
                        </section>
                        <section id="info">
                            <p>Tradición Budista en la que trabajo como voluntario desde diciembre del 2011. Prepare este sistema con Mailchimp para un Templo Budista en Sintra Portugal, arme el template del newsletter para usar en otros centros budistas en el mundo, actualmente también lo esta usando Argentina.</p>
                        </section>
                        <section id="btn_behance">
                            <a target="_blank" href="http://on.be.net/1Fm3nI8">Behance</a>
                        </section>
                    </div>
                </aside><!--

                --><section id="project-wrapper">
                    <nav id="navproject_main">
                        <a class="active">Design</a><!--
                        --><a>Back-end</a>
                    </nav>
                    <div id="project">
                        <div class="project_box active">
                            <img src="img/design/kadampa_mailchimp/design_kadampa_mailchimp_1.jpg">
                            <img src="img/design/kadampa_mailchimp/design_kadampa_mailchimp_2.jpg">
                            <img src="img/design/kadampa_mailchimp/design_kadampa_mailchimp_3.jpg">
                            <img src="img/design/kadampa_mailchimp/design_kadampa_mailchimp_4.jpg">
                            <img src="img/design/kadampa_mailchimp/design_kadampa_mailchimp_5.jpg">
                            <img src="img/design/kadampa_mailchimp/design_kadampa_mailchimp_6.jpg">
                            <img src="img/design/kadampa_mailchimp/design_kadampa_mailchimp_7.jpg">
                            <img src="img/design/kadampa_mailchimp/design_kadampa_mailchimp_8.jpg">
                        </div>
                        <div class="project_box" id="backendbox">
                            <?php include 'includes/back-end/Mailchimp-1.php'; ?>
                            <?php include 'includes/back-end/Mailchimp-2.php'; ?>
                            <?php include 'includes/back-end/Mailchimp-3.php'; ?>
                            <?php include 'includes/back-end/Mailchimp-4.php'; ?>
                        </div>
                    </div>
                </section><!--

                --><nav class="nav_pages">
                    <a href="kadampa.php" class="btn_left"><span><</span>Anterior proyecto</a>
                    <a href="index.php" class="btn_center">Volver al portafolio</a>
                    <a href="w3americas.php" class="btn_right">Próximo proyecto<span>></span></a>
                </nav>
            </article>
        </div>
<?php include 'includes/footer_main.php'; ?>
<?php include 'includes/footer.php'; ?>