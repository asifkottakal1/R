 <!DOCTYPE html>  
    <html>  
    <head>  
        <title>register Page</title>  
		<center><h1>Register Page</h1></center>
    </head>  
    <body>  
        
        <form method="post" action="<?php echo site_url('Login/insert'); ?>">  
            <table cellpadding="2" cellspacing="2">
			    
				 <tr>  
                    <td><th>name:</th></td>  
                    <td><input type="text" name="name"></td>  
                </tr>  
                <tr>  
                    <td><th>Username:</th></td>  
                    <td><input type="text" name="user"></td>  
                </tr>  
                <tr>  
                    <td><th>Password:</th></td>  
                    <td><input type="password" name="pass"></td>  
                </tr>
					
      
                <tr>  
                    <td> </td>  
                    <td><input type="submit" value="Register"> </td>  
                </tr>  
				
            </table>  
        </form>  
    </body> 
<center><a href="<?php echo site_url();?>/login/logout"><input type="button" value="logout"></a></center>	
    </html>  