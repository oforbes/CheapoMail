<script src="general.js"></script>


<?php

        session_start();
        $username=$_POST['username'];
        $password=$_POST['password'];
        
        if ($username && $password)
        {
            $connect=mysql_connect("127.0.0.1","oforbes_","") or die ("Fail");
            mysql_select_db("c9") or die ("couldnt find db");
            
            $query=mysql_query("SELECT * FROM User WHERE username='$username'");
            $numrows=mysql_num_rows($query);
            
            if ($numrows!=0)
            {
                //login 
                while($row=mysql_fetch_assoc($query))
                {
                    $dbusername=$row['username'];
                    $dbpassword=$row['password'];
                    $dbfname=$row['firstname'];
                    $dblname=$row['lastname'];
                    
                }
                //check to see if they match!
                if ($username==$dbusername && $password==$dbpassword)
                {
                    header( "Location:login1.php" );
                   //echo gh();
                   $_SESSION['username']=$dbusername;
                   $_SESSION['firstname']=$dbfname;
                   $_SESSION['lastname']=$dblname;
                   
                }
                else
                {
                    
                    echo "Incorrect password";
                }
               
                
            }
            else
                {
                    
                   
                    echo ("User doesnt exist");
                    
                   
                }
            
            
            
        }
        else
            die ("Please enter username and password");
       
        
        ?>
        
        




