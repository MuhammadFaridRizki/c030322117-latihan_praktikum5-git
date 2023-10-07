<?php

$username = array('Ali', 'Bona', 'Charlie', 'Dede', 'Emon');
$password = array("password1", "password2", "password3", "password4", "password5");
{
$user = $_POST['user'];
$pass = $_POST['pass'];
}
session_start();

for ($i=0; $i <= count($username)-1; $i++)
    {
    if ($user == $username[$i] && $pass == $passwprd[$i])
        {
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        header("location: halAwal.php");
        }
    else if ($user !=$username[$i])
    {
        $user = 1; 
    }
    else if ($pass != $passwprd[$i])
    {
        $pass = 1;
    }
    }
if ($user==1)
echo "Username tidak terdaftar! silakan login kembali <a href=form.php>Login</a>";
else if ($pass==1)
{echo "Password salah! silakan login kembali <a hraf=from.php>Login</a>";}
?>