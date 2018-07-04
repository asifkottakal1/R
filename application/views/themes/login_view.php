    <!DOCTYPE html>  
    <html>  
    <head>  
	<style>
		h1{
			font-size:80px;
			color:white;
			text-transform:none;
		}
	</style>
        <title>Login Page</title> 
			<center><h1>Login Page</h1></center>
    </head>  
    <body>  
         
        <form method="post" action="<?php echo site_url('Login/process'); ?>">  
           <br>  <br>   
                 
                    <center>Username:
                    <input type="text" name="user"> </center>
					<br>
                
                   <center> Password:
                    <input type="password" name="pass" > </center> 
					<br>
                  
                   <center><input type="submit" value="Login"><center>
               
				
            
        </form>  
    </body>  
    </html>  