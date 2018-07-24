<?php

/**
 * This file mainly works for getting all required http inputs and process them accordingly
 * 
 */

// process request
$requestURI = explode('/', $_SERVER['REQUEST_URI']);
$scriptName = explode('/', $_SERVER['SCRIPT_NAME']);

//remove unnecessary paths from URI
for ($i = 0; $i < sizeof($scriptName); $i ++) {
    if ($requestURI[$i] == $scriptName[$i]) {
        unset($requestURI[$i]);
    }
}
$redirect = array_values($requestURI);

// post object
$controller = DEFAULT_CONTROLLER;
$method     = DEFAULT_METHOD;

if (isset($redirect) && !empty($redirect[0])) {
    $controller = ucfirst($redirect[0]) . 'Controller';

    // check if method exists in URL
    if (!empty($redirect[1])) {
        $method = 'get' . $redirect[1];
    } else {
        header('Location:' . SITE_URL);
    }
}
try {
    if (!class_exists($controller)) {
        header('Location:' . SITE_URL);
    }
    $objPost = new $controller();
    if (false === method_exists($objPost, $method)) {
        header('Location:' . SITE_URL);
    } else {
        $objPost->$method();
    }
} catch (Exception $e) {
    $objPost = new $controller();
    $objPost->getPosts();
}