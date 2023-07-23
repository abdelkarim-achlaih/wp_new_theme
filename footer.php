<footer class="pt-5">
    <div class="container">
        <div class="row text-white-50 text-md-start text-center">
            <div class="col-lg-4 col-md-6 mb-4">
                <a href=""><img src="<?php echo get_stylesheet_directory_uri() . '/imgs/logo.png' ?>" alt="logo" class="mb-3"></a>
                <p class="">Que ce soit pour concevoir votre maison de rêve ou pour réaliser un projet commercial ambitieux, <span>Stara Immo</span> est votre partenaire de confiance à chaque étape. Construisons ensemble un avenir remarquable, durable et esthétiquement exceptionnel. Découvrez la construction réinventée avec <span>Stara Immo</span> dès aujourd'hui !</p>
            </div>
            <div class="col-lg-2 col-md-6 mb-4">
                <h2 class="text-light fw-bold">Liens</h2>
                <?php footer_section_1() ?>
            </div>
            <div class="col-lg-2 col-md-6 mb-4">
                <h2 class="text-light fw-bold">Nos Artciles</h2>
                <?php footer_section_2() ?>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <h2 class="text-light fw-bold">Contactez Nous</h2>
                <p class="mb-5 mt-3">Prenez contact avec nous par mail ou par téléphone. Nous attendons votre appel ou votre message</p>
                <button type="submit" class="btn main-btn rounded-pill w-100 "><a href="mailto:staraimmo@gmail.com">staraimmo@gmail.com</a></button>
                <ul class="social d-flex list-unstyled gap-5 mt-5 justify-content-center justify-content-md-start">
                    <li>
                        <a href="https://web.facebook.com/profile.php?id=100094784390249&_rdc=1&_rdr"><i class="fa-brands fa-facebook facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-twitter twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-linkedin linkedin"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-youtube youtube"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyright text-center w-100 bg-black text-white p-4">Copyright &copy; <?php echo date('Y') . ' '; bloginfo('name'); ?>. Proudly Designed By <a href="mailto:abdelkarima46@gmail.com">Abdelkarim</a></div>
</footer>
    <?php wp_footer(); ?>
</body>

</html>