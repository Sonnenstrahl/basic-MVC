<?php session_start(); if(isset($_SESSION['username'])) {?>
<!<!DOCTYPE html>

<html>
<body>
<p>CUG SITE</p>
<a href="/login/index.php?logout=true">logout</a>
</body>
</html>

<?php } else {
    echo "Access denied";
} ?>