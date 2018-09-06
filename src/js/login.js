$(document).ready(function(){

	function print() {
		$('#errmsg').html('<div class="flex-col-c p-t-20"><span class="txt1 p-b-9">Bad username or password</span></div>');
	}
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
});
	