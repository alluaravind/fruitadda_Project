    // var sellerstorename= false;
    // var sellerstoredescription=false;
    // var sellerstorelocation=false;
    // var sellerpannumber = false;
    // var temp1;
    // var regpan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;
    
    // function validation(field)
    // {
    //     if(field=='sellerstorename')
    //     {
    //       if(document.getElementById("sellerstorename").value=="")
    //       {
    //         document.getElementById("error_sellerstorename").style.display="block";
            
    //         sellerstorename=false;
    //       } 
    //       else
    //       {
    //         document.getElementById("error_sellerstorename").style.display="none";
    //         sellerstorename=true;
    //       } 
    //     }
    //     else if(field=='sellerstoredescription')
    //     {
    //       if(document.getElementById("sellerstoredescription").value=="")
    //       {
    //         document.getElementById("error_sellerstoredescription").style.display="block";
    //         sellerstoredescription=false;
    //       } 
    //       else
    //       {
    //         document.getElementById("error_sellerstoredescription").style.display="none";
    //         sellerstoredescription=true;
    //       } 
    //     } 
    //     else if(field=='sellerstorelocation')
    //     {
    //       if(document.getElementById("sellerstorelocation").value=="")
    //       {
    //         document.getElementById("error_sellerstorelocation").style.display="block";
    //         sellerstorelocation=false;
    //       } 
    //       else
    //       {
    //         document.getElementById("error_sellerstorelocation").style.display="none";
    //         sellerstorelocation=true;
    //       } 
    //     }
    //     else if(field=='sellerpannumber')
    //     {
          
    //       temp1=document.getElementById("sellerpannumber").value;
    //       temp1=regpan.test(temp1);
    //       if((temp1=="")||(temp1==false))
    //       {
    //         document.getElementById("error_sellerpannumber").style.display="block";
    //         sellerpannumber=false;
    //       } 
    //       else
    //       {
    //         document.getElementById("error_sellerpannumber").style.display="none";
    //         sellerpannumber=true;
    //       } 
    //     }
    //     if((sellerstorelocation==true)&&(sellerstorename==true)&&(sellerstoredescription==true)&&(sellerpannumber==true))
    //     {
    //       document.getElementById("update_storename_submit").disabled=false;
    //     } 
    //     else
    //     {
    //       document.getElementById("update_storename_submit").disabled=true;
    //     } 
    // }
//--------------------------------------------------------------------------------
    var sellerstorename = false;
    var sellerstoredescription = false;

    var sellerstorelocation = false;
    var sellerpannumber = false;

    
    var temp1;
    
    var regpan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;
    
    function validation(field)
    {
      if(field=='sellerstorename')
      {
        if(document.getElementById("sellerstorename").value=="")
        {
          document.getElementById("error_sellerstorename").style.display="block";
          
          sellerstorename=false;
        } 
        else
        {
          document.getElementById("error_sellerstorename").style.display="none";
          sellerstorename=true;
        } 
      }
      else if(field=='sellerstorelocation')
      {
        if(document.getElementById("sellerstorelocation").value=="")
        {
          document.getElementById("error_sellerstorelocation").style.display="block";
          sellerstorelocation=false;
        } 
        else
        {
          document.getElementById("error_sellerstorelocation").style.display="none";
          sellerstorelocation=true;
        } 
      } 
      else if(field=='sellerstoredescription')
      {
        if(document.getElementById("sellerstoredescription").value=="")
        {
          document.getElementById("error_sellerstoredescription").style.display="block";
          sellerstoredescription=false;
        } 
        else
        {
          document.getElementById("error_sellerstoredescription").style.display="none";
          sellerstoredescription=true;
        } 
      }
      else if(field=='sellerpannumber')
      {
        
        temp1=document.getElementById("sellerpannumber").value;
        temp1=regpan.test(temp1);
        if((temp1=="")||(temp1==false))
        {
          document.getElementById("error_sellerpannumber").style.display="block";
          sellerpannumber=false;
        } 
        else
        {
          document.getElementById("error_sellerpannumber").style.display="none";
          sellerpannumber=true;
        } 
      }
      
      if((sellerstorename==true)&&(sellerstoredescription==true)&&(sellerstorelocation==true)&&(sellerpannumber==true))
      {
        document.getElementById("update_storename_submit").disabled=false;
      } 
      else
      {
        document.getElementById("update_storename_submit").disabled=true;
      } 
    }
    function cheking() {
      check_confirm=true;
    }
    function form_send() 
    {
      
    }