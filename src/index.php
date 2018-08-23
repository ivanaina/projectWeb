<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Login_v8/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v8/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v8/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v8/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v8/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v8/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v8/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v8/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v8/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login_v8/css/main.css">
<!--===============================================================================================-->
	<!--===============================================================================================-->
	<script src="Login_v8/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v8/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v8/vendor/bootstrap/js/popper.js"></script>
	<script src="Login_v8/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v8/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v8/vendor/daterangepicker/moment.min.js"></script>
	<script src="Login_v8/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Login_v8/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script type='text/javascript'>
	function print() {
		$('#errmsg').html('<div class="flex-col-c p-t-60"><span class="txt1 p-b-9">Bad username or password</span></div>');
	}
</script>
	<script src="Login_v8/js/main.js"></script>
	<script type="text/javascript">
	function showValidate(input) {
        var thisAlert = $(input).parent();
        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();
        $(thisAlert).removeClass('alert-validate');
    }
    function validate (input) {
    	// console.log(input);
    	if($(input).val().trim() == ''){
            	console.log("trim");
                return false;
            }
        else if($(input).attr('name') == 'username') {
            if($(input).val().trim().match(/^[a-zA-Z_]+[a-zA-Z0-9]*$/) === null
            	|| $(input).val().trim().length > 15) {
            	console.log("usao u username");
                return false;
            }
        }
        else if($(input).attr('name') == 'pass'){
        	if ($(input).val().trim().length > 15) {
        		return false;
        	}
        }


        
    }
		$('#login-form').submit(function(e){

			var check = true;
		var input = $('.validate-input .input100');
		$('.validate-form .input100').each(function(){

        $(this).focus(function(){
           hideValidate(this);
        });


    });
        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){

                showValidate(input[i]);
                check=false;
            }
        }
        if(check==false)
        return false;



		const logUsername = $('#username').val();
		const logPass = $('#password').val();
		var corect=0;
		$.ajax({
			async: false,
			method: 'post',
			url: 'ajax/logvalidation.php',
			data: {
				logUsername: logUsername,
				logPass: logPass
			},
			success: function(response){
				if(response == "uspeh"){
					console.log("ima u bazi");
					corect=1;
					console.log(corect);
				}
				else{
					print();
					console.log("nema u bazi");
					corect=0;
				}
				
			},
			error: function (error) {
				corect=0;
			}
		});
		console.log(logPass,logUsername);
		console.log(corect);
		if(corect)
			return true;
		else
			return false;

	});

	</script>

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="post" action="main.php" id="login-form">
					<span class="login100-form-title">
						Sign In
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Neispravan username">
						<input class="input100" type="text" name="username" placeholder="Username" id="username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Neispravna sifra">
						<input class="input100" type="password" name="pass" placeholder="Password" id="password">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="submit">
							Sign in
						</button>
					</div>
					
					<div id="errmsg">
					
					</div>
					<div class="flex-col-c p-t-150 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="register.php" class="txt3">
							Sign up now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

</body>
</html>




