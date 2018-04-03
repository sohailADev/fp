<?php
/**
 * Created by PhpStorm.
 * User: sohail
 * Date: 1/26/2018
 * Time: 2:42 PM
 */


function redirect($page)
{
    print_r('hello');
    header('location:'.URLROOT.'/'.$page);
}
function dnd($obj)
{
    echo '<pre>';
    die(print_r($obj));
   

}