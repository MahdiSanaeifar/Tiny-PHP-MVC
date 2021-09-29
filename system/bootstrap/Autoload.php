<?php

namespace System\Bootstrap;

class Autoload
{
    public function autoloader()
    {
        spl_autoload_register(function ($className) {
            // 1. use DIRECTORY_SEPARATOR || "/" (DIRECTORY_SEPARATOR can use in all machine like: MacOs,Windows,Linux,...)
            $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
            include_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/' . $className . '.php';
        });
    }
}