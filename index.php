<?php

function dd($vars)
{
    echo '<pre>';

    var_dump($vars);

    echo '</pre>';
    exit;
};

include_once('routes.php');
