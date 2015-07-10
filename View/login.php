<!DOCTYPE html>
<html>
    <body>
        <div id="main-wrapper">
        	<div id="login-wrapper">
            	<form method="post" action="">
                        	<label for="usn">Username : </label>
                        	<input type="text" maxlength="30" required autofocus name="username" />
                        	<label for="passwd">Password : </label>
                        	<input type="password" maxlength="30" required name="password" />
                        <ul>
                    	    <li class="buttons">
                        	    <input type="submit" name="login" value="Log me in" />
                                <a href="/login/index.php?register=true">register</a>
                    	    </li>
                	    </ul>
            	</form>
            </div>
        </div>
    </body>
</html>