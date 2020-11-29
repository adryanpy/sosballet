

<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SOS Ballet</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- icon -->
        <link rel="icon" type="image/png" href="/assets/images/icone/icone.jpg" />
        <!-- fullCalendar -->
        <link rel="stylesheet" href="/assets/plugins/fullcalendar/main.css">
        <!-- CSS here -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="/assets/css/Meucss.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
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
                        <a class="link-3" href="/calendario">Calendário</a>
                        <a class="link-3" href="/sobre">Sobre</a>
                        <img class="profile" src="/assets/images/svg_icon/profille.png" alt="">
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
        <div class="bradcam_area bradcam_bg_6">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text text-center">
                            <h3>calendário</h3>
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
                        <span>Calendário</span>
                        <h3> Eventos & <br> Datas importantes
                        </h3>
                    </div>
                    <div class="project_area">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-6">
                                    <div class="projects_info">
                                        <br>
                                        <h3>Dia da bailarina</h3>
                                        <p>Dia da Bailarina ou Dia do Bailarino é comemorado anualmente em 1º de
                                            setembro no Brasil.
                                            Esta data homenageia os dançarinos de Balé (ou Ballet), um estilo de dança
                                            que surgiu no século
                                            XV na Europa renascentista e que conheceria seu apogeu no século XIX.
                                            Atualmente, no entanto, o balé assumiu inúmeras variações, sendo estas
                                            baseadas
                                            em dois principais estilos: o clássico e o contemporâneo.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="projects_thumb">
                                        <img class="sobreImg" src="/assets/images/agenda/dia-da-bailarina.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project_area">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-6">
                                    <div class="projects_thumb">
                                        <img class="sobreImg" src="/assets/images/agenda/danca.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="projects_info">
                                        <br>
                                        <h3>Dia internacional da dança</h3>
                                        <p>O Dia Internacional da Dança é comemorado anualmente em 29 de abril.
                                            Também conhecido como Dia Mundial da Dança, esta data é destinada a
                                            homenagear uma das
                                            manifestações artísticas mais animadas e antigas que existem: a dança!
                                            A dança tem o poder de captar e transmitir traços particulares de diferentes
                                            culturas
                                            através dos tempos. Existem diversos estilos de dança diferentes, cada um
                                            com a sua própria
                                            personalidade. O Dia da Dança busca
                                            a valorização dessas identidades distintas.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project_area">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-6">
                                    <div class="projects_info">
                                        <br>
                                        <h3>Dia do solista</h3>
                                        <p>O Dia do Solista é celebrado anualmente no dia 14 de junho.
                                            O solista é aquele profissional virtuoso que é capaz de executar
                                            sozinho certos movimentos, no caso da dança e do esporte, ou melodias,
                                            no caso da música. Igualmente, os atores podem ser solistas quando estão
                                            sozinhos em cena ou recitam um grande texto que não possui réplica.
                                            No esporte, algumas modalidades podem ser disputadas em equipe, duplas ou solo,
                                            como a ginástica rítmica e o nado sincronizado.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="projects_thumb">
                                        <img class="sobreImg" src="/assets/images/agenda/solista.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section_title text-center mb-65">
                        <h3>Calendário e eventos</h3>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <form method="post" action="/calendario/criar">
                                    <div class="col-md-12" id="calendar-events-form">
                                        <h4>Evento</h4>
                                        <div class="row">
                                            <input type="hidden" name="id" id="event-id" data-id="-1">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputBorder">Titulo: </label>
                                                    <input type="text" class="form-control form-control-border" name="title" id="event-title" placeholder="Titulo do evento">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputRounded0">Url: </label>
                                                    <input type="text" class="form-control rounded-0" name="url" id="event-link" placeholder="Link do evento">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="reservationtime">Data do evento: </label>
                                                <div class="input-group">                                            
                                                    <input type="date" class="form-control float-right" name="date" id="reservationtime">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <label for="reservationtime">Cor para o evento: </label>
                                                <div class="custom-control custom-radio">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <input class="custom-control-input custom-control-input-danger custom-control-input-outline" type="radio" id="radio-1" name="color" value="#0073b7">
                                                            <label for="radio-1" class="custom-control-label">Azul</label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input class="custom-control-input custom-control-input-success custom-control-input-outline" type="radio" id="radio-2" name="color" value="#00a65a">
                                                            <label for="radio-2" class="custom-control-label">Verde</label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input class="custom-control-input custom-control-input-damger custom-control-input-outline" type="radio" id="radio-3" name="color" value="#f56954">
                                                            <label for="radio-3" class="custom-control-label">Laranja</label>
                                                        </div>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div>                                       
                                        </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputBorderWidth2">Descrição:</label>
                                                    <textarea type="text" class="form-control form-control-border border-width-2" id="event-description" name="description" placeholder="breve descrição"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                
                                                <button class="btn btn-sm btn-success btn-flat" type="submit">
                                                    Salvar
                                                </button>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-12">
                                            <!-- calendario -->
                                            <div id="calendar"></div>
                                        </div>
                                    </div>
                                </form>
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
                            <h3>Anotações</h3>
                            <p>Caso você não queira esquecer de algo e não tem um papel e caneta para anotar. Use nosso
                                campo anotações!
                                <br> <button type="button" class="boxed-btn3" data-toggle="modal" data-target=".bd-example-modal-lg">Anotações </button>
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
        <?php
            foreach($events as $event):
        ?>
            <input type="hidden" id="event-<?php echo $event->id;?>" data-description="<?php echo $event->description;?>">
        <?php
            endforeach;
        ?>
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
        <script src="/assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="/assets/js/jquery.form.js"></script>
        <script src="/assets/js/jquery.validate.min.js"></script>
        <script src="/assets/js/mail-script.js"></script>
        <script src="/assets/js/plugins.js"></script>
        <script src="/assets/plugins/fullcalendar/main.js"></script>
        <script src="/assets/js/main.js"></script>
        <!-- date-range-picker -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>    
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
            var date = new Date()
            var d    = date.getDate(),
                m    = date.getMonth(),
                y    = date.getFullYear();
            
            var Calendar = FullCalendar.Calendar;
            var calendarEl = document.getElementById('calendar');
            var calendar = new Calendar(calendarEl, {
              headerToolbar: {
                left  : 'prev,next today',
                center: 'title',
                right : 'dayGridMonth,timeGridWeek,timeGridDay'
              },
              themeSystem: 'bootstrap',
              eventClick:function(info) {  
                console.log(info.event)
                Swal.fire({
                    title: info.event.title,                    
                    html: '<p>'+info.event.extendedProps.description+'</p><p>Data: '+info.event.extendedProps.datastart.split(" ")[0]+'</p><br><button class="btn btn-sm btn-warning btn-flat" id="delete-event" onclick="del('+info.event.id+')" >Excluir</button>',
                    showCloseButton: true
                })  
                
              },
              //Random default events
              events: [                
                <?php
                foreach($events as $event):    
                ?>
                {
                  id             : "<?php echo $event->id; ?>",
                  title          : "<?php echo $event->title; ?>",
                  description    : "<?php echo $event->description; ?>",
                  start          : new Date("<?php echo $event->start; ?>"),                  
                  datastart      : "<?php echo $event->start; ?>",
                  backgroundColor: '<?php echo $event->backgroundColor; ?>', //red
                  borderColor    : '<?php echo $event->borderColor; ?>', //red
                  allDay         : <?php echo ($event->allDay != 1) ? "true": "false"; ?>
                  <?php
                if(!empty($event->url)){
                   echo "url: \"".$event->url."\""; 
                }
                ?>
                },
                <?php 
                endforeach;
                ?>
              ],
              editable  : true,
              ignoreTimezone: false,
                buttonText: {
                    prev: "<",
                    next: ">",
                    prevYear: "<",
                    nextYear: ">",
                    today: "Hoje",
                    month: "Mês",
                    week: "Semana",
                    day: "Dia"
                }
            });
            
            calendar.render();
            
            function del(id){
                console.log(id);
                $.get('/calendario/deleta/'+id, function(data){
                    location.reload()
                })
            }
            
        </script>
        <style>
            #calendar a{
            color: black !important;
            }
        </style>
        <!-- modal -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="list-group">
                    <a class="list-group-item list-group-item-action">
                    Anotações
                    </a>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- textarea -->
                            <div class="form-group">
                                <textarea class="form-control" rows="3" placeholder="Escreva aqui!!"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="boxed-btn3" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </body>
</html>

