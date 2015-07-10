<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="" style="text-align: center">
            <label for="usn">Username : </label>
            <input type="text" maxlength="30" required autofocus name="username" />
            <br><br>
            <label for="passwd">Password : </label>
            <input type="password" maxlength="30" required name="password" />
            <br><br>
            <input type="submit" name="login" value="Log me in" />
            <a href="/login/index.php?register=true">register</a>
        </form>
    </body>
</html>