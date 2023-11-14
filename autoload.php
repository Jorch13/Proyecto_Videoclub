<?php

spl_autoload_register(function ($className) {
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
    $filePath = __DIR__ . '/src/' . $classPath;

    if (file_exists($filePath)) {
        include_once $filePath;
    }
});
