

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SOS Ballet - Admin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--icon  -->
        <link rel="icon" type="image/png" href="/assets/images/icone/icone.jpg"/>
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/fonts/iconic/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/util.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    </head>
    <body>
        <div class="limiter">
            <div class="container-login100" style="background-image: url('/assets/img/loginCadastro/Ballet.jpg');">
                <div class="wrap-login100">
                    <form class="login100-form validate-form" method="POST" id="redefinir" action="/auth/redefinir">
                        <span class="login100-form-title p-b-34 p-t-27">
                        Redefinição de senha 
                        </span>
                        <h5>Escolha uma nova senha</h5>
                        <br>	
                        <div class="wrap-input100 validate-input" data-validate = "Senha">
                            <input class="input100" type="password" id="passwd" name="pass" placeholder="Nova Senha">
                            <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        </div>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn login">
                                Redefinir
                            </button>
                        </div>
                        <div class="text-center p-t-90">
                            <a class="txt1" href="/auth/cadastro">
                            Fazer Cadastro</a>
                            <a class="txt2" href="/auth/entrar">
                            Fazer login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="dropDownSelect1"></div>
        <script src="/assets/js/vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="/assets/js/vendor/animsition/js/animsition.min.js"></script>
        <script src="/assets/js/vendor/bootstrap/js/popper.js"></script>
        <script src="/assets/js/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="/assets/js/vendor/select2/select2.min.js"></script>
        <script src="/assets/js/vendor/daterangepicker/moment.min.js"></script>
        <script src="/assets/js/vendor/daterangepicker/daterangepicker.js"></script>
        <script src="/assets/js/vendor/countdowntime/countdowntime.js"></script>
        <script src="/assets/js/main2.js"></script>
        <script>
        </script>
    </body>
</html>

