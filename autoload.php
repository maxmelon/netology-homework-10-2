<?php
function myAutoload($className)
{
    $classPath = './classes/' . $className . '.php';
    if (file_exists($classPath))
    {
    include "$classPath";
    }
}

function myAutoloadInterface($interfaceName)
{
    $interfacePath = './interfaces/' . $interfaceName . '.php';
    if (file_exists($interfacePath))
    {
        include "$interfacePath";
    }
}

spl_autoload_register('myAutoload');
spl_autoload_register('myAutoloadInterface');