<?php
/**
 * Created by PhpStorm.
 * User: sohail
 * Date: 1/26/2018
 * Time: 4:23 PM
 */

session_start();




function isLogedIn()
{
    if (isset($_SESSION['username'])) {
        return true;
    }

    else {
        return false;
    }
}
