<?php

    function    loadClass($classe) {

        require_once 'Entity/' . $classe . '.php';
    }

    spl_autoload_register('loadClass');

?>