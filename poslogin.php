<?php
require 'verifica.php';
if (isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])):
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta charset="UTF-8">
        <title>Quero Doar!</title>
        <link rel="icon" href="assets\images\icone.png" type="image/png">


        <!-- ====== Google Fonts ====== -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">

        <!-- ====== ALL CSS ====== -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/lightbox.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">

    </head>

    <body data-spy="scroll" data-target=".navbar-nav">

        <!-- Preloader -->
        <div class="preloader">
            <div class="spinner">
                <div class="cube1"></div>
                <div class="cube2"></div>
            </div>
        </div>
        <!-- // Preloader -->


        <!-- ====== Header ====== -->
        <header id="header" class="header">
            <!-- ====== Navbar ====== -->
            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="container">
                    <!-- Logo -->
                    <a class="navbar-brand" href="index.php">
                        <img class="logo-img" src="assets/images/logo.png" alt="Logo">
                    </a>
                    <!-- // Logo -->

                    <!-- Mobile Menu -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-expanded="false"><span><i
                                class="fa fa-bars"></i></span></button>
                    <!-- Mobile Menu -->

                    <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="#home">INÍCIO</a></li>
                            <li class="nav-item"><a class="nav-link" href="#about">SOBRE</a></li>
                            <li class="nav-item"><a class="nav-link pr0" href="#contact">CONTATO</a></li>
                            <li class="nav-item"><a class="nav-link" href="formulario.php">DOAR AGORA</a></li>
                            <!-- Menu expansivo -->
                            <li class="nav-item user-group">
                                <input type="checkbox" id="dropdown-toggle" class="dropdown-toggle">
                                <label for="dropdown-toggle" class="dropdown-label"> Bem-vindo,
                                    <strong><?php echo $nomeUser; ?></strong> <span class="dropdown-arrow">▼</span>
                                </label>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Configurações</a></li>
                                    <li><a href="#">Minha Conta</a></li>
                                    <li><a href="#">Doações Realizadas</a></li>
                                    <li><a href="logout.php" class="logout-option">Sair</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>



                </div>
            </nav>
            <!-- ====== // Navbar ====== -->
        </header>
        <!-- ====== // Header ====== -->

        <!-- ====== Hero Area ====== -->
        <div class="hero-aria" id="home">
            <!-- Hero Area Content -->
            <div class="container">
                <div class="hero-content h-100">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <h2 class="text-uppercase">
                                <a href="formulario.php" style="text-decoration: none; color: inherit;">Doe agora mesmo!</a>
                            </h2>
                            <h3 class="text-uppercase"><span class="typed"></span></h3>
                            <p>.</p>
                            <a href="#about" class="button smooth-scroll">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Hero Area Content -->
            <!-- Hero Area Slider -->
            <div class="hero-area-slids owl-carousel">
                <div class="single-slider">
                    <!-- Single Background -->
                    <div class="slider-bg" style="background-image: url(assets/images/hero-area/img-1.jpg)"></div>
                    <!-- // Single Background -->
                </div>
                <div class="single-slider">
                    <!-- Single Background -->
                    <div class="slider-bg" style="background-image: url(assets/images/hero-area/img-2.jpg)"></div>
                    <!-- // Single Background -->
                </div>
            </div>
            <!-- // Hero Area Slider -->
        </div>
        <!-- ====== //Hero Area ====== -->

        <!-- ====== Featured Area ====== -->

        <!-- ====== //Featured Area ====== -->

        <!-- ====== About Area ====== -->
        <section id="about" class="section-padding about-area bg-light">
            <div class="container">
                <!-- Section Title -->
                <div class="row justify-content-center">
                    <div class="col-lg-6 ">
                        <div class="section-title text-center">
                            <h2>Saiba mais</h2>
                            <p></p>
                        </div>
                    </div>
                </div>
                <!-- //Section Title -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-bg" style="background-image:url(assets/images/about-bg.jpg)">
                            <!-- Social Link -->
                            <div class="social-aria">
                                <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://www.instagram.com/projetoquerodoar">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a target="_blank" href="#"><i class="fab fa-pinterest"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            <!-- // Social Link -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h2>Sobre o <span>Quero Doar!</span></h2>
                            <h4>Conectando pessoas para transformar vidas.</h4>
                            <p>No Quero Doar, acreditamos que cada ato de generosidade pode transformar vidas.
                                Nossa plataforma foi criada para conectar doadores e beneficiários de forma simples,
                                acessível e eficiente, promovendo a solidariedade de maneira prática. Com uma interface
                                intuitiva, nosso objetivo é facilitar o processo de doação e garantir que a ajuda chegue a
                                quem realmente precisa, fortalecendo laços de empatia e colaboração.

                                Mais do que uma ferramenta, o Quero Doar é um movimento em prol de um futuro mais solidário.
                                Aqui, cada contribuição importa, e juntos podemos construir um mundo onde a generosidade
                                seja o elo que une pessoas e comunidades. Venha fazer parte dessa rede de transformação e
                                ajude a espalhar esperança por onde for.</p>

                            <!-- //Skill Area -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== // About Area ====== -->


        <!-- ====== Fact Counter Section ====== -->
        <!-- ====================================================================
            NOTE: You need to change  'data-count="10"' and 'p' Eliments 
        ===================================================================== -->
        <section class="section-padding pb-70 bg-img fact-counter" id="counter" style="">

        </section>
        <!-- ====== //Fact Counter Section ====== -->

        <!-- ====== Service Section ====== -->


        <!-- ====== Why choose Me Section ====== -->

        <!-- ====== //Why choose Me Section ====== -->

        <!-- ====== Portfolio Section ====== -->

        <!-- ====== // Portfolio Section ====== -->

        <!-- ====== Frequently asked questions ====== -->

        <!-- ====== // Frequently asked questions ====== -->

        <!-- ====== Blog Section ====== -->

        <!-- ====== // Blog Section ====== -->


        <!-- ====== Testimonial Section ====== -->
        <section id="testimonial" class="section-padding bg-secondary testimonial-area">
            <div class="container bg-white">
                <!-- Section Title -->
                <div class="row justify-content-center">
                    <div class="col-lg-6 ">
                        <div class="section-title text-center">
                            <h2>Depoimentos</h2>
                            <p>Experiências compartilhadas por nossos usuários</p>
                        </div>
                    </div>
                </div>
                <!-- //Section Title -->
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="testimonials owl-carousel" data-ride="carousel">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <div class="testimonial-quote">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <p>Receber apoio através do Quero Doar foi um alívio. A plataforma me conectou com pessoas
                                    incríveis, e sou muito grata por essa oportunidade de transformar minha realidade.</p>
                                <h4>Sofia Costa <span>Recife</span></h4>

                            </div>
                            <!-- // Single Testimonial -->
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <div class="testimonial-quote">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <p>Descobri o Quero Doar em um momento difícil e, graças a ele, pude ajudar quem realmente
                                    precisava. A plataforma é prática e transparente, o que me dá confiança para continuar
                                    doando.</p>
                                <h4>Mariana Oliveira<span> São Paulo</span></h4>

                            </div>
                            <!-- // Single Testimonial -->
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <div class="testimonial-quote">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <p>Fazer parte do Quero Doar tem sido uma experiência incrível. A facilidade de doar e a
                                    certeza de que minha contribuição chega a quem precisa me fazem acreditar cada vez mais
                                    no poder da solidariedade.</p>
                                <h4>Rafael Lima <span> Rio de Janeiro</span></h4>

                            </div>
                            <!-- // Single Testimonial -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== // Testimonial Section ====== -->

        <!-- ====== Team Section ====== -->


        <!-- ====== Call to Action Area ====== -->



        <!-- ====== Pricing Area ====== -->

        <!-- ====== // Pricing Area ====== -->


        <!-- ====== Contact Area ====== -->
        <section id="contact" class="section-padding contact-section bg-light">
            <div class="container">
                <!-- Section Title -->
                <div class="row justify-content-center">
                    <div class="col-lg-6 ">
                        <div class="section-title text-center">
                            <h2>Fale com a gente</h2>
                            <p>Nossa equipe retornará o contato assim que possível </p>
                        </div>
                    </div>
                </div>
                <!-- Contact Form -->
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <!-- Form -->
                        <form class="caixadelogin" action="https://formsubmit.co/harissisgrego123@gmail.com" method="POST">
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control" name="name" required placeholder="Nome">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="email" class="form-control" name="email" required placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" required placeholder="Assunto">
                            </div>

                            <div class="form-group">
                                <textarea name="message" id="digitesuamensagem" cols="30" rows="10" class="form-control"
                                    required placeholder="Mensagem"></textarea>
                            </div>
                            <div class="form-btn text-center">
                                <button class="button" type="submit">Enviar mensagem</button>
                                <p class="form-message"></p>
                            </div>

                            <!-- Hidden fields for FormSubmit -->
                            <input type="hidden" name="_subject" value="Novo Contato!">
                            <input type="text" name="_honey" style="display:none">
                            <input type="hidden" name="_captcha" value="false">
                        </form>
                        <!-- // Form -->
                    </div>
                </div>
                <!-- // Contact Form -->
            </div>
        </section>
        <!-- ====== // Contact Area ====== -->


        <!-- ====== Footer Area ====== -->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="copyright-text">
                            <p class="text-white">Desenvolvido por<a target="_blank" href="https://github.com/Skromos">
                                    Quero Doar!</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ====== // Footer Area ====== -->






        <!-- ====== ALL JS ====== -->
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/lightbox.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.mixitup.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/typed.js"></script>
        <script src="assets/js/skill.bar.js"></script>
        <script src="assets/js/fact.counter.js"></script>
        <script src="assets/js/main.js"></script>

    </body>

    </html>

<?php else:
    header('Location: login.php');
endif ?>