<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SOS Ballet</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- icon -->
    <link rel="icon" type="image/png" href="/assets/images/icone/icone.jpg" />

    <!-- CSS here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/Meucss.css">
</head>

<body>

    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="index.html"></a>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <nav id="nav-3" style="width: 100%;">
                                <a class="link-3" href="/">Home</a>
                                <a class="link-3" href="/estudos">Estudos</a>
                                <a class="link-3" href="/calendario">Agenda</a>
                                <a class="link-3" href="/estudos/quiz">Quiz</a>
                                <a class="link-3" href="#">Sobre</a>


                                <img class="profile" src="/assets/img/svg_icon/profille.png" alt="">
                                <?php
                                if ($logged) :
                                    echo ($user->user_type == 1) ? "<a class=\"link-3\" href=\"/plataforma\">Plataforma</a>" : "";
                                ?>

                                    <a class="profile-btn" href="/perfil"><?php echo $user->name; ?></a>
                                <?php
                                else :
                                ?>
                                    <a class="profile-btn" href="/auth/entrar">Login</a>
                                <?php endif; ?>
                            </nav>

                        </div>
                    </div>

    </header>
    <!-- header-end -->

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Quiz</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->
    <!-- service_area  -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-65">
                        <span>Sapatilhas</span>
                        <h3>Módulos</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="img/quiz/Sola-inteira.jpg" alt="">
                        </div>
                        <h3>Sapatilha de meia ponta de sola inteira</h3>
                        <h5>INICIANTES</h5>
                        <p>Tecido bem fino, sola de couro inteira,
                            o solado vai do calcanhar até a ponta do pé.
                            Não possui diferença entre pé direito e esquerdo,
                            basta começar usar e manter sempre a mesma sapatilha em um mesmo pé,
                            assim o formato irá se moldar.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="img/quiz/ponta.jpg" alt="">
                        </div>
                        <h3>Sapatilha de ponta</h3>
                        <h5>DOMÍNIO</h5>
                        <p>O professor determinará quando o aluno está pronto para migrar para sapatilha de ponta,
                            uma vez que ela demanda maior esforço e experiência. A estrutura mais comum é aquela com o bico mais durinho, o box,
                            no qual o bailarino coloca os dedos para distribuir o seu peso uniformemente, e ter maior equilíbrio.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="img/quiz/sola-dividida.png" alt="">
                        </div>
                        <h3>Sapatilha de meia ponta de sola dividida</h3>
                        <h5>INTERMEDIARIO</h5>
                        <p>Permite maior movimentação do pé. Nesse modelo o solado tem a parte da frente que serve de base para
                            os dedos e a parte trás que faz a base do calcanhar, elas não são ligadas,
                            o que facilita na hora de esticar o pé.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section_title text-center mb-65">
        <h6>PUXE PARA O LADO</h6>
        <h3>Explicações para o Quiz</h3>
    </div>
    <!-- testimonial_area  -->
    <div class="testimonial_area2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="/assets/images/quiz/tipo-pe.jpg" alt="">
                                </div>
                                <p><br> Observe o formato da ponta dos pés, assim como a largura entre <br>
                                    os pontos <b>A</b> e <b>B</b>. Os formatos <b>Grego</b> e <b>Egípcio</b> podem ser ambos estreitos ou largos. </p>
                            </div>
                        </div>

                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="/assets/images/quiz/pes-raso-cavo.jpg" alt="">
                                </div>
                                <p> <br><b>1</b> - Pé raso | <b>2</b> - Pé normal | <b>3</b> - Pé cavo</p>
                            </div>
                        </div>

                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="/assets/images/quiz/palmilha.jpg" alt="">
                                </div>
                                <p><br><b>1</b>- Palmilha Normal ou Reforçada | <b>2</b>- Palmilha muito reforçada | <b>3</b>- Palmilha normal | <b>4</b>- Palmilha mole </p> <br>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section_title text-center mb-65">
        <br> <button type="button" class="boxed-btn3" data-toggle="modal" data-target=".bd-example-modal-lg">Fazer Quiz</button>
    </div>

    <!-- quiz -->



    <!-- /testimonial_area  -->
    <div class="discuss_projects">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="project_text text-center">
                        <h3>Como escolher suas sapatilhas de Ballet</h3>
                        <p>
                            Os fabricantes de sapatilhas entendem bem as diferenças que podem existir nos pés das bailarinas e o que é preciso para acomodá-los corretamente.
                            Tecidos e materiais de fabricação podem ser uma escolha de quem for praticar o ballet, mas o que importa
                            realmente é se sentir confortável durante os exercícios. É preciso que a bailarina sinta o chão normalmente,
                            que seu pé fique acomodado na caixa, que tenha equilíbrio na plataforma, que consiga permanecer nas pontas e,
                            principalmente, que não sinta dores.

                            É bom lembrar que existem questões pessoais, como a utilização de protetores,
                            separadores de dedos ou enchimentos. Porém, só inclua esses itens se realmente acreditar
                            que vão fazer diferença no seu desempenho, além de manter seus pés firmes e sem risco de lesões.

                            A escolha das sapatilhas corretas evita os riscos de bolhas e calos. Além disso, ao conseguir
                            o encaixe perfeito com os seus pés, aumenta sua sensibilidade e você consegue praticar o ballet com eficiência.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- curiosidades -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="containerQuiz" id="containerQuiz">
                    <div class="title-quiz">Quiz Sapatilha</div>
                    <div id="question" class="question">Pergunta</div>
                    <label class="option"><input type="radio" name="option" value="1" /> Opcao 1<span id="opt1"></span></label>
                    <label class="option"><input type="radio" name="option" value="2" />Opcao 2<span id="opt2"></span></label>
                    <label class="option"><input type="radio" name="option" value="3" />Opcao 3<span id="opt3"></span></label>
                    <label class="option"><input type="radio" name="option" value="4" />Opcao 4<span id="opt4"></span></label>
                    <button id="nextButton" class="next-btn" onclick="loadNextQuestion();">Proximo</button>
                    <button type="button" class="next-btn" data-dismiss="modal">Fechar</button>
                </div>
                <div id="result" class="container result" style="display: none;"> </div>
            </div>
        </div>
    </div>
    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-md-6">
                    </div>
                    <div class="col-xl-6 col-md-6">

                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> | Trabalho final <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://lujuravita.wordpress.com" target="_blank">LUJURA VITA</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!--/ footer end  -->

    <!-- JS here -->
    <script src="/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <script src="/assets/js/ajax-form.js"></script>
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/scrollIt.js"></script>
    <script src="/assets/js/jquery.scrollUp.min.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/nice-select.min.js"></script>
    <script src="/assets/js/jquery.slicknav.min.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/plugins.js"></script>
    <script src="/assets/js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="/assets/js/contact.js"></script>
    <script src="/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="/assets/js/jquery.form.js"></script>
    <script src="/assets/js/jquery.validate.min.js"></script>
    <script src="/assets/js/mail-script.js"></script>

    <!-- quiz -->
    <script src="/assets/js/question.js"></script>
    <script src="/assets/js/quiz-script.js"></script>


    <script src="/assets/js/main.js"></script>

    <!-- Modal -->


</body>

</html>