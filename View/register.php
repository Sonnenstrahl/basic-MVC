<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="index.php" style="text-align: center">
            <label for="usn">Username : </label>
            <input type="text" id="usn" maxlength="30" required autofocus name="username" />
            <br><br>
            <label for="passwd">Password : </label>
            <input type="password" id="passwd" maxlength="30" required name="password" />
            <br><br>
            <label for="conpasswd">Confirm Password : </label>
            <input type="password" id="conpasswd" maxlength="30" required name="conpassword" />
            <br><br>
            <input type="submit" name="register" value="Register" />
        </form>
    </body>
</html>