<?php

$msg_colour = $_GET['colour'] ?? 'blue';

if ($msg_colour === '') {
    $msg_colour = 'purple';
}

view('msg/index', ['msg_colour' => $msg_colour]);