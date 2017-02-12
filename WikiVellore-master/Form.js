	function formValidation()  
	{  
		var fname = document.registration.fname;
		var lname = document.registration.lname;
		var uname = document.registration.uname;
		var number = document.registration.mn;
		var mail = document.registration.email;
		var pw = document.registration.pw;
		var rpw = document.registration.rpw;
		var land = document.registration.ln;
		var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{5,15}$/;
		if(!allLetter(fname))
			{
				window.alert('Name must have maximum 20 alphabets only');  
				fname.focus();
				return false;
			}
		else if(!allLetter(lname))
			{
				window.alert('Name must have maximum 20 alphabets only');  
				lname.focus();
				return false;
			}
		else if(!ValidateEmail(mail))  
			{
				window.alert("You have entered an invalid email address!");  
				mail.focus();
				return false;
			}    
		else if(!validateUsername(uname))
			{
				window.alert('Username must contain 5 to 25 alphanumeric characters');
				uname.focus();
				return false;
			}
		else if(!inputtxt.value.match(paswd))
			{
				window.alert('Invalid Password, password must contain 5 to 15 characters which contain at least one numeric digit and a special character')  
				pw.focus();
				return false;
			}
		else if(pw.value!=rpw.value)
			{
				window.alert('Please enter the same password again.')
				rpw.focus();
				return false;
			}		
		else if(!everyNumber(number))		
			{
				window.alert('Mobile number must have 10 digits only');  
				number.focus(); 
				return false;				
			}
		else if(!checkPhone(land))
			{
				window.alert("Enter valid phone number(XXXX-XXXXXXX)");
				land.focus();
				return false;
			}
		else { 
		return true; } 
	}
	
	
	//!--Name Validation--//
	function allLetter(uname)  
	{   
		var letters = /^[A-Za-z]{1,20}$/;  
		if(uname.value.match(letters))  
		{  
			return true;  
		}  
		else  
		{  
			  
		return false;  
		}  
	}

function validateUsername(uname) 
{
	var unamevalidation = /^[A-Za-z0-9]{5,25}$/;
	if(unmae.value.match(unamevalidation))
	{
		return true;
	}
	else
	{
		return false;
	}
}	

	
	//!--Contact Validation--//
	function everyNumber(number)  
	{   
		var numbers = /^[0-9]{10}$/;  
		if(number.value.match(numbers))  
		{  
			return true;  
		}  
		else  
		{  
		return false;  
		}  
	}
	
	
	//!--Mail Validation--//
	function ValidateEmail(mail)  
	{  
		var mailformat = /^[A-Za-z0-9.!@#%&*-_+=:;"'/?<>]{1,}[@]{1}[a-z]{1,}[.]{1}[a-z.]{1,}$/;  
		if(mail.value.match(mailformat))  
		{  
			return true;  
		}  
		else  
		{  
			  
			return false;  
		}  
	}
function checkPhone(land) {
        var phoneNum = /\b\d{4}[-]{1}?\d{7}\b/; 
            if(land.value.match(phoneNum)) {
                return true;
            }
            else {
                
                return false;
            }
        }

		