<!DOCTYPE html>
<html>
    <body>
        <div id="main-wrapper">
        	<div id="register-wrapper">
            	<form method="post" action="index.php">
                        	<label for="usn">Username : </label>
                        	<input type="text" id="usn" maxlength="30" required autofocus name="username" />
                        	<label for="passwd">Password : </label>
                        	<input type="password" id="passwd" maxlength="30" required name="password" />

                        	<label for="conpasswd">Confirm Password : </label>
                        	<input type="password" id="conpasswd" maxlength="30" required name="conpassword" />
                    	<ul>
                    	<li class="buttons">
                        	<input type="submit" name="register" value="Register" />
                    	</li>
                	</ul>
            	</form>
            </div>
        </div>
    </body>
</html>