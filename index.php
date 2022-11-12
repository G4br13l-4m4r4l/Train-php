<?php
session_start();
if(isset($_SESSION['warning'])){
    echo $_SESSION['warning'];
    $_SESSION['warning'] = '';
}elseif(isset($_SESSION['login'])){
    echo $_SESSION['login'];
    $_SESSION['login'] = "";
}
?>

<form action="form.php" method="POST">
    <label>
        user:<br/>
        <input type="text" name="user"/><br/><br/>
    </label>
    <label>
        Password:<br/>
        <input type="password" name="senha"/><br/><br/>
    </label>
    <input type="submit" value="login"/>
</form>