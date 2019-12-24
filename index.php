<?php

spl_autoload_register(function ($class) {
    $directories = ["class", "modele", "controller"];
    foreach ($directories as $dir) {
        $file = $dir . "/" . $class . ".php";
        if (file_exists($file)) {
            require_once $file;
        }
    }
});

require 'vue/template.php';