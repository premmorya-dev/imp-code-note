
   
   <input type="text" maxlength="10" id="mobile" onKeyUp="return check_mobile_error(this.value)" name="mobile" title="Mobile No" placeholder="10 Digit Mobile Number"  value="" class="form-control">

<script>
    
function check_fist_name_error(first_name) 
{
	var pattern=/[^a-z|^A-Z|^\s]/;
	var first_name = $("#first_name").val();
    var name=isNaN(first_name);
    if(document.getElementById("first_name").value.match(pattern))
    {
		$("#first_name").removeClass('error-bg'); 
		$('#error-msgname').hide(); 
		$('.errormsg').hide();
		return true;
	}
	else if((first_name==""))
	{ 
		$("#first_name").addClass('error-bg');
	    $("#first_name").focus();
	    $('#error-msgname').show();
		$('.errormsg').show();		
		return false;	
	}else
	{
		$("#first_name").removeClass('error-bg');
		$('#error-msgname').hide();
		$('.errormsg').hide();
		return true;
	} 

} 

function check_mobile_error(mob)
{
	var numericString = mob;
	var firstDigit = parseInt(numericString.charAt(0), 10);

	if((isNaN(mob)) || (mob=="") || (mob.length<=9))
     {
		$("#mobile").addClass(' error-bg');
		$("#mobile").focus();
		$('#error-msgmobile').show();
		$('.errormsg').show();
        return false;
     }else if( firstDigit == 0){
		$('#error-msgmobile1').show();
		$('.errormsg').show();
	 }
	 else 
	 {
		$("#mobile").removeClass('error-bg');
		$('#error-msgmobile').hide();
		$('#error-msgmobile1').hide();
		$('.errormsg').hide();
		return true;
	 }
}

function check_login_email_error(login_email)
{
		
	var filter = /^([\w-\.]+)@((\[[0-9]{1,9}\.[0-9]{1,9}\.[0-9]{1,9}\.)|(([\w-]+\.)+))([a-zA-Z]{2,9}|[0-9]{1,9})(\]?)$/;
    if (filter.test(login_email)) {
		$("#login_email").removeClass('error-bg');
        return true;
    }
    else {
		$("#login_email").addClass('error-bg');
		$("#login_email").focus();
		return false;
    }
}
