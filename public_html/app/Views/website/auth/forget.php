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
				<form class="login100-form validate-form" method="POST" id="esqueci-senha" action="/auth/esqueci-senha">
					<span class="login100-form-title p-b-34 p-t-27">
						Esqueceu a senha? 
					</span>
                                <h5>Enviaremos um Link para que você possa recuperar sua senha!!</h5>
				<br>	<div class="wrap-input100 validate-input" data-validate = "Enter Email">
						<input class="input100" type="text" name="username" placeholder="Digite seu Email...">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Recuperar senha
                        </button>
                        
                    </div>
                    <div class="text-center p-t-90">
                        <a class="txt1" href="/auth/cadastro">
                        Fazer um Cadastro</a>
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

</body>
</html>