<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SOS Ballet</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- icon -->
    <link rel="icon" type="image/png" href="/assets/images/icone/icone.jpg"/>

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
                                <a class="link-3" href="#">Sobre</a>


                                 <img class="profile" src="/assets/img/svg_icon/profille.png" alt="">
                                 <?php
                                    if($logged):
                                        echo ($user->user_type == 1) ? "<a class=\"link-3\" href=\"/plataforma\">Plataforma</a>":"";
                                 ?>

                                    <a class="profile-btn" href="/perfil"><?php echo $user->name;?></a>
                                <?php
                                    else:
                                ?>
                                <a class="profile-btn" href="/auth/entrar">Login</a>
                                <?php endif;?>
                              </nav>
                           
                        </div>
                    </div>
                    
    </header>
    <!-- header-end -->

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Estudos</h3>
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
                <div class="col-xl-12"><div class="section_title text-center mb-65">
                    <span>Estudos</span>
                    <h3>Materiais para estudo
                        <br> & simulados
                    </h3>
                </div>
                <div class="project_area">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <div class="projects_thumb">
                                    <img src="img/estudos/gif.webp" alt="" >
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="projects_info">
                                    <h3>Parte teórica do Ballet</h3>
                                    <p>Para todos o Ballet não possuí sua parte de teoria, mas é ai que as pessoas se enganam, 
                                        pois assim como qualquer outra dança, aprendemos sobre a cultura e antigos bailarinos, 
                                        com isso tem bailarinas e bailarinos que se inspiram em antigos profissionais ou até mesmo atuais. Obviamente 
                                        que a pratica é a parte mais gostosa do Ballet mas também é bom conhecer a história da sua paixão. <br>
                                       
                                        Podemos ver alguns bailarinos que marcaram o Ballet: 
                                    </p>
                                    <a href="https://www.paixaopeladanca.com.br/conheca-4-grandes-nomes-do-mundo-do-ballet/" class="boxed-btn3">Ver...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="section_title text-center mb-65">
                    <h3>Materiais para Estudo </h3>
                
               <br> <div class="row">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="/assets/images/estudos/livro-ballet.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Material 1</h5>
                      <p class="card-text">Detalhes do material.</p>
                      <button type="button" class="boxed-btn3"data-toggle="modal" data-target="#exampleModalCenter">Ver Mais...</button>
                    </div>
                  </div>
                  <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="/assets/images/estudos/livro-ballet.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Material 2</h5>
                      <p class="card-text">Detalhes do material.</p>
                      <button type="button" class="boxed-btn3"data-toggle="modal" data-target="#exampleModalCenter">Ver Mais...</button>
                    </div>
                  </div>
                  <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="/assets/images/estudos/livro-ballet.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Material 3</h5>
                      <p class="card-text">Detalhes do material.</p>
                      <button type="button" class="boxed-btn3"data-toggle="modal" data-target="#exampleModalCenter">Ver Mais...</button>
                    </div>
                  </div>
                  <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="/assets/images/estudos/livro-ballet.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Material 4</h5>
                      <p class="card-text">Detalhes do material.</p>
                      <button type="button" class="boxed-btn3"data-toggle="modal" data-target="#exampleModalCenter">Ver Mais...</button>
                    </div>
                  </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    </div>
    <!--/ service_area  -->

    
    
        <!-- /testimonial_area  -->
    
    <div class="discuss_projects">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="project_text text-center">
                        <h3>Simulados</h3>
                        <p>Após ter tido sua aula e ficado horas e horas estudando os materiais acima, porque não praticar? <br>
                        Faça já o simulado e veja o resultado do seu esforço!!!</p>
                        <br> <button type="button" class="boxed-btn3" data-toggle="modal" data-target=".bd-example-modal-lg">Fazer Simulado</button>
                    </div>
                </div>
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
                            <script>document.write(new Date().getFullYear());</script> | Trabalho final <i
                                class="fa fa-heart-o" aria-hidden="true"></i> by <a
                                href="https://lujuravita.wordpress.com" target="_blank">LUJURA VITA</a>
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

    <script src="/assets/js/main.js"></script>

     <!-- Modal -->
     <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="list-group">
                <a class="list-group-item list-group-item-action">
                 Simulados
                </a>
                <a href="#" class="list-group-item list-group-item-action">Simulado 1</a>
                <a href="#" class="list-group-item list-group-item-action">Simulado 2</a>
                <a href="#" class="list-group-item list-group-item-action">Simulado 3</a>
                <a href="#" class="list-group-item list-group-item-action">Simulado 4</a>
              </div>
              <button type="button" class="boxed-btn3" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>


      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title" id="exampleModalLongTitle">ATENÇÃO!!!</h2>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Você é <b>Aluno</b> ou <b>Professor</b>? 
              <br> Caso seja aluno, é só clicar em Baixar e o arquivo será baixado! Caso não apenas feche a box. 
              <br> Caso seja Professor, basta clicar em Professor. 
            </div>
            <div class="modal-footer">
                <a href="#" class="boxed-btn3">Baixar</a>
                <a href="#" class="boxed-btn3">Professor</a>
            </div>
          </div>
        </div>
      </div>

</html>