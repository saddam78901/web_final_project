
function formvali()
{
	var x=document.forms["sform"]["fname"].value;
	var y=document.forms["sform"]["lname"].value;

	var z=document.forms["sform"]["phone"].value;
	var m=document.forms["sform"]["uname"].value;
	var n=document.forms["sform"]["pass"].value;
	var o=document.forms["sform"]["gender"].value;
	
	if(x=="")
	{
	window.alert("First Name must be field out ");
	return false;	
	}
	else if(y=="")
	{
	window.alert("Last Name must be field out ");
	return false;	
	}
	else if(z=="")
	{
	window.alert("Phone number must be field out ");
	return false;	
	}
	else if(m=="")
	{
	window.alert("User Name must be field out ");
	return false;	
	}
	else if(n=="")
	{
	window.alert("Password must be field out ");
	return false;	
	}
	else if(o=="")
	{
	window.alert("Gender must be field out ");
	return false;	
	}
		
	
}
function matchpass(){  
var firstpassword=document.forms["sform"]["pass"].value;  
var secondpassword=document.forms["sform"]["password2"].value; 
  
if(firstpassword==secondpassword){  
return true;  
}  
else{  
alert("password must be same!");  
return false;  
}  
} 