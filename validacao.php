<?php
require_once 'session.php';
require_once 'control.php';
require_once 'get.php';
$get = new Get();
$session = new Session();
if ($session->get('email') <> '' ) {
    foreach ($control as $index => $value) {
        if ($session->get('email') == $value['User'] && $session->get('pass') == $value['pass']) {
            require_once 'pagina2.php';
            break;
        }
    }
} else echo '<p><a href="index.html">Faça o login</a></p>';