<?PHP
    session_start();
    if ($_GET['submit'] == "OK")
    {
        $_SESSION['login'] = $_GET['login'];
        $_SESSION['passwd'] = $_GET['passwd'];
    }
?>
<html>
    <body>
        <form>
            Username: <input type="text" name="login" value = "<?php echo $_SESSION['login'];?>"/><br/>
            Password: <input  type="text" name="passwd" value = "<?php echo $_SESSION['passwd'];?>"/>
            <input type="submit"/>
        </form>
    </body>
</html>
    