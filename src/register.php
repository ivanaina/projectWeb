<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
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
	<!-- <script src="Login_v8/vendor/animsition/js/animsition.min.js"></script> -->
<!--===============================================================================================-->
	<script src="Login_v8/vendor/bootstrap/js/popper.js"></script>
	<script src="Login_v8/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<!-- <script src="Login_v8/vendor/select2/select2.min.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="Login_v8/vendor/daterangepicker/moment.min.js"></script> -->
	<!-- <script src="Login_v8/vendor/daterangepicker/daterangepicker.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="Login_v8/vendor/countdowntime/countdowntime.js"></script> -->

	<!-- <script src="Login_v8/js/main.js"></script> -->
	<script type="text/javascript">
	$(document).ready(function(){


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
        else if($(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/) === null
            	|| $(input).val().trim().length > 20) {
            	console.log("usao u email")
                return false;
            }
        }
        else if($(input).attr('name') == 'username') {
            if($(input).val().trim().match(/^[a-zA-Z_]+[a-zA-Z0-9]*$/) === null
            	|| $(input).val().trim().length > 15) {
            	console.log("usao u username");
                return false;
            }
        }
        else if($(input).attr('name') == 'phone') {
            if($(input).val().trim().match(/^(\+381)?(\s|-)?6(\d{8}|\d{7})$/) === null
            	|| $(input).val().trim().length > 15) {
            	console.log("usao u phone");
                return false;
            }
        }
        else if($(input).attr('name') == 'address') {
            if($(input).val().trim().match(/^([a-zA-Z]+ ){1,4}[0-9\/]+$/) === null
            	|| $(input).val().trim().length > 40) {
            	console.log("usao u adress");
                return false;
            }
        }
        else if($(input).attr('name') == 'pass'){
        	if ($(input).val().trim().length > 15) {
        		return false;
        	}
        }
        else if($(input).attr('name') == 'confpass'){
        	if ($(input).val().trim() !== $('#regpassword').val().trim()) {
        		return false;
        	}
        }

        
    }

	$('#register-form').submit(function (e) {
		
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

		var corect=0;

		const registerUsername=$("#regusername").val().trim();
		const registerEmail=$("#regemail").val().trim();
		const registerPassword=$("#regpassword").val().trim();
		const registerConfirm=$("#regconfirm-password").val().trim();
		const registerAddress=$("#regaddr").val().trim();
		const registerPhone=$("#regphone").val().trim();
		$.ajax({
			async: false,
			method: 'post',
			url: 'ajax/validation.php',
			data: {
				registerUsername: registerUsername,
				registerEmail: registerEmail,
				registerPassword: registerPassword,
				registerConfirm: registerConfirm,
				registerAddress: registerAddress,
				registerPhone: registerPhone
			},
			success: function (response) {
				if(response == "uspeh"){
					corect=1;
				}
				else if(response =="postoji")
				{
					corect=-1;
				}
				else {
				console.log('nebravo', response);
					corect=0;	
				}
			},
			error: function (error) {
				console.log('GRESKA', error);
				corect=0;
			}
		});
		console.log(registerPassword,registerEmail,registerConfirm,registerUsername);
		if(corect == 1){
			
			return true;
		}
		else if( corect == -1)
		{
			$('#errmsg').html('<span class="txt1 p-b-9">That username already exist!!!</span>');
			return false;
		}
		else
			return false;

	});
	});
		
	</script>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-150" id="register-form" method="post" action="main.php">
					<span class="login100-form-title">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Neispravan unos">
						<input class="input100" id="regusername" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Neispravan unos">
						<input class="input100" id="regaddr" type="text" name="address" placeholder="Address for delevery">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Neispravan unosa">
						<input class="input100" id="regphone" type="text" name="phone" placeholder="Phone in format ">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Neispravan unos">
						<input class="input100" id="regemail" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Please enter password">
						<input class="input100" id="regpassword" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-5" data-validate="Please confirm password">
						<input class="input100" id="regconfirm-password" type="password" name="confpass" placeholder="Confirm Password">
						<span class="focus-input100"></span>
					</div>
					<div class="text-right p-t-5 p-b-23">
						
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register
						</button>
					</div>

					<div class="flex-col-c p-t-10 p-b-40" id="errmsg">
						
					</div>

					<div class="flex-col-c p-t-20 p-b-40">
						<span class="txt1 p-b-9">
							Nakon registracije u mogucnosti ste da kupujete robote!
						</span>
					</div>

					
				</form>
			</div>
		</div>
	</div>

</body>
</html>