<?php


function checkFromMethodType($getOrPost)
{
    if ($_SERVER['REQUEST_METHOD'] == $getOrPost) {
        return true;
    }
    return false;
}


function postInput($input)
{
    return trim(htmlentities(htmlspecialchars($_POST[$input])));
}
