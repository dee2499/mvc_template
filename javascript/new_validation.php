<html>
<head>
<meta name="generator" content="PhpED Version 5.9 (Build 5921)">
<title></title>
<link rel="shortcut icon"  href="">
<script type="text/javascript">
	function valid()
	{
		var letters = /^[A-Za-z]+$/;  
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
	
		if(document.frm.name.value == '')
		{
			document.frm.name.style.background = 'yellow';
			alert('Please fil First Name');
			return false;
		}
		if((document.frm.name.value.length < 3) && (document.frm.name.value.length > 15))
		{
			alert('Invalid Length');
			return false;
		}
		
		
		
		//valid email
		if(document.frm.email.value.match(mailformat))  
		{  
			return true;  
		}  
		else  
		{  
			alert("You have entered an invalid email address!");  
			email.focus();  
			return false;  
		}   
		
		
		//valid name (only character)
		if(document.frm.name.value.match(letters))  
		{  
			return true;  
		}  
		else  
		{  	
			alert('Username must have alphabet characters only');  
			name.focus();  
			return false;  
		}  
	}
	
	
	
	function allLetter(name)  
	{   
		var letters = /^[A-Za-z]+$/;  
		if(document.frm.name.value.match(letters))  
		{  
			return true;  
		}  
		else  
		{  	
			alert('Username must have alphabet characters only');  
			name.focus();  
			return false;  
		}  
	} 
	
	function ValidateEmail(email)  
	{  
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
		if(document.frm.email.value.match(mailformat))  
		{  
			return true;  
		}  
		else  
		{  
			alert("You have entered an invalid email address!");  
			email.focus();  
			return false;  
		}  
	}
</script>
</head>
<body>
<form method="post" name="frm" onSubmit="return valid()"> 
    Enate Name:<input type="text" name="name" onBlur="return allLetter()"><br>
     Enate LastName:<input type="text" name="lname"><br>
	 Enate Email:<input type="text" name="email" onBlur="return ValidateEmail()"><br><br> 
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>