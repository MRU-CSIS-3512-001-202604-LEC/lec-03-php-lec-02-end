<?php

function mycolour($colour) {
    if (isset($colour)) {
        return $colour;
    } 
    return "indigo";
}





$msg_colour = mycolour($_GET['colour']);

view('msg/index', ['msg_colour' => $msg_colour]);