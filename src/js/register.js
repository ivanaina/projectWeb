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
		