    var firstname = false;
    var lastname = false;
    var email = false;
    var address = false;
    var phonenumber = false;
    var password = false;
    var pannumber = false;
    var confirm_password = false;
    var securityanswer = false;
    var check_confirm = false;
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var password_reg = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
    var temp;
    var temp1;
    var temp2;
    var regpan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;
    var regphn = /^([0-9]){10}$/;
    function validation(field)
    {
      if(field=='firstname')
      {
        if(document.getElementById("firstname").value=="")
        {
          document.getElementById("error_firstname").style.display="block";
          
          firstname=false;
        } 
        else
        {
          document.getElementById("error_firstname").style.display="none";
          firstname=true;
        } 
      }
      else if(field=='address')
      {
        if(document.getElementById("address").value=="")
        {
          document.getElementById("error_address").style.display="block";
          address=false;
        } 
        else
        {
          document.getElementById("error_address").style.display="none";
          address=true;
        } 
      } 
      else if(field=='lastname')
      {
        if(document.getElementById("lastname").value=="")
        {
          document.getElementById("error_lastname").style.display="block";
          lastname=false;
        } 
        else
        {
          document.getElementById("error_lastname").style.display="none";
          lastname=true;
        } 
      }
      else if(field=='securityanswer')
      {
        if(document.getElementById("securityanswer").value=="")
        {
          document.getElementById("error_securityanswer").style.display="block";
          securityanswer=false;
        } 
        else 
        {
          if(document.getElementById("securityquestion").value != ""){
              document.getElementById("error_securityanswer").style.display="none";
              securityanswer=true;
          }
          
        } 
      }
      else if(field=='email')
      {
        
        temp=document.getElementById("email").value;
        temp=re.test(String(temp).toLowerCase());
        if((temp=="")||(temp==false))
        {
          document.getElementById("error_email").style.display="block";
          email=false;
        } 
        else
        {
          document.getElementById("error_email").style.display="none";
          email=true;
        } 
      }
      else if(field=='phonenumber')
      {
        
        temp2=document.getElementById("phonenumber").value;
        temp2=regphn.test(temp2);
        if((temp2=="")||(temp2==false))
        {
          document.getElementById("error_phonenumber").style.display="block";
          phonenumber=false;
        } 
        else
        {
          document.getElementById("error_phonenumber").style.display="none";
          phonenumber=true;
        } 
      }
      else if(field=='pannumber')
      {
        
        temp1=document.getElementById("pannumber").value;
        temp1=regpan.test(temp1);
        if((temp1=="")||(temp1==false))
        {
          document.getElementById("error_pannumber").style.display="block";
          pannumber=false;
        } 
        else
        {
          document.getElementById("error_pannumber").style.display="none";
          pannumber=true;
        } 
      }
      else if(field=='password')
      {
        
        temp=document.getElementById("password").value;
        temp=password_reg.test(temp);
        if((temp=="")||(temp==false))
        {
          document.getElementById("error_password").style.display="block";
          password=false;
        } 
        else
        {
          document.getElementById("error_password").style.display="none";
          password=true;
        }
        if((temp!=document.getElementById("confirm_password").value)&&(check_confirm==true))  
        {
          document.getElementById("error_confirmpassword").style.display="block";
          confirm_password=false;
        } 
        else
        {
          document.getElementById("error_confirmpassword").style.display="none";
          confirm_password=true;  
        } 
          
      }
      else if(field=='confirm_password')
      {
        
        temp=document.getElementById("confirm_password").value;
        
        if((temp=="")||(temp!=document.getElementById("password").value))
        {
          document.getElementById("error_confirmpassword").style.display="block";
          confirm_password=false;
        } 
        else
        {
          document.getElementById("error_confirmpassword").style.display="none";
          confirm_password=true;
        } 
      }
      if((firstname==true)&&(lastname==true)&&(email==true)&&(pannumber==true)&&(phonenumber==true)&&(address==true)&&(password==true)&&(confirm_password==true) && (securityanswer== true))
      {
        document.getElementById("bt1").disabled=false;
      } 
      else
      {
        document.getElementById("bt1").disabled=true;
      } 
    }
    function cheking() {
      check_confirm=true;
    }
    function form_send() 
    {
      
    }
 //oooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo

    var userfirstname = false;
    var userlastname = false;
    var useremail = false;
    var useraddress = false;
    var userphonenumber = false;
    var userpassword = false;
    var userpannumber = false;
    var userconfirm_password = false;
    var usersecurityanswer = false;
    var usercheck_confirm = false;
    var regemail= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var userpassword_reg = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
    var usertemp;
    var usertemp1;
    var usertemp2;
    var userregpan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;
    var userregphn = /^([0-9]){10}$/;
    function validation1(field1)
    {
      if(field1=='userfirstname')
      {
        if(document.getElementById("userfirstname").value=="")
        {
          document.getElementById("error_userfirstname").style.display="block";
          
          userfirstname=false;
        } 
        else
        {
          document.getElementById("error_userfirstname").style.display="none";
          userfirstname=true;
        } 
      }
      else if(field1=='useraddress')
      {
        if(document.getElementById("useraddress").value=="")
        {
          document.getElementById("error_useraddress").style.display="block";
          useraddress=false;
        } 
        else
        {
          document.getElementById("error_useraddress").style.display="none";
          useraddress=true;
        } 
      } 
      else if(field1=='userlastname')
      {
        if(document.getElementById("userlastname").value=="")
        {
          document.getElementById("error_userlastname").style.display="block";
          userlastname=false;
        } 
        else
        {
          document.getElementById("error_userlastname").style.display="none";
          userlastname=true;
        } 
      }
      else if(field1=='usersecurityanswer')
      {
        if(document.getElementById("usersecurityanswer").value=="")
        {
          document.getElementById("error_usersecurityanswer").style.display="block";
          usersecurityanswer=false;
        } 
        else 
        {
          if(document.getElementById("usersecurityquestion").value != ""){
              document.getElementById("error_usersecurityanswer").style.display="none";
              usersecurityanswer=true;
          }
          
        } 
      }
      else if(field1=='useremail')
      {
        
        usertemp=document.getElementById("useremail").value;
        usertemp=regemail.test(String(usertemp).toLowerCase());
        if((usertemp=="")||(usertemp==false))
        {
          document.getElementById("error_useremail").style.display="block";
          useremail=false;
        } 
        else
        {
          document.getElementById("error_useremail").style.display="none";
          useremail=true;
        } 
      }
      else if(field1=='userphonenumber')
      {
        
        usertemp2=document.getElementById("userphonenumber").value;
        usertemp2=userregphn.test(usertemp2);
        if((usertemp2=="")||(usertemp2==false))
        {
          document.getElementById("error_userphonenumber").style.display="block";
          userphonenumber=false;
        } 
        else
        {
          document.getElementById("error_userphonenumber").style.display="none";
          userphonenumber=true;
        } 
      }
      else if(field1=='userpannumber')
      {
        
        usertemp1=document.getElementById("userpannumber").value;
        usertemp1=userregpan.test(usertemp1);
        if((usertemp1=="")||(usertemp1==false))
        {
          document.getElementById("error_userpannumber").style.display="block";
          userpannumber=false;
        } 
        else
        {
          document.getElementById("error_userpannumber").style.display="none";
          userpannumber=true;
        } 
      }
      else if(field1=='userpassword')
      {
        
        usertemp=document.getElementById("userpassword").value;
        usertemp=userpassword_reg.test(usertemp);
        if((usertemp=="")||(usertemp==false))
        {
          document.getElementById("error_userpassword").style.display="block";
          userpassword=false;
        } 
        else
        {
          document.getElementById("error_userpassword").style.display="none";
          userpassword=true;
        }
        if((usertemp!=document.getElementById("userconfirm_password").value)&&(usercheck_confirm==true))  
        {
          document.getElementById("error_userconfirm_password").style.display="block";
          userconfirm_password=false;
        } 
        else
        {
          document.getElementById("error_userconfirm_password").style.display="none";
          userconfirm_password=true;  
        } 
          
      }
      else if(field1=='userconfirm_password')
      {
        
        usertemp=document.getElementById("userconfirm_password").value;
        
        if((usertemp=="")||(usertemp!=document.getElementById("userpassword").value))
        {
          document.getElementById("error_userconfirm_password").style.display="block";
          userconfirm_password=false;
        } 
        else
        {
          document.getElementById("error_userconfirm_password").style.display="none";
          userconfirm_password=true;
        } 
      }
      if((userfirstname==true)&&(userlastname==true)&&(useremail==true)&&(userpannumber==true)&&
        (userphonenumber==true)&&(useraddress==true)&&(userpassword==true)&&(userconfirm_password==true) 
        && (usersecurityanswer== true) )
      {
        document.getElementById("bt11").disabled=false;
      } 
      else
      {
        document.getElementById("bt11").disabled=true;
      } 
    }
    function cheking1() {
      usercheck_confirm=true;
    }
    function form_send1() 
    {
      
    }
 