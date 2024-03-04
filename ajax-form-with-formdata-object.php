<script>

$.ajax({
		        url: 'registration-do.php',
                // data: {'Data':data}, 
                 data: new FormData(document.querySelector('#user_signup')),
				 processData: false,
                 contentType: false,
                type:'POST',
                beforeSend: function() {
					//$(element).button('loading');
                    // $('.loader').hide()
				},
				complete: function() {
					//$(element).button('reset');
				},
		        success:function(result){           
                if(result['output']==0)
                { 
                    $('#error-msg1').show();
                    $('#error-msg2').show();
					$('.errormsg').show();
                    $('#workshop_regi_border').css('border-color','red');
                    return false;
                }
				
                else
                {
                 
                    $("#registration_button").hide();
                    $('#registration_msg').show();
                    // $('.loader').hide()
                  window.location.href = "../registration/w.php?id="+result['auto_login_string']+"&registration_success=true"; 
				
			}
         },
         error: function(data) {
            alert('Error in Data Processing. Please try Again.');return false;
         }
     });   