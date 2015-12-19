<?php 
        
       if (!isset($_SESSION))
       {
            session_start();
        }
?>


<html>
    
    <head>
       
      
        
        <title>CheapoMail | Login</title>
       <link type="text/css" rel="stylesheet" href="style.css"/>
        <!--<link type="text/css" rel="stylesheet" href="newstyle.css"/>-->
        <script language="javascript" type="text/javascript" src="general.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        
        
        <script>
$(document).ready(function gh(){
    $("#compose").click(function(){
        $("#whitespace").load("compose.html");
       
    });
});


$(document).ready(function(){
    $("#reguser").click(function(){
        $("#whitespace").load("register.php");
       
    });
});

//$("#whitespace").onclick = gh();


</script>
        
        
        
        <style>
        body{
	/*background-image: url("leaf.jpg");*/
	background-color: #253847;
    background-repeat: no-repeat;
    

}

#msgarea
{
    border:1px solid red;
    width:400px;
    height:200px;
    
    
}

#login
{
    margin-left: auto;
    margin-right:auto;
    border:0px solid black;
    border-radius: 2px;
    background-color:rgba(227,108,104,0.8);
    width:800px;
    height:500px;
    margin-top:150px;
    
}



.insidediv{
    margin-left:10px;
    border:1px solid black;
    margin-top:10px;
    
}





.welcome{color:black;
    font-family: "Comic Sans MS", cursive, sans-serif; 
    font-size:15px; border:1px solid black;
    width:200px; margin-left:75px; height:100px;}

.tagline{font-size:15px;}



ul li{color:white; font-size:17px; font-family:"Comic Sans MS", cursive, sans-serif;}

.logtext{border:0px solid black;height:50px;
    margin-top:35px;color: rgb(227,108,104); 
    font-size: 22px;font-weight:600; 
    font-family:"Calibri";width:150px;
    margin-left: 40px;}

.loginfo{width:365px;height:250px;
    border:0px solid black;
    margin-left: 40px}
    


.button{border:0px solid black; 
    background-color:#253847;
    color:white; width:100px; height:50px;
    cursor:grab;
}



#nouser1{color:red; visibility:hidden;
    
}

.err{width:450px;height:50px; border:none;scroll:no;
    
}

.welcomeuser{border:0px solid black;height:50px;
    margin-top:35px;color: rgb(227,108,104); 
    font-size: 22px;font-weight:600; 
    font-family:"Calibri";width:390px;
    margin-left: 40px;}


        
        
        
        .sidebar{border:0px solid black; height:45px; background-color: #253847; width:300px;text-align:center; 
        line-height:35px;color:white;font-size:20px;font-family:sans-serif;}
        
        .sidebar:hover{background-color: white;color:black;}
        
        .infoo{float:left;border:0px solid black; width:270px; margin-top:0px; height:450px;margin-left:39px;}

.logo{margin-top:38px;margin-left:80px}

.info{border:0px solid black;width:210px;
    margin-left:25px;height:180px;
    margin-top:40px}
    
.welmess{width:230px; height:70px; border:0px solid black; margin-left:25px; font-family:"Comic Sans MS", cursive, sans-serif; color:white;}

#container{width:1400px; height:700px; border:0px solid red; margin-left:auto; margin-right:auto;
}

#loginover{float:right;
    margin-right:0px;
    border:0px solid black;
    background-color: white;
    width:450px;
    height:500px;
    margin-top:0px;
    background-color:white;
    
}

.bxes{
    width:365px;
    height:30px;
    border-bottom:1px solid black;
    border-top:0px black;
    border-left:0px black;
    border-right:0px solid black;
}

.fld{
    width:365px;
    height:30px;
    border:1px solid black;
    
}




#loginover2{float:right;
    margin-right:0px;
    border:0px solid black;
    background-color: white;
    width:450px;
    height:500px;
    margin-top:0px;
    
    
}

.navigate{border:0px solid black;width:298px; float:left;
    margin-left:0px;height:450px;
    margin-top:0px}
        
        
            /* .select{height:50px; background-color:#253847;}
            .select:hover{height:50px; background-color:white;}
            */
            
           



         
   
        </style>
       
    </head>
    
<body>


   <div id="container">
    <div id="login" style="width:900px;">
       
        <div class="navigate">
           <!-- <center><img src="man.png"/></center>-->
            
            <center><p style="color:white; font-size:25px; margin-top:35px; margin-left:-15px">
            <?php
            if ($_SESSION['username'])
            {
             echo $_SESSION['firstname']." "; 
             echo $_SESSION['lastname']; 
            }
            ?>
        
        </p></center><br><br>
        
       <a href="javascript:void(0)" style="text-decoration:none;color:black;" id="compose"><div class="sidebar">Compose</div></a><br>
        <a href="javascript:void(0)" style="text-decoration:none;color:black;" id="inbx"><div class="sidebar">Inbox</div></a><br>
        <a href="javascript:void(0)" style="text-decoration:none;color:black;" id="reguser"><div class="sidebar">Register User</div></a><br>
        <a href="main.php" style="text-decoration:none;color:black;"><div class="sidebar">Logout<?php session_destroy();?></div></a><br>
            
        </div>
        
        
        <div id="loginover2" style="width:600px;">
        
            <div class="welcomeuser" style="border:1px solid red;">
                
            <?php if($_SESSION['username'])
            echo "Welcome ".$_SESSION['firstname'];
           else 
                die ("You must be logged in");
                
             
            ?>
            <!--end of php-->
           
            
            
            
            </div>
            
             <div style="border:1px solid red; width:550px; height:390px; margin-left:40px" id="whitespace">
               

                
                
            </div>
            
            
            
            
        
           
       
        
        
        
        
        
        
        </div><br>
        
        
    
    <br><br>
    
   <!-- <a href=""><div class="select">INBOX</div><a/>-->
    
    </div>

</div>
</body>



</html>
