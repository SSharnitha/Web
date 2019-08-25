function validateForm()
{
    var fname=document.forms["myform"]["fname"].value;
    var lname=document.forms["myform"]["lname"].value;
    var password1=document.forms["myform"]["pass1"].value;
    var password2=document.forms["myform"]["pass2"].value;
    var uname=document.forms["myform"]["uname"].value;

    if (fname==null || lname=="" || uname=="")
    {  
        alert("Enter the name");  
        return false;  
    }
    if (fname.length<8 || uname.length<8 || uname.length<8)
    {  
        alert("Enter valid name");  
        return false;  
    }                        
                                                 
    if(password1.length<6)
    {  
        alert("Password must be at least 6 characters long.");  
        return false;
    }
    if(password2!=password1)
    {  
        alert("Password mismatch");  
        return false;
    }  
                           
    var phn = document.forms["myform"]["number"].value;
    
     if(phn.length<10 || phn.length>10)
     {
         alert("Enter correct number");
         return false;
    }else if(isNaN(phn))
    {
        alert("check The phone number");
        return false;
    }

}