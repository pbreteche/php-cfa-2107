<?php

class Meunier
{

    public function fournirFarine()
    {
        if (true) {
            throw new PlusDeCerealException('plus de céréal');
        }

        echo 'fournit la farine';
    }
}

class PlusDeCerealException extends Exception
{}