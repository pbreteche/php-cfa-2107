<?php

namespace App;

class MonParent
{
    public function methodeParente()
    {
        echo get_class($this)."\n";
        echo get_called_class()."\n";
    }
}

class MaClasse extends MonParent
{

}

$instance = new MaClasse();

// property_exists, method_exists, trait_exists, interface_exists
if (class_exists(MaClasse::class)) {
    echo get_class($instance).' existe'."\n";
}

$instance->methodeParente();

if ($instance instanceof MaClasse) {
    echo get_class($instance)."\n";
}


function demoParametres(object $monParam) {
    echo 'ça marche'."\n";
}

demoParametres(new \stdClass());
