<?php

$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']));

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if($_POST['login'] && $_POST['password'])
    {
        $login = htmlspecialchars($_POST['login']);
        $pass = $_POST['password'];
        if($login == "admin" && $pass == "azerty")
        {

            header("Location: http://$host$uri/profile.html");
        }
        else
        {
            header("Location: http://$host$uri/index.html");
        }
    }
}